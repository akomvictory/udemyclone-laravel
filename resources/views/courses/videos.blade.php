@extends('layouts.header_footer')
@section('content')


<section class="paddingTop-50 paddingBottom-100 bg-light">
  <div class="container">
   <div class="row align-items-start">
     <aside class="col-lg-3 order-2 order-lg-1">
       <div class="card shadow-v2 marginTop-30">
         <h4 class="card-header bg-secondary text-white mb-0">Choose Category</h4>
         <ul class="card-body list-unstyled mb-0">
         @if(count($all_category)>0)
         @foreach($all_category as $category)
          <li class="mb-2"><a href="/learning/{{$category->category_heading}}/view-courses">
          {{$category->category_heading}}
          </a></li>
          @endforeach
          @endif
         </ul>
       </div>
     <!--  <div class="card shadow-v2 marginTop-30">
         <h4 class="card-header bg-primary text-white mb-0">Filter By</h4>
         <ul class="card-body list-unstyled mb-0">
          <li class="mb-2"><a href="#">All Courses</a></li>
          <li class="mb-2"><a href="#">Featured Courses</a></li>
          <li class="mb-2"><a href="#">Popular Courses</a></li>
          <li class="mb-2"><a href="#">Starting Soon</a></li>
          <li class="mb-2"><a href="#">Intermediate</a></li>
          <li class="mb-2"><a href="#">Advanced</a></li>
         </ul>
       </div> -->
      <!-- <div class="card shadow-v2 marginTop-30">
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
    
      
       @if(count($videos) >0 )
        @foreach($videos as $video)
      
      <div class="col-md-6 marginTop-30">
        <div href="page-course-details.html" class="card text-gray shadow-v1">
        
        <video width="320" height="202" controls>
        <source autoplay="true" src="{{$video->video}}" type="video/mp4"> 
        <source autoplay="true" src="{{$video->video}}" type="video/webm"> 
        <source autoplay="true" src="{{$video->video}}" type="video/ogg"> 
        <video>  

          <div class="card-body">
            <a href="#" class="h5">
              {{$video->title}}
            </a>
            <p class="my-3">
              <i class="ti-user mr-2"></i>
              Jonathon
            </p>
            <p class="mb-0">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <span class="text-dark">5</span>
              <span>(4578)</span>
            </p>
          </div>
          <div class="card-footer media align-items-center justify-content-between">
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <i class="ti-headphone small mr-2"></i>
                46 lectures
              </li>
              <li class="mb-1">
                <i class="ti-time small mr-2"></i>
                27.5 hours
              </li>
            </ul>
            <h4 class="h5 text-right">
              <span class="text-success font-weight-bold">Free</span>
            </h4>
          </div>
        </div>
      </div>
    
      @endforeach
    @else 
    <span class="alert alert-danger">No video added yet for this course!</span>
      @endif







       
       </div> <!-- END row-->
     </div> <!-- END col-lg-9 -->
     
   </div> <!-- END row-->
    
  </div> <!-- END container-->
</section>

@endsection