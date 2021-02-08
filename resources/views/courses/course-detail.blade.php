@extends('layouts.header_footer')

@section('content')



<div class="padding-y-60 bg-cover" data-dark-overlay="6" style="background:url({{ asset('/img/breadcrumb-bg.jpg') }}) no-repeat">  <div class="container">
   <div class="row align-items-center">
     <div class="col-lg-6 my-2 text-white">
      <ol class="breadcrumb breadcrumb-double-angle bg-transparent p-0">  
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Courses</a></li>
        <li class="breadcrumb-item">Detail</li>
      </ol>
      <h2 class="h1">
        Course Details
      </h2>
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

    
  

<section class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-12 z-index-10" data-offset-top-md="-40">
        <ul class="list-inline d-inline-block py-2 px-4 shadow-v3 bg-white rounded-pill">
          <li class="list-inline-item">Share <span class="d-none d-md-inline-block">this course:</span></li>
          <li class="list-inline-item mx-0">
            <a href="#" class="btn btn-opacity-primary iconbox iconbox-xs">
              <i class="ti-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item mx-0">
            <a href="#" class="btn btn-opacity-primary iconbox iconbox-xs">
              <i class="ti-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item mx-0">
            <a href="#" class="btn btn-opacity-primary iconbox iconbox-xs">
              <i class="ti-linkedin"></i>
            </a>
          </li>
          <li class="list-inline-item mx-0">
            <a href="#" class="btn btn-opacity-primary iconbox iconbox-xs">
              <i class="ti-google"></i>
            </a>
          </li>
        </ul>
        <a href="#" class="btn btn-white iconbox"><i class="ti-heart"></i></a>
      </div>
   </div> <!-- END row-->
  </div>
</section>


<section class="paddingBottom-100">
  <div class="container">
  
   <div class="row">
      <div class="col-lg-9 marginTop-30">
        <h1>
        {{$course_info->course_title}}
        </h1>
        <div class="row mt-3">
          <div class="col-lg-3 col-md-6 my-2">
            <div class="media border-right height-100p">
              <img class="iconbox mr-3" src="/{{$course_instructor->instructor_photo}}" alt="">
              <div class="media-body">
                <span class="text-gray d-block">Instructor:</span>
                <a href="/instructor/profile/{{$course_instructor->id}}" class="h6">{{$course_info->course_moderator}}</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 my-2">
            <div class="border-right height-100p">
              <span class="text-gray d-block">Categories:</span>
              <a href="#" class="h6">{{$course_info->course_category}}</a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 my-2">
            <div class="border-right height-100p">
              <span class="text-gray">Course Video:</span>
              <p class="mb-0">
              <a class="btn btn-secondary btn-sm" href="/learning/{{$course_info->course_category}}/view-course/{{$course_info->id}}/videos">View now</a>

              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 my-2">
            <div class="text-md-right height-100p">
              <h5 class="font-weight-bold text-primary mb-2"># {{ $course_info->course_price }}</h5>
            
              @auth
              @if(Auth::user()->role_id>2)
           <a class="btn btn-secondary btn-sm" href="{{ url('/bouquet/add-to-cart/'.$course_info->id) }}">Add to cart</a>
                @endauth
                @endif
            </div>
          </div>
        </div> <!-- END row-->
        
        <div class="ec-video-container my-4">
        <video width="340" height="240" controls>
        <source autoplay="true" src="{{$course_info->course_demo_video}}" type="video/mp4"> 
        <source autoplay="true" src="{{$course_info->course_demo_video}}" type="video/webm"> 
        <source autoplay="true" src="{{$course_info->course_demo_video}}" type="video/ogg"> 
        <video>      
        
          </div>
        
        <div class="card padding-30 shadow-v3">
          <h4>
            Features Includes:
          </h4>
          <ul class="list-inline mb-0 mt-2">
            <li class="list-inline-item my-2 pr-md-4">
              <i class="ti-headphone small text-primary"></i>
              <span class="ml-2">{{count($lectures)}} lectures</span>
            </li>
         
            <li class="list-inline-item my-2 pr-md-4">
              <i class="ti-user small text-primary"></i>
              <span class="ml-2">4 students entrolled</span>
            </li>
            <li class="list-inline-item my-2 pr-md-4">
              <i class="ti-reload small text-primary"></i>
              <span class="ml-2">Lifetime access</span>
            </li>
            <li class="list-inline-item my-2 pr-md-4">
              <i class="ti-crown small text-primary"></i>
              <span class="ml-2">Certificate of Completion</span>
            </li>
            <li class="list-inline-item my-2 pr-md-4">
              <i class="ti-crown small text-primary"></i>
              <span class="ml-2">30-Day Money-Back Guarantee of Completion</span>
            </li>
          </ul>
        </div>
        
        <div class="col-12 mt-4">
         <ul class="nav tab-line tab-line tab-line--3x border-bottom mb-5" role="tablist">
           <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tabDescription" role="tab" aria-selected="true">
              Description
            </a>
           </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabCurriculum" role="tab" aria-selected="true">
              Message
            </a>
           </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabInstructors" role="tab" aria-selected="true">
              Instructors
            </a>
           </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabReviews" role="tab" aria-selected="true">
              Reviews
            </a>
           </li>
         </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tabDescription" role="tabpanel">
              <h4>
                Course Description
              </h4>
              <p>
              {{$course_info->course_description}}
              </p>
             
              
              <div class="row mt-5">
              
               <div class="col-md-6 my-2">
               <h4>
                 What you will learn
               </h4>
                <ul class="list-unstyled list-style-icon list-icon-bullet">
                  <li>Carrier Advancement</li>
                  <li>Take your business / job to the next level</li>
                  <li>Become indespensable in your job / office</li>
                  <li>Learn how to become a master in the field</li>
                 
                </ul>
              </div> 
              <div class="col-md-6 my-2">
              <h4>
                Who is the Target Audience?
              </h4>
               <ul class="list-unstyled list-style-icon list-icon-bullet">
                 <li>People who want to advance their skillset</li>
                 <li>Businesses and office centres</li>
              
               </ul>
             </div> 
                
               
              
              </div> <!-- END row-->
            </div> <!-- END tab-pane-->
            
            <div class="tab-pane fade" id="tabCurriculum" role="tabpanel">
            <div id="accordionCurriculum">

           

         

        

              <div class="accordion-item list-group mb-3">

                <div class="list-group-item bg-light">
                 <a class="row collapsed" href="#accordionCurriculum_4" data-toggle="collapse" aria-expanded="true">
                   <span class="col-9 col-md-8">
                     <span class="accordion__icon text-primary mr-2">
                      <i class="ti-plus"></i>
                      <i class="ti-minus"></i>
                    </span>
                      <span class="h6 d-inline">Forward a Review</span> 
                   </span>
                   <span class="col-2 d-none d-md-block text-right">
                     Message
                   </span>
                   
                 </a>
                </div>

                <div id="accordionCurriculum_4" class="collapse" data-parent="#accordionCurriculum">

             


                

             

                  <div class="list-group-item">
                      
                <form action="/creviews" method="POST">
                @csrf
                <input type="hidden" name="course_id" value="{{$course_info->id}}" class="form-control" id="inputEmail3">

                <div class="form-group"> 
                <label for="inputEmail3" class="control-label">Message Title</label>
                 <div class="col-sm-6"> 
                 <input type="text" name="title" placeholder="e.g Awesome Enjoyed it" class="form-control" id="inputEmail3">
                 </div> 
                 </div>   
                  

                 <div class="form-group"> 
                <label for="inputEmail3" class="control-label">Message</label>
                 <div class="col-sm-6"> 
                 <textarea class="form-control" name="description" id="" cols="30" rows="4"></textarea>
                 </div> 
                 </div>  

                 <button type="submit" class="btn btn-secondary btn-sm">Save </button> 

                 </form>
                  </div>

                </div>
              </div> <!-- END accordion-item -->


              </div> <!-- END accordion-->
            </div> <!-- END tab-pane -->
            
            
            <div class="tab-pane fade" id="tabInstructors" role="tabpanel">
              <h4 class="mb-4">
                About Instructors
              </h4>
              
              <div class="border-bottom mb-4 pb-4">
                <div class="d-md-flex mb-4">
                  <a href="#">
                    <img class="iconbox iconbox-xxxl" src="/{{$course_instructor->instructor_photo}}" alt="">
                  </a>
                  <div class="media-body ml-md-4 mt-4 mt-md-0">
                    <h6>
                    {{$course_instructor->instructor_name}}
                    </h6>
                    <p class="mb-2">
                      <i class="ti-world mr-2"></i>  {{$course_instructor->proffesion}} and Instructor
                    </p>
                    <ul class="list-inline">
                      <li class="list-inline-item mb-2">
                        <i class="ti-user mr-1"></i>
                        7 studends
                      </li>
                      <li class="list-inline-item mb-2">
                        <i class="ti-book mr-1"></i>
                        2 Courses
                      </li>
         
                    </ul>
                    <a href="/instructor/profile/{{$course_instructor->id}}" class="btn btn-outline-primary btn-pill btn-sm">View Profile</a>
                  </div>
                </div>
                <h6>
                  Experience as  {{$course_instructor->proffsion}} Instructor
                </h6>
                <p>
                {{$course_instructor->instructor_bio}}     
                 </p>
              </div>
              
                    
                    
            </div> <!-- END tab-pane -->
            
            <div class="tab-pane fade" id="tabReviews" role="tabpanel">
             <h4 class="mb-4"> 
               Students Feedback
             </h4>
             
              <div class="row px-0 align-items-center border p-4">
               <div class="col-md-4 text-center">
               
                 
                
               </div>
             
              </div>
              
          
         
              
             
              @if(count($user_reviews) >0 )
                    @foreach($user_reviews as $user)
              
              <div class="row border-bottom mx-0 py-4 mt-4">
                <div class="col-md-4 my-2 media">
                  <img class="iconbox iconbox-xl" src="assets/img/avatar/6.jpg" alt="">
                  <div class="media-body ml-4">
                   <small class="text-gray"></small>
                   <h6>
                   {{$user->username}}
                   </h6>
                  </div>
                </div>
                <div class="col-md-8 my-2">
                  <p>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                  </p>
                  <p class="font-size-18">
                  {{$user->title}}
                  </p>
                  <p>
                  {{$user->description}}
                  </p>
                </div>

              @endforeach
              @else
              <div class="row border-bottom mx-0 py-4 mt-4">
                <div class="col-md-4 my-2 media">
                  <img class="iconbox iconbox-xl" src="/img/user.png" alt="">
                  <div class="media-body ml-4">
                   <small class="text-gray">2 mins ago</small>
                   <h6>
                     John Doe
                   </h6>
                  </div>
                </div>
                <div class="col-md-8 my-2">
                
                  <p class="font-size-18">
                    Best course ever
                  </p>
                  <p>
                  Nice content ny danisoft
                  </p>
                </div>
              @endif



              </div> <!-- END row-->
              <div class="text-center mt-5">
                <a href="#" class="btn btn-primary btn-icon">
                  <i class="ti-reload mr-2"></i>
                  Load More
                </a>
              </div>
            </div> <!-- END tab-pane -->
            
          </div> <!-- END tab-content-->
      </div> <!-- END col-12 -->
      </div> <!-- END col-lg-9 -->
      
     <aside class="col-lg-3">
       <div class="card border border-light marginTop-30 shadow-v1">
         <h4 class="card-header border-bottom mb-0 h6">Choose Category</h4>
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


       <div class="card border border-light marginTop-30 shadow-v1">
         <h4 class="card-header border-bottom mb-0 h6">By Cost</h4>
         <ul class="card-body list-unstyled mb-0">
        
          <li class="mb-2"><a href="/learning/view-all-courses">All Course</a></li>
          <li class="mb-2"><a href="/learning/paid-courses">Paid</a></li>
          <li class="mb-2"><a href="/learning/free-courses">Free</a></li>
         
         
         </ul>
       </div>
     
      
       <div class="card marginTop-30 shadow-v1 hover:parent">
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
     
   </div> <!-- END row-->
  </div> <!-- END container-->
</section>
   
   
   


<section class="padding-y-100 bg-light">
  <div class="container">
    <div class="row">
     <div class="col-12 mb-4">
       <h2>
         You May Like
       </h2>
       <div class="width-5rem bg-primary height-4 rounded"></div>
     </div>
            <div class="col-12 mt-4">
        <div class="owl-carousel arrow-on-hover" 
        data-items="4"
        data-state-outer-class="py-4"
        data-arrow="true"
        data-autoplay="false"
        data-space="30"
        data-loop="true">
         
          <div class="card text-gray height-100p shadow-v2">
            <a href="#">
              <img class="card-img-top" src="assets/img/360x220/1.jpg" alt="">
            </a>
            <div class="p-4">
              <a href="#" class="h6">
                Learn Database Design with MySQL
              </a>
              <p class="my-3">
                <i class="ti-user mr-2"></i>
                Andrew Mead
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
            <div class="media border-top p-4 align-items-center justify-content-between">
              <h4 class="h5 mb-0">
                <span class="text-primary">$180</span>
              </h4>
              <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm" 
                data-container="body" 
                data-toggle="tooltip" 
                data-placement="top" 
                data-skin="light" 
                title="Add to wishlist">
                <i class="ti-heart"></i>
              </a>
            </div>
         </div>
         
          <div class="card text-gray height-100p shadow-v2">
            <a href="#">
              <img class="card-img-top" src="assets/img/360x220/2.jpg" alt="">
            </a>
            <div class="p-4">
              <a href="#" class="h6">
                Visual Basic Essential Training
              </a>
              <p class="my-3">
                <i class="ti-user mr-2"></i>
                Harry Ruberts
              </p>
              <p class="mb-0">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span class="text-dark">3.7</span>
                <span>(67)</span>
              </p>
            </div>
            <div class="media border-top p-4 align-items-center justify-content-between">
              <h4 class="h5 mb-0">
                <span class="text-success">Free</span>
              </h4>
              <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm" 
                data-container="body" 
                data-toggle="tooltip" 
                data-placement="top" 
                data-skin="light" 
                title="Add to wishlist">
                <i class="ti-heart"></i>
              </a>
            </div>
         </div>
         
          <div class="card text-gray height-100p shadow-v2">
            <a href="#">
              <img class="card-img-top" src="assets/img/360x220/3.jpg" alt="">
            </a>
            <div class="p-4">
              <a href="#" class="h6">
                A gentel introduction to C++
              </a>
              <p class="my-3">
                <i class="ti-user mr-2"></i>
                Jonathon, Alex
              </p>
              <p class="mb-0">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star-half text-warning"></i>
                <span class="text-dark">4.90</span>
                <span>(599)</span>
              </p>
            </div>
            <div class="media border-top p-4 align-items-center justify-content-between">
              <h4 class="h5 mb-0">
                <span class="text-primary">$180</span>
              </h4>
              <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm" 
                data-container="body" 
                data-toggle="tooltip" 
                data-placement="top" 
                data-skin="light" 
                title="Add to wishlist">
                <i class="ti-heart"></i>
              </a>
            </div>
         </div>
         
          <div class="card text-gray height-100p shadow-v2">
            <a href="#">
              <img class="card-img-top" src="assets/img/360x220/4.jpg" alt="">
            </a>
            <div class="p-4">
              <a href="#" class="h6">
                Programming Real-World Examples
              </a>
              <p class="my-3">
                <i class="ti-user mr-2"></i>
                Nur jaman
              </p>
              <p class="mb-0">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <span class="text-dark">5</span>
                <span>(599)</span>
              </p>
            </div>
            <div class="media border-top p-4 align-items-center justify-content-between">
              <h4 class="h5 mb-0">
                <span class="text-primary">$180</span>
              </h4>
              <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm" 
                data-container="body" 
                data-toggle="tooltip" 
                data-placement="top" 
                data-skin="light" 
                title="Add to wishlist">
                <i class="ti-heart"></i>
              </a>
            </div>
         </div>
         
          <div class="card text-gray height-100p shadow-v2">
            <a href="#">
              <img class="card-img-top" src="assets/img/360x220/5.jpg" alt="">
            </a>
            <div class="p-4">
              <a href="#" class="h6">
                Programming Real-World Examples
              </a>
              <p class="my-3">
                <i class="ti-user mr-2"></i>
                John Doe
              </p>
              <p class="mb-0">
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star text-warning"></i>
                <i class="fas fa-star"></i>
                <span class="text-dark">4.90</span>
                <span>(599)</span>
              </p>
            </div>
            <div class="media border-top p-4 align-items-center justify-content-between">
              <h4 class="h5 mb-0">
                <span class="text-primary">$180</span>
              </h4>
              <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm" 
                data-container="body" 
                data-toggle="tooltip" 
                data-placement="top" 
                data-skin="light" 
                title="Add to wishlist">
                <i class="ti-heart"></i>
              </a>
            </div>
         </div>
        </div>
      </div>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> <!-- END section-->
   
   
   
@endsection