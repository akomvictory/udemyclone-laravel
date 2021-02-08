@extends('layouts.header_footer')

@section('content')

    
<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url({{ asset('/img/breadcrumb-bg.jpg') }}) no-repeat">
  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Courses</a></li>
        <li class="breadcrumb-item">   {{$category}}</li>
      </ol>
      <h2 class="h1">
      
        All {{$category}} Courses 
      </h2>
      <p class="lead">
        <span class="text-primary">3</span> courses found
      </p>
     </div>
      <form method="GET" action="/search/" class="col-lg-5 my-2 ml-auto">
        <div class="input-group bg-white rounded p-1">
          <input name="course" type="text" class="form-control border-white" placeholder="What do you want to learn?" required="">
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


@if(count($courses)>0)
           @foreach($courses as $course)
      

<section class="padding-y-60 bg-light-v2">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 marginTop-30">
        <div href="page-course-details.html" class="card height-100p text-gray shadow-v1">
          <img class="card-img-top" src="{{$course->course_photo}}" alt="">
          <div class="card-body">
         <!--  <span class="badge position-absolute top-0 bg-success text-white" data-offset-top="-13">
             Best selling
           </span> -->
            <a href="/learning/{{$course->course_category}}/view-course/{{$course->id}}/detail" class="h5">
            {{$course->course_title}}
            </a>
            <p class="my-3">
              <i class="ti-user mr-2"></i>
              {{$course->course_moderator}}
            </p>
          <!--  <p class="mb-0">
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <i class="fas fa-star text-warning"></i>
              <span class="text-dark">5</span>
              <span>(4578)</span>
            </p> -->
          </div>
          <div class="card-footer media align-items-center justify-content-between">
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <i class="ti-headphone small mr-2"></i>
                4 lectures
              </li>

            </ul>
            <h4 class="h5 text-right">
              <span class="text-primary">#{{$course->course_price}}</span>
            </h4>
          </div>
        </div>
      </div>

    @endforeach
    @else
        <span class="alert alert-danger">No course available in this category yet</span>
    @endif

            
      <div class="col-12 marginTop-70">
      
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>


@endsection