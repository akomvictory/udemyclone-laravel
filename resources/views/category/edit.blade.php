@extends('layouts.header_dashboard')

@section('content')

<div id="page-wrapper">
<div class=" form-grids row form-grids-right">
	<div class="widget-shadow " data-example-id="basic-forms"> 
	<div class="form-title">
	<h4>Course category form :</h4>
		</div>
		<div class="form-body">
			<form class="form-horizontal" action="/category/{{$category->id}}" method="POST" enctype="multipart/form-data"> 
                 @csrf
                 @method("PUT")
        
              

                 <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label">Category Heading</label>
                 <div class="col-sm-9"> 
                 <input type="text" value="{{$category->category_heading}}" name="category_heading" placeholder="e.g Programming" class="form-control" id="inputEmail3">
                 </div> 
                 </div> 

                 <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label">Category Photo</label>
                 <div class="col-sm-9"> 
                <input type="file" accept=".jpg, .jpeg, .png" name="category_photo" class="form-control" id="inputEmail3">
                 </div> 
                 </div> 
             
                 <div class="col-sm-offset-2">
                  <button type="submit" class="btn btn-default">Save </button> 
                  </div> </form> 
			</div>
		</div>
	</div>
</div>
     <!--Main  Close-->


				


    @endsection            