<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Creview;
use Auth;
use User;

class CourseReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_review = Creview::all();
        
         return view('creviews.index', 
                ['all_review' => $all_review]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'course_id' => 'required',
            'title' => 'required|min:2',
            'description' => 'required|min:3|max:200',
               ]);
           
        $review = new Creview();
        $review->username = Auth::user()->name;
        $review->course_id = $request->course_id;
        $review->title = $request->title;
        $review->description = $request->description;
        $review->rating = 'Test';
         $review->save();
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
          $review = Creview::find($id);
          return view('creviews.edit', 
           ['review'=>$review]);
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

        $update = Creview::update(['staus'=>'Approved']);

        return view('/creviews');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Creview::find($id);
        
        //Check if post exists before deleting
        if (!isset($review)){
            return redirect('/creview')->with('error', 'No review found');
        }
        
        Storage::delete('public/uploads/'.$review->photo);


        $video->delete();
        return redirect('/creviews')->with('success', 'user review has been removed');
    }
}
