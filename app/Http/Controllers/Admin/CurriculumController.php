<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Curriculum;
use Auth;
use User;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Intervention\Video\Facades\Video;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            
        $all_curriculum = Curriculum::all();
           
        return view('curriculum.index',
        ['all_curriculum' => $all_curriculum ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_courses = Course::all();
           
        return view('curriculum.create', 
        ['all_courses' => $all_courses ]);
        
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
            'curriculum_title' => 'required',
            
               ]);

        $curriculum = new Curriculum();
        $curriculum->username = Auth::user()->name;
        $curriculum->course_ref_id = $request->course_ref_id;
        $curriculum->video_play_time = $request->video_play_time;
        $curriculum->curriculum_title = $request->curriculum_title;
        $curriculum->save();
       return redirect('/curriculum');

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

        $curriculum = Curriculum::find($id);
        
          
                $all_courses = Course::all();
                
            return view('curriculum.edit', 
            ['all_courses' => $all_courses,
            'curriculum' => $curriculum]);
       
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
            'course_ref_id' => 'required',
            'video_play_time' => 'required',
            'curriculum_title' => 'required',
            
               ]);

        $curriculum = Curriculum::find($id);
        $curriculum->username = Auth::user()->name;
        $curriculum->course_ref_id = $request->course_ref_id;
        $curriculum->video_play_time = $request->video_play_time;
        $curriculum->curriculum_title = $request->curriculum_title;
        $curriculum->save();
       return redirect('/curriculum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curriculum = Curriculum::find($id);
        
        //Check if post exists before deleting
        if (!isset($curriculum)){
            return redirect('/curriculum')->with('error', 'No curriculum found');
        }
        

        $curriculum->delete();
        return redirect('/curriculum')->with('success', 'curriculum removed');
    }
}
