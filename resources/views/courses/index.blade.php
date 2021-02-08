@extends('layouts.header_dashboard')

@section('content')

<div id="page-wrapper">

<div class="table-responsive bs-example widget-shadow">
						<h4>Responsive Table:</h4>
						<table class="table table-bordered"> <thead> 
                        <tr> <th>#</th>
                         <th>Added by</th> 
                         <th>Course Title</th> 
                         <th>Date Added</th> 
                         <th>Action</th> 
                         
                         </tr> 
                         </thead> 
                         <tbody> 
                     
                            <tr>
                            @if(count($all_courses) >0 )
                             @foreach($all_courses as $courses)
                             <th scope="row">{{$courses->id}}</th> 
                            <td>{{$courses->user_name}}</td> 
                            <td>{{$courses->course_title}}</td> 
                            <td>{{$courses->created_at}}</td>
                             <td> 
                             <a href="/course/{{$courses->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                         
                             <form action="/course/{{$courses->id}}" method="POST">
                             @csrf
                             @method("DELETE")
                            <button type="submit" class="btn btn-danger btn-sm"> Delete </button> 
                             </form>
                             </tr> 

                                @endforeach
                                @endif

                             </tbody> </table> 
					</div>


</div>
     <!--Main  Close-->


				


    @endsection            