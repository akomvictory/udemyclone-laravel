<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Iapplicant;
use App\Course;
use Auth;
use App\User;
use App\Notification;
use App\Instructor;
use App\Ireview;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class InstructorController extends Controller
{


  /**
     * apply as an instructor.
     *
    
     * @return \Illuminate\Http\Response
     */
     public function apply()
     {
        
        if(Auth::check()){

        $instructor = Iapplicant::where('username', Auth::user()->name)->get();
        
         
         //Check if post exists before deleting
        if(count($instructor)<1){

            

                   $Iapplicant = new Iapplicant();
                   $Iapplicant->username = Auth::user()->name;
                   $Iapplicant->save();
        

       
                   $Notification = new Notification();
                   $Notification->username = Auth::user()->name;
                   $Notification->message = Auth::user()->name.' Requested to be an instructor';
                   $Notification->save();

                // return view('callback/instructor-applicaction');
                 return back();
              
              }else{
                    return back();
                } 
            }else{
                return back();
            }
 
        }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_instructors = Instructor::all();
        
            return view('instructors.index', 
             ['all_instructors' => $all_instructors ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instructors.create');
        
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
            'instructor_name' => 'required',
            'proffesion' => 'required',
            'instructor_photo' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'instructor_bio' => 'required',
            'intructor_facebook_link' => 'required',
            'instructor_twitter_link' => 'required',
            'instructor_linkdin_link' => 'required',
            'education_start_year' => 'required',
            'education_end_year' => 'required',
            'decipline' => 'required',
            'school_of_study' => 'required',
            'study_description' => 'required',
            'work_start_year' => 'required',
            'work_end_year' => 'required',
            'work_position' => 'required',
            'company_name' => 'required',
            'company_name' => 'required',
            'job_description' => 'required',
            
               ]);

        $instructor = new Instructor();
        $instructor->username = Auth::user()->name;
        $instructor->instructor_name = $request->instructor_name;
        $instructor->proffesion = $request->proffesion;
        $instructor->instructor_photo = $request->instructor_photo;
        $instructor->email = $request->email;
        $instructor->phone_number = $request->phone_number;
        $instructor->instructor_bio = $request->instructor_bio;
        $instructor->intructor_facebook_link = $request->intructor_facebook_link;
        $instructor->instructor_twitter_link = $request->instructor_twitter_link;
        $instructor->instructor_linkdin_link = $request->instructor_linkdin_link;
        $instructor->education_start_year = $request->education_start_year;
        $instructor->education_end_year = $request->education_end_year;
        $instructor->decipline = $request->decipline;
        $instructor->school_of_study = $request->school_of_study;
        $instructor->study_description = $request->study_description;
        $instructor->work_start_year = $request->work_start_year;
        $instructor->work_end_year = $request->work_end_year;
        $instructor->work_position = $request->work_position;
        $instructor->company_name = $request->company_name;
        $instructor->job_description = $request->job_description;
        

        if ($request->hasFile('instructor_photo')) {
            //get unique name for file
           $instructor_photo = uniqid().time().'.'.$request->instructor_photo->getClientOriginalExtension();
            //upload the file
           $request->instructor_photo->move(public_path().'/uploads/', $instructor_photo);
            //save path and name in database
           $instructor->instructor_photo = 'uploads/'.$instructor_photo;
       }

       $instructor->save();
       return back();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function profile($id)
     {

     

        $instructor = Instructor::find($id);
       $instructor_name = $instructor->instructor_name;
       $instructor_courses = Course::where('course_moderator', $instructor_name)->get();
       $ireviews = Ireview::where('instructor_name', $instructor_name)->get();
       
        $nun_of_instructor_courses = count($instructor_courses);
            
    
        return view('instructors.profile',
                 ['profile' => $instructor,
                 'ireviews' => $ireviews,
                 'nun_of_instructor_courses' => $nun_of_instructor_courses,
                 'instructor_courses' => $instructor_courses]);
                 
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instructor = Instructor::find($id);
        return view('instructors.edit', 
           ['instructor'=>$instructor]);
        
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
            'instructor_name' => 'required',
            'proffesion' => 'required',
            'instructor_photo' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'instructor_bio' => 'required',
            'intructor_facebook_link' => 'required',
            'instructor_twitter_link' => 'required',
            'instructor_linkdin_link' => 'required',
            'education_start_year' => 'required',
            'education_end_year' => 'required',
            'decipline' => 'required',
            'school_of_study' => 'required',
            'study_description' => 'required',
            'work_start_year' => 'required',
            'work_end_year' => 'required',
            'work_position' => 'required',
            'company_name' => 'required',
            'company_name' => 'required',
            'job_description' => 'required',
            
               ]);

               
        $instructor = Instructor::find($id);
        $instructor->username = Auth::user()->name;
        $instructor->instructor_name = $request->instructor_name;
        $instructor->proffesion = $request->proffesion;
        $instructor->instructor_photo = $request->instructor_photo;
        $instructor->email = $request->email;
        $instructor->phone_number = $request->phone_number;
        $instructor->instructor_bio = $request->instructor_bio;
        $instructor->intructor_facebook_link = $request->intructor_facebook_link;
        $instructor->instructor_twitter_link = $request->instructor_twitter_link;
        $instructor->instructor_linkdin_link = $request->instructor_linkdin_link;
        $instructor->education_start_year = $request->education_start_year;
        $instructor->education_end_year = $request->education_end_year;
        $instructor->school_of_study = $request->school_of_study;
        $instructor->study_description = $request->study_description;
        $instructor->work_start_year = $request->work_start_year;
        $instructor->work_end_year = $request->work_end_year;
        $instructor->work_position = $request->work_position;
        $instructor->company_name = $request->company_name;
        $instructor->job_description = $request->job_description;
        

        if ($request->hasFile('instructor_photo')) {
            //get unique name for file
           $instructor_photo = uniqid().time().'.'.$request->instructor_photo->getClientOriginalExtension();
            //upload the file
           $request->instructor_photo->move(public_path().'/uploads/', $instructor_photo);
            //save path and name in database
           $instructor->instructor_photo = 'uploads/'.$instructor_photo;
       }

       $instructor->save();
       return redirect('/instructor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instructor = Instructor::find($id);
        
        //Check if post exists before deleting
        if (!isset($instructor)){
            return redirect('/instructor')->with('error', 'No Instructor Found');
        }

        // Check for correct user
        /*
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }  */

        
            // Delete Image
            Storage::delete('public/uploads/'.$instructor->instructor_photo);
       
        
        $instructor->delete();
        return redirect('/instructor')->with('success', 'Instructor Removed');
    }
}
