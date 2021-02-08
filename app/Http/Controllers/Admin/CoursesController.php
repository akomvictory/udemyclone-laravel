<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
//use Intervention\Video\Facades\Video;
use Illuminate\Support\Str;
use App\Course;
use App\Instructor;
use App\Category;
use App\Creview;
use App\Curriculum;
use App\Video;
use Auth;
use User;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $all_courses = Course::all();

        return view('courses.index', 
        ['all_courses' => $all_courses ]);
    }

    public function all_courses() 
    {
        $all_courses = Course::all();
        $all_category = Category::all();

        return view('courses.all-courses', 
        ['all_courses' => $all_courses,
        'all_category' => $all_category]);
    }


        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function search_course($course)
     {
        $courses = Course::where('course_title', 'like', $course)->get();
       
                return view('courses.courses-search', [
                     'courses'=>$courses]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


         $all_instructors = Instructor::all();
         $all_category = Category::all();
        
            return view('courses.create', 
            ['all_instructors' => $all_instructors,
            'all_category' => $all_category ]);

       }


     /**
     * Show all the paid courses.
     *
     * @return \Illuminate\Http\Response
     */
    public function paid_courses()
    {


         $all_instructors = Instructor::all();
         $all_category = Category::all();

         $courses = Course::where('course_type', 'paid')->get();
         
        
            return view('courses.paid', 
            ['courses' => $courses,
            'all_category' => $all_category]);

       }

            /**
     * Show all the paid courses.
     *
     * @return \Illuminate\Http\Response
     */
    public function free_courses()
    {
         $all_instructors = Instructor::all();
         $all_category = Category::all();

         $courses = Course::where('course_type', 'free')->get();
                 
            return view('courses.paid', 
            ['courses' => $courses,
            'all_category' => $all_category]);

       }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Auth::check()){
            return redirect('/');
        }

        $request->validate([
            'course_photo' => 'required',
            'course_demo_video' => 'required',
            'course_title' => 'required|min:3|max:200',
            'course_category' => 'required',
            'course_price' => 'required',
            'course_description' => 'required',
            'course_moderator' => 'required',
               ]);

        if ($request->hasFile('course_photo')) {
          $photo_file_name_to_store = uniqid().time().'.'.$request->course_photo->getClientOriginalExtension();
          //$photo_path = $request->course_photo->move(public_path().'uploads/photos', $photo_file_name_to_store);
            
          $photo_path = $request->course_photo->move(public_path().'/uploads/', $photo_file_name_to_store);
          
       }


       if ($request->hasFile('course_demo_video')) {
             $video_file_name_to_store = uniqid().time().'.'.$request->course_demo_video->getClientOriginalName();
              
             $video_path =   $request->course_demo_video->storeAs('public/videos', $video_file_name_to_store);
       
       }

        $course = new Course();
        $course->username = Auth::user()->name;
        $course->course_title = $request->course_title;
        $course->course_type = $request->course_type;
        $course->course_category = $request->course_category;
        $course->course_moderator = $request->course_moderator;
        $course->course_price = $request->course_price;
        $course->course_photo = "/uploads/".$photo_file_name_to_store;
        $course->course_demo_video = "/storage/videos/".$video_file_name_to_store;
        $course->course_description = $request->course_description;
              
       // $course->course_demo_video = '/uploads/demo.mp4';
        
        $course->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        $courses = Course::where('course_category', $category)->get();
              
        return view('courses.courses-grid', [
                            'courses'=>$courses,
                            'category'=>$category
                              ]);
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function course_detail($category, $id)
     {
        
        $all_category = Category::select('category_heading')->distinct()->get();
        
// check the category that this course belongs to
         $courses = Course::where([
                    ['course_category', '=', $category],
                    ['id', '=', $id],
                    ])->get();

                   
             $course_info = Course::find($id);


 // query the instructor table to get the instructor associated with this course
         $course_instructor = Instructor::where('instructor_name', $course_info->course_moderator)->first();

        
        $user_reviews = Creview::where('course_id', $course_info->id)->get();
        //$num_of_courses = Creview::where('course_id', $course_info->id)->get();
        $course_curriculum = Curriculum::where('course_ref_id', $course_info->id)->get();
        // check number of videos added to a particular course
        $lectures = Video::where('course_ref_id', $course_info->id)->get();
        
             
         return view('courses.course-detail',[
                    'courses'=>$courses,
                    'course_info'=>$course_info,
                    'course_instructor'=>$course_instructor,
                    'user_reviews'=>$user_reviews,
                    'course_curriculum'=>$course_curriculum,
                    'lectures'=>$lectures,
                    'all_category'=>$all_category
                        ]);
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = Course::find($id);

        $all_instructors = Instructor::all();
        $all_category = Category::all();
       
           return view('courses.edit', 
           ['all_instructors' => $all_instructors,
           'course' => $courses,
           'all_category' => $all_category ]);

    }

    public function video($category, $id)
    {
     

        $course = Course::find($id);
        $video_ref = Video::all();

        $all_category = Category::select('category_heading')->distinct()->get();
       

        $videos = Video::where('course_ref_id', $course->id)->get();
       
           return view('courses.videos', 
           ['videos' => $videos,
           'all_category' => $all_category]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!Auth::check()){
            return redirect('/');
        }

        $request->validate([
            'course_photo' => 'required',
            'course_demo_video' => 'required',
            'course_title' => 'required|min:3|max:200',
            'course_category' => 'required',
            'course_price' => 'required',
            'course_description' => 'required',
            'course_moderator' => 'required',
               ]); 

        if ($request->hasFile('course_photo')) {
            //get unique name for file
           $course_photo = uniqid().time().'.'.$request->course_photo->getClientOriginalExtension();
            //upload the file
           $request->course_photo->move(public_path().'/uploads/', $course_photo);
            //save path and name in database
          
       }

       if ($request->hasFile('course_demo_video')) {
           //get unique name for file
          $demo_video = uniqid().time().'.'.$request->course_demo_video->getClientOriginalExtension();
           //upload the file
         $path_demo_video =  $request->course_demo_video->storeAs('public/videos', $demo_video);
           //save path and name in database
         
      }
         

        $course = Course::find($id);
        $course->username = Auth::user()->name;
        $course->course_title = $request->course_title;
        $course->course_type = $request->course_type;
        $course->course_category = $request->course_category;
        $course->course_moderator = $request->course_moderator;
        $course->course_price = $request->course_price;
        $course->course_description = $request->course_description;
        $course->course_photo = 'uploads/'.$course_photo;
        $course->course_demo_video = $path_demo_video;
         
        $course->save();
        return redirect('/course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        
        //Check if post exists before deleting
        if (!isset($course)){
            return redirect('/course')->with('error', 'No course found');
        }
        
        Storage::delete('public/uploads/'.$course->course_photo);


        $course->delete();
        return redirect('/course')->with('success', 'course removed');
        
    }

    public function search(Request $request) 
    {
        $search = $request->input('course');
        
        $all_category = Category::select('category_heading')->distinct()->get();
      
        
        $search = Course::where([
            ['course_title', 'like', '%'.$search.'%']
            ])->get();

        return view('courses.search',
                  ['search' => $search,
                  'all_category' => $all_category
                  ]);
        
    }
}
