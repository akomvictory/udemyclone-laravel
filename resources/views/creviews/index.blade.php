@extends('layouts.header_dashboard')

@section('content')

<div id="page-wrapper">

<div class="table-responsive bs-example widget-shadow">
						<h4>Responsive Table:</h4>
						<table class="table table-bordered"> <thead> 
                        <tr> <th>#</th>
                         <th>User Name</th> 
                         <th>Course ref</th> 
                         <th>Review Title</th> 
                         <th>Action</th> 
                         
                         </tr> 
                         </thead> 
                         <tbody> 
                     
                         @if(count($all_review) >0 )
                             @foreach($all_review as $review)
                            <tr>

                           
                             <th scope="row">{{$review->id}}</th> 
                            <td>{{$review->username}}</td> 
                            <td>{{$review->course_ref_id}}</td> 
                            <td>{{$review->title}}</td>
                             <td> 
                             <a href="/creviews/{{$review->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                         
                         
                             <form action="/creviews/{{$review->id}}" method="POST">
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