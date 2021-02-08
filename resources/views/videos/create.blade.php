@extends('layouts.header_dashboard')

@section('content')

<div id="page-wrapper">
<div class=" form-grids row form-grids-right">
	<div class="widget-shadow " data-example-id="basic-forms"> 
	<div class="form-title">
	<h4>Course Video Upload :</h4>
		</div>
		<div class="form-body">
			<form class="form-horizontal" action="/video" method="POST" enctype="multipart/form-data"> 
           @csrf
           
           @if(count($all_courses)>0)
              <div class="form-group">
               
               <label for="inputPassword3" class="col-sm-2 control-label">Course ref</label>
               <div class="col-sm-9"> 
                <select name="course_ref_id">
                @foreach($all_courses as $course)
                <option value="{{$course->id}}"> <a href="#"> {{$course->course_title}}  with the ID of {{$course->id}} </a> </option>
                 @endforeach
                </select>
               </div>
              </div> 

              @endif
              

                 <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label">Video Time </label>
                 <div class="col-sm-9"> 
                 <input type="text" name="video_play_time" placeholder="4:54" class="form-control" id="inputEmail3">
                 </div> 
                 </div> 
                 
                 
                 <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label">Video Title</label>
                 <div class="col-sm-9"> 
                <input type="text" name="video_title" placeholder="Changing photoshop canvas size" class="form-control" id="inputEmail3">
                 </div> 
                 </div> 

              
                 <div class="form-group"> 
                 <label for="inputEmail3" class="col-sm-2 control-label">Poster Image</label>
                  <div class="col-sm-9"> 
                  <input required class="form-control" accept=".jpg, .jpeg, .png" name="poster" type="file" id="example-url-input">                 </div> 
                  </div> 

                  <div class="form-group"> 
                 <label for="inputEmail3" class="col-sm-2 control-label">Video</label>
                  <div class="col-sm-9"> 
                  <input required class="form-control" accept=".mp4, .avi, .wmp" name="video_file" type="file" id="example-url-input">                 </div> 
                  </div> 
             
                 <div class="col-sm-offset-2">
                  <button type="submit" class="btn btn-default">Save </button> </div> 
                  
                  </form> 
			</div>
		</div>
	</div>
</div>
     <!--Main  Close-->


				


    @endsection            