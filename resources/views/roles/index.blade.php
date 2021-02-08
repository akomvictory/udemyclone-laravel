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
                     
                         @if(count($administrators) >0 )
                             @foreach($administrators as $administrator)
                            <tr>

                           
                             <th scope="row">{{$administrator->id}}</th> 
                            <td>{{$administrator->name}}</td> 
                            <td>{{$administrator->role_id}}</td> 
                            <td>{{$administrator->email}}</td>
                             <td> 
                             <a href="/role/{{$administrator->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                                                 
                           
                             </tr> 
                             @endforeach
                            @endif
                             </tbody> </table> 
					</div>


</div>
     <!--Main  Close-->


				


    @endsection            