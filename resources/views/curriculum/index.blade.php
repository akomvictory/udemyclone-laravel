@extends('layouts.header_dashboard')

@section('content')

<div id="page-wrapper">

<div class="table-responsive bs-example widget-shadow">
						<h4>Responsive Table:</h4>
						<table class="table table-bordered"> <thead> 
                        <tr> <th>#</th>
                         <th>Course ref</th> 
                         <th>Curriculum Title</th> 
                         <th>Play Time</th> 
                         <th>Action</th> 
                         
                         </tr> 
                         </thead> 
                         <tbody> 
                     
                         @if(count($all_curriculum) >0 )
                             @foreach($all_curriculum as $curriculum)
                            <tr>

                           
                             <th scope="row">3</th> 
                            <td>{{$curriculum->course_ref_id}}</td> 
                            <td>{{$curriculum->curriculum_title}}</td> 
                            <td>{{$curriculum->video_play_time}}</td>
                             <td> 
                             <a href="curriculum/{{$curriculum->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                         
                         
                             <form action="/curriculum/{{$curriculum->id}}" method="POST">
                                @csrf
                                @method("DELETE")
                               <button type="submit" class="btn btn-danger btn-sm"> Delete </a> 
                                </form>
                             </tr> 
                             @endforeach
                            @endif
                             </tbody> </table> 
					</div>


</div>
     <!--Main  Close-->


				


    @endsection            