@extends('layouts.header_dashboard')

@section('content')

<div id="page-wrapper">

<div class="table-responsive bs-example widget-shadow">
						<h4>Responsive Table:</h4>
						<table class="table table-bordered"> <thead> 
                        <tr> <th>#</th>
                         <th>Video Title</th> 
                         <th>Course ref</th> 
                         <th>Play Time</th> 
                         <th>Action</th> 
                         
                         </tr> 
                         </thead> 
                         <tbody> 
                     
                         @if(count($all_video) >0 )
                             @foreach($all_video as $video)
                            <tr>

                           
                             <th scope="row">{{$video->id}}</th> 
                            <td>{{$video->title}}</td> 
                            <td>{{$video->course_ref_id}}</td> 
                            <td>{{$video->video_play_time}}</td>
                             <td> 
                             <a href="/video/{{$video->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                         
                         
                             <form action="/video/{{$video->id}}" method="POST">
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