@extends('layouts.header_dashboard')

@section('content')



		<div id="page-wrapper">
			
        <div class="container">
            <div class="row">
            <div class="col-md-8">
        <form> 
        <div class="form-group">
         <label for="exampleInputEmail1">Course Title</label> 
         <input class="form-control" name="course_title" required min="5" max="90"  type="text" placeholder="Beginner HR Training" id="example-text-input">
         </div> 

        <div class="form-group"> <label for="exampleInputPassword1">Course Category</label> 
        <input class="form-control" name="course_category" type="text" placeholder="e.g Human Resourse" id="example-search-input">
        </div> 

        <div class="form-group"> <label for="exampleInputPassword1">Course Instructor</label> 
        <input class="form-control" name="course_price" type="number" placeholder="James Mendes" id="example-url-input">
        </div> 

        
        <div class="form-group"> <label for="exampleInputPassword1">Course Price</label> 
        <input class="form-control" name="course_price" type="number" placeholder="#80000" id="example-url-input">
        </div> 

        <div class="form-group"> <label for="exampleInputPassword1">No of Videos</label> 
        <input class="form-control" name="course_price" type="number" placeholder="12" id="example-url-input">
        </div> 

        <div class="form-group"> <label for="exampleInputPassword1">Videos Duration</label> 
        <input class="form-control" name="course_price" type="number" placeholder="2 hours" id="example-url-input">
        </div> 
       
        <div class="form-group"> 
        <label for="exampleInputFile">Course Description</label> 
        <textarea class="form-control" name="course_description" rows="5"></textarea>
        <p class="help-block">Example block-level help text here.</p>
         </div>



         <div class="checkbox"> <label> 
        <input type="checkbox"> Check me out </label> </div> 
        <button type="submit" class="btn btn-default">Submit</button> </form>
         </div>
         </div>
         </div>

       
            <!--
			<div class="col-md-2 stat">
				<div class="content-top">
					<div class="top-content facebook">
						<a href="#"><i class="fa fa-facebook"></i></a>
					</div>
					<ul class="info">
						<li class="col-md-6"><b>1,296</b><p>Friends</p></li>
						<li class="col-md-6"><b>647</b><p>Likes</p></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="content-top">
					<div class="top-content twitter">
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
					<ul class="info">
						<li class="col-md-6"><b>1,997</b><p>Followers</p></li>
						<li class="col-md-6"><b>389</b><p>Tweets</p></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="content-top">
					<div class="top-content google-plus">
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</div>
					<ul class="info">
						<li class="col-md-6"><b>1,216</b><p>Followers</p></li>
						<li class="col-md-6"><b>321</b><p>shares</p></li>
						<div class="clearfix"></div>
					</ul>
				</div>
			</div>  -->
			<div class="clearfix"> </div>
		</div>
				


    @endsection            