
@extends('layouts.header_footer')

@section('content')


<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url({{ asset('/img/photo.jpg') }}) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Courses</a></li>
        <li class="breadcrumb-item">All Courses</li>
      </ol>
      <h2 class="h1">
        Query Courses Gird
      </h2>
      <p>
        6,178 courses found
      </p>
     </div>
     <form method="GET" action="/search/" class="col-lg-5 my-2 ml-auto">
     <div class="input-group bg-white rounded p-1">
       <input type="text" name="course" class="form-control border-white" placeholder="What do you want to learn?" required="">
       <div class="input-group-append">
         <button class="btn btn-info rounded" type="submit">
           Search
           <i class="ti-angle-right small"></i>
         </button>
       </div>
     </div>
   </form>
   </div>
  </div>
</div>
    
    




<section class="py-3 position-relative shadow-v2">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 my-2">
          Showing 1-9 of 24 results        
      </div>
      <div class="col-md-6 my-2 text-md-right">
       <div class="d-inline-flex justify-md-content-end">
        <div class="d-flex rounded border ml-3 px-2 my-2">
          <a href="#" class="btn px-1"><ti class="ti-layout-grid2"></ti></a>
          <a href="#" class="active btn px-1"><ti class="ti-view-list"></ti></a>
        </div>
       </div>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>




<section class="paddingTop-50 paddingBottom-100 bg-light">
  <div class="container">
   <div class="row align-items-start">
     <aside class="col-lg-3 order-2 order-lg-1">
       <div class="card shadow-v2 marginTop-30">
         <h4 class="card-header bg-secondary text-white mb-0">Choose Category</h4>
         <ul class="card-body list-unstyled mb-0">
         
          <li class="mb-2"><a href="/">All Courses</a></li>

    
          @if(count($all_category)>0)
           @foreach($all_category as $category)
          <li class="mb-2"><a href="/learning/{{$category->course_category}}/view-courses">{{$category->course_category}}</a></li>
          @endforeach
         @endif

         </ul>
       </div>
       <!--
       <div class="card shadow-v2 marginTop-30">
         <h4 class="card-header bg-primary text-white mb-0">Filter By</h4>
         <ul class="card-body list-unstyled mb-0">
          <li class="mb-2"><a href="#">All Courses</a></li>
          <li class="mb-2"><a href="#">Featured Courses</a></li>
          <li class="mb-2"><a href="#">Popular Courses</a></li>
          <li class="mb-2"><a href="#">Starting Soon</a></li>
          <li class="mb-2"><a href="#">Intermediate</a></li>
          <li class="mb-2"><a href="#">Advanced</a></li>
         </ul>
       </div> 
       <div class="card shadow-v2 marginTop-30">
         <h4 class="card-header bg-primary text-white mb-0">By Cost</h4>
         <ul class="card-body list-unstyled mb-0">
          <li class="mb-2"><a href="#">All Courses</a></li>
          <li class="mb-2"><a href="#">Paid Courses</a></li>
          <li class="mb-2"><a href="#">Free Courses</a></li>
         </ul>
       </div>  -->
       <div class="card shadow-v2 marginTop-30 hover:parent">
        <img class="hover:zoomin" src="assets/img/262x230/9.jpg" alt="">
        <div class="card-img-overlay text-white bg-black-0_6">
          <h4 class="card-title">
            Enriched Learning Experiences
          </h4>
          <p class="my-3">
            Get unlimited access to 2,000 of Educati’s top courses for your team.
          </p>
          <a href="#" class="btn btn-white">Join Now</a>
        </div>
       </div>
     </aside> <!-- END col-lg-3 -->
     <div class="col-lg-9 order-1 order-lg-2">
       <div class="row">



     
     @if(count($search)>0)
      
    @foreach($search as $course  )
      
      <div class="col-md-6 marginTop-30">
        <div href="page-course-details.html" class="card text-gray shadow-v1">
          <img class="card-img-top" width="330" height="202" src="{{$course->course_photo}}" alt="">
          <div class="card-body">
            <a href="/learning/{{$course->course_category}}/view-course/{{$course->id}}/detail" class="h5">
              {{$course->course_title}}
            </a>
            <p class="my-3">
              <i class="ti-user mr-2"></i>
              {{$course->course_moderator}}
            </p>
            <p class="mb-0">
           
              <span>(4578)</span>
            </p>
          </div>
          <div class="card-footer media align-items-center justify-content-between">
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <i class="ti-headphone small mr-2"></i>
                46 lectures
              </li>
        
            </ul>
            <h4 class="h5 text-right">
             <!-- <span class="text-success font-weight-bold">Free</span>  -->
            </h4>
          </div>
        </div>
      </div>

        @endforeach
        @else 
        <span class="alert alert-danger">No course found for this query yet</span>
        @endif    



      
        <div class="col-12 marginTop-70">
          <ul class="pagination pagination-primary justify-content-center">
            <li class="page-item mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">
                <i class="ti-angle-left small"></i>
              </a>
            </li>
            <li class="page-item mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">1</a>
            </li>
            <li class="page-item active disabled mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">2</a>
            </li>
            <li class="page-item disabled mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">
                <i class="ti-more-alt"></i>
              </a>
            </li>
            <li class="page-item mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">16</a>
            </li>
            <li class="page-item mx-1">
              <a class="page-link iconbox iconbox-sm rounded-0" href="#">
                <i class="ti-angle-right small"></i>
              </a>
            </li>
          </ul>
        </div>
       </div> <!-- END row-->
     </div> <!-- END col-lg-9 -->
     
   </div> <!-- END row-->
    
  </div> <!-- END container-->
</section>
   
   
@endsection