@extends('layouts.header_dashboard')

@section('content')

<div id="page-wrapper">

<div class="table-responsive bs-example widget-shadow">
						<h4>Responsive Table:</h4>
						<table class="table table-bordered"> <thead> 
                        <tr> <th>#</th>
                         <th>Instructor Name</th> 
                         <th>Proffession</th> 
                         <th>Joined</th> 
                         <th>Action</th> 
                         
                         </tr> 
                         </thead> 
                         <tbody> 
                     
                            <tr>

                             @if(count($all_instructors) >0 )
                             @foreach($all_instructors as $instructor)
                             <th scope="row">{{$instructor->id}}</th> 
                            <td>{{$instructor->instructor_name}}</td> 
                            <td>{{$instructor->proffesion}}</td> 
                            <td>{{$instructor->created_at}}</td>
                             <td> 
                             <a href="instructor/{{$instructor->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                              
                                <form action="/instructor/{{$instructor->id}}" method="POST">
                                @csrf
                                @method("DELETE")
                               <button type="submit" class="btn btn-danger btn-sm"> Delete </button> 
                                </form>

                             </td>
                           
                             </tr> 
                            @endforeach
                            @endif

                             </tbody> </table> 
					</div>


</div>
     <!--Main  Close-->


				


    @endsection            