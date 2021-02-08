@extends('layouts.header_dashboard')

@section('content')

<div id="page-wrapper">
<div class=" form-grids row form-grids-right">
	<div class="widget-shadow " data-example-id="basic-forms"> 
	<div class="form-title">
	<h4>Assign Role to User :</h4>
		</div>
		<div class="form-body">
			<form class="form-horizontal" action="/role/{{$user->id}}" method="POST" enctype="multipart/form-data"> 
           @csrf
           @method("PUT")
           
           
         
              <div class="form-group">
               
               <label for="inputPassword3" class="col-sm-2 control-label">User Role</label>
               <div class="col-sm-9"> 
                <select name="role">
               
                <option value="1"> Admin </option>
                <option value="2"> Moderator </option>
                <option value="3"> Instructor </option>
               
                </select>
               </div>
              </div> 


              

           
                 
                 <div class="form-group"> 
                <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                 <div class="col-sm-9"> 
                <input type="text" name="username" value="{{$user->name}}" placeholder="user name" class="form-control" id="inputEmail3">
                 </div> 
                 </div> 

             
             
                 <div class="col-sm-offset-2">
                  <button type="submit" class="btn btn-default">Assign Role </button> </div> 
                  
                  </form> 
			</div>
		</div>
	</div>
</div>
     <!--Main  Close-->


				


    @endsection            