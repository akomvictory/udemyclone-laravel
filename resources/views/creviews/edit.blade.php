@extends('layouts.header_dashboard')

@section('content')

<div id="page-wrapper">
<div class=" form-grids row form-grids-right">
	<div class="widget-shadow " data-example-id="basic-forms"> 
	<div class="form-title">
	<h4>{{$review->username}} review :</h4>
		</div>

            <div class="container">
              <div class="jumbotron">
                <h1>{{$review->title}}</h1>
                <p>{{$review->description}}</p> 
                <p>By - {{$review->username}}</p>
            
                <form action="/creviews/{{$review->id}}" method="POST">
                @csrf
                @method("PUT")
               <button type="submit" class="btn btn-primary btn-sm"> Approve </button> 
                </form>

                <br/> 

                <form action="/creviews/{{$review->id}}" method="POST">
                @csrf
                @method("DELETE")
               <button type="submit" class="btn btn-danger btn-sm"> Delete </button> 
                </form>
           
           
          

              </div> <!--jumbotron -->
              </div> <!--container -->

             
		</div>
	</div>
</div>
     <!--Main  Close-->


				


    @endsection            