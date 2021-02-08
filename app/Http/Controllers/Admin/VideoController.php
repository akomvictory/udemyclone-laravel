<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Video;
use Auth;
use App\Course;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::check()){
            return redirect('/');
        }

        $all_video = Video::all();
        
         return view('videos.index', 
                ['all_video' => $all_video]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $all_courses = Course::all();
        
            return view('videos.create', 
            ['all_courses' => $all_courses]);
     
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
           
            'course_ref_id' => 'required',
            'video_play_time' => 'required',
            'video_title' => 'required',
                             ]);

        if ($request->hasFile('video_file')) {
           
            //get unique name for file
           $video_name = uniqid().time().'.'.$request->video_file->getClientOriginalName();
            //upload the file
          $path_demo_video =  $request->video_file->storeAs('public/videos', $video_name);
            //save path and name in database
            
             }


             if ($request->hasFile('poster')) {
                
                 //get unique name for file
                $poster = uniqid().time().'.'.$request->poster->getClientOriginalName();
                 //upload the file
               $path_demo_video =  $request->poster->storeAs('public/videos', $poster);
                 //save path and name in database
                 
                  }
        
           
        
        $video = new Video();
        $video->username = Auth::user()->name;
        $video->course_ref_id = $request->course_ref_id;
        $video->video_play_time = $request->video_play_time;
        $video->video = '/storage/videos/'.$video_name;
        $video->title = $request->video_title;
        $video->poster = $request->poster;
        $video->save();
       return redirect('/video');

      
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $all_courses = Course::all();
        $video = Video::find($id);
        return view('videos.edit', 
           ['video'=>$video,
           'all_courses'=>$all_courses]);
        
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
            'video_file' => 'required',
            'poster' => 'required',
            'course_ref_id' => 'required',
            'video_play_time' => 'required',
            'video_name' => 'required',
            'video_title' => 'required',
                 ]);

        if ($request->hasFile('video_file')) {
            
             //get unique name for file
            $video_name = uniqid().time().'.'.$request->video_file->getClientOriginalName();
             //upload the file
           $path_demo_video =  $request->video_file->storeAs('public/videos', $video_name);
             //save path and name in database
             
              }
 
 
              if ($request->hasFile('poster')) {
                 
                  //get unique name for file
                 $poster = uniqid().time().'.'.$request->poster->getClientOriginalName();
                  //upload the file
                $path_demo_video =  $request->poster->move(public_path().'/uploads/', $poster);
                  //save path and name in database
                  
                   }
         
              
         $video = Video::find($id);
         $video->username = Auth::user()->name;
         $video->course_ref_id = $request->course_ref_id;
         $video->video_play_time = $request->video_play_time;
         $video->video = "/storage/videos/".$video_name;
         $video->title = $request->video_title;
         $video->poster = "/uploads/".$poster;
         $video->save();
        return redirect('/video');       
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);
        
        //Check if post exists before deleting
        if (!isset($video)){
            return redirect('/video')->with('error', 'No course found');
        }
        
        Storage::delete('public/videos/'.$video->video);


        $video->delete();
        return redirect('/video')->with('success', 'video removed');
    }
}
