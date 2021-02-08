<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Category;
use Auth;

class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_category = Category::all();
        
         return view('category.index', 
                ['all_category' => $all_category ]);
           
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**  $category = new Category();
 
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
            'category_photo' => 'required',
            'category_heading' => 'required',
               ]);

            
        if ($request->hasFile('category_photo')) {
              $photo_file_name_to_store = uniqid().time().'.'.$request->category_photo->getClientOriginalExtension();
            //$photo_path = $request->course_photo->move(public_path().'uploads/photos', $photo_file_name_to_store);
              $photo_path = $request->category_photo->move(public_path().'/uploads/', $photo_file_name_to_store);
              }
           $category = new Category();
            $category->username = Auth::user()->name;   
            $category->category_heading = $request->category_heading;
            $category->category_photo = 'uploads/'.$photo_file_name_to_store;
            $category->save();
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
        $category = Category::find($id);
        return view('category.edit', 
           ['category'=>$category]);
        
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
            'category_photo' => 'required',
            'category_heading' => 'required',
               ]);

        if ($request->hasFile('category_photo')) {
           
            //get unique name for file
           $category_photo = uniqid().time().'.'.$request->category_photo->getClientOriginalExtension();
            //upload the file
          $path = $request->category_photo->move(public_path().'/uploads/', $category_photo);
            //save path and name in database
           
       }
        $category = Category::find($id);
        $category->username = Auth::user()->name;
        $category->category_photo = 'uploads/'.$category_photo;
        $category->category_heading = $request->category_heading;
        
        $category->save();
       return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        
        //Check if post exists before deleting
        if (!isset($category)){
            return redirect('/category')->with('error', 'No category found');
        }
        
        Storage::delete('public/uploads/'.$category->category_photo);


        $category->delete();
        return redirect('/category')->with('success', 'category removed');
    }
}
