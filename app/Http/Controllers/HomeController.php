<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     /*
    public function __construct()
    {
        $this->middleware('auth');
    }  */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses_categories = Category::orderBy('created_at','desc')->paginate(10);
        $courses =  Course::inRandomOrder()->paginate(10);


        //$course_id = $courses->id;

        return view('primary.index', [
              'courses_categories' => $courses_categories, 
              'courses' => $courses]);
    }
}
