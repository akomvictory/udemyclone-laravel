@extends('layouts.header_dashboard')

@section('content')

<div id="page-wrapper">
<div class=" form-grids row form-grids-right">
	<div class="widget-shadow " data-example-id="basic-forms"> 
	<div class="form-title">
	<h4>Course category form :</h4>
		</div>
		<div class="form-body">
			<form class="form-horizontal" action="/course" method="POST" enctype="multipart/form-data"> 
           @csrf
        
              

                 <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label">Course Title</label>
                 <div class="col-sm-9"> 
                 <input type="text" name="course_title" placeholder="e.g Java beginner course" class="form-control" id="inputEmail3">
                 </div> 
                 </div> 

                 <div class="form-group"> 
                 <label for="inputEmail3" class="col-sm-2 control-label">Course Type</label>
                 <div class="col-sm-9"> 
                 <select name="course_type">
                   <option value="paid">paid course</option>
                   <option value="free">free course</option>
                 </select>
                 </div> 
                 </div> 

                 @if(count($all_category) >0 )
                 <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label">Course Category</label>
                 <div class="col-sm-9"> 
                 
                 <select name="course_category">
                 @foreach($all_category as $category)
                 <option value="{{$category->category_heading}}">{{$category->category_heading}}</option>
                 @endforeach
                 </select>

                 </div> 
                 </div> 
                 @endif

                 


              @if(count($all_instructors) >0 )
                 <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label">Course Instructor</label>
                 <div class="col-sm-9"> 
                 
                 <select name="course_moderator">
                 @foreach($all_instructors as $instructor)
                 <option value="{{$instructor->instructor_name}}">{{$instructor->instructor_name}}</option>
                 @endforeach
                 </select>
                 
                 </div> 
                 </div> 

                 @endif


                 <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label">Course Price</label>
                 <div class="col-sm-9"> 
                 <input type="number" name="course_price" placeholder="e.g #5000" class="form-control" id="inputEmail3">
                 </div> 
                 </div> 


                 <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label">Course Description</label>
                 <div class="col-sm-9"> 
                 <textarea class="form-control" name="course_description" rows="5"></textarea>                 </div> 
                 </div> 

                 <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label">Demo Video</label>
                 <div class="col-sm-9"> 
                 <input class="form-control" accept=".mp4, .avi, .wmp" name="course_demo_video" type="file" id="example-url-input">
                 </div> 
                 </div> 



                 <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label">Course Photo</label>
                 <div class="col-sm-9"> 
                 <input class="form-control" accept=".jpg, .jpeg, .png" name="course_photo" type="file" id="example-url-input">                 </div> 
                 </div> 
             
                 <div class="col-sm-offset-2">
                  <button type="submit" class="btn btn-secondary">Add Course </button> 
                  </div> </form> 
			</div>
		</div>
	</div>
</div>
     <!--Main  Close-->


				


    @endsection            