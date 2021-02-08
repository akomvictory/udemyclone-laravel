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
                     
                         @if(count($all_category) >0 )
                             @foreach($all_category as $category)
                            <tr>
                              <th scope="row">{{$category->id}}</th> 
                            <td>{{$category->user_name}}</td> 
                            <td>{{$category->category_heading}}</td> 
                            <td>{{$category->created_at}}</td>
                             <td> 
                             <a href="category/{{$category->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                         
                            
                             <form action="/category/{{$category->id}}" method="POST">
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