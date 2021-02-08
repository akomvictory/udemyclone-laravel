@extends('layouts.header_footer')

@section('content')

<div class="container">

<div class="row">



<div class="col-lg-4 mt-4">
          <div class="card shadow-v1">
            <div class="card-header text-center border-bottom pt-5 mb-4">
             <img class="rounded-circle mb-4" src="/{{$profile->instructor_photo}}" width="200" height="200" alt="">
             <h4>
             {{$profile->instructor_name}} 
             </h4>
              <p>
              {{$profile->proffesion}} 
              </p>
             <!-- <ul class="list-inline mb-0">
                <li class="list-inline-item m-2">
                  <i class="ti-user text-primary"></i>
                  <span class="d-block">Students</span>
                  <span class="h6">147570</span>
                </li>
                <li class="list-inline-item m-2">
                  <i class="ti-book text-primary"></i>
                  <span class="d-block">Courses</span>
                  <span class="h6">27</span>
                </li>
                <li class="list-inline-item m-2">
                  <i class="ti-star text-primary"></i>
                  <span class="d-block">Reviews</span>
                  <span class="h6">10467</span>
                </li>
              </ul> -->
            </div>
            <div class="card-body border-bottom">
            <!--  <ul class="list-unstyled">
                <li class="mb-3">
                  <span class="d-block">Email address:</span>
                  <a class="h6" href="mailto:saifullah@gmail.com">saifullah@gmail.com</a>
                </li>
                <li class="mb-3">
                  <span class="d-block">Phone:</span>
                  <a class="h6" href="mailto:saifullah@gmail.com">+91 654 784 547</a>
                </li>
                <li class="mb-3">
                  <span class="d-block">Location:</span>
                  <a class="h6" href="mailto:saifullah@gmail.com">South Street, London, UK</a>
                </li>
              </ul> -->
            </div>
            <div class="card-footer">
             <p>
               Social Profile:
             </p>
              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a href="{{$profile->instructor_facebook_link}}" class="btn btn-outline-facebook iconbox iconbox-sm">
                    <i class="ti-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="{{$profile->instructor_twitter_link}}" class="btn btn-outline-twitter iconbox iconbox-sm">
                    <i class="ti-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="{{$profile->instructor_linkin_link}}" class="btn btn-outline-linkedin iconbox iconbox-sm">
                    <i class="ti-linkedin"></i>
                  </a>
                </li>
               
              </ul>
            </div>
          </div>
        </div> <!-- END col-md-4 -->



<div class="col-lg-8 mt-4">
          <div class="card shadow-v1 padding-30">
            <ul class="nav tab-line tab-line border-bottom mb-4" role="tablist">
             <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#Tabs_1-1" role="tab" aria-selected="true">
                About
              </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-2" role="tab" aria-selected="true">
                Courses
              </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-3" role="tab" aria-selected="true">
                Reviews
              </a>
             </li>
             <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#Tabs_1-4" role="tab" aria-selected="true">
                Message
              </a>
             </li>
        
           </ul>
           
            <div class="tab-content">
              <div class="tab-pane fade show active" id="Tabs_1-1" role="tabpanel">
               <h4>
                 Biography
               </h4>
               <p>
                  {{$profile->instructor_bio}}
               </p>

                
                <hr class="my-4">
                <div class="border-bottom mb-4 pb-4">
                 <h4 class="mb-4">
                   Experience
                 </h4>
                  <ul class="ec-timeline-portlet list-unstyled bullet-line-list">
                    <li class="ec-timeline-portlet__item mb-4">
                      <small>{{$profile->work_start_year}} - {{$profile->work_end_year}}</small>
                      <h6 class="mb-0">{{$profile->work_position}}</h6>
                      <p class="mb-2">{{$profile->company_name}}</p>
                      <p>
                      {{$profile->job_description}}                      </p>
                    </li>
                
                  </ul>
                </div>
                <div class="mb-4">
                 <h4 class="mb-4">
                   Education
                 </h4>
                  <ul class="ec-timeline-portlet list-unstyled bullet-line-list">
                    <li class="ec-timeline-portlet__item mb-4">
                      <small>{{$profile->education_start_year}} - {{$profile->education_end_year}} </small>
                      <h6 class="mb-0">{{$profile->education_department}}</h6>
                      <p class="mb-2">{{$profile->school_of_study}}</p>
                      <p>
                      {{$profile->study_description}}                     
                       </p>
                    </li>
                   
                  </ul>
                </div>
              </div>
              <div class="tab-pane fade" id="Tabs_1-2" role="tabpanel">
                <div class="row">

                @if(count($instructor_courses)>0)

                 @foreach($instructor_courses as $instructor_course)
                  <div class="col-md-6 mt-4">
                    <a href="/learning/{{$instructor_course->course_category}}/view-course/{{$instructor_course->id}}/detail" class="card text-gray overflow-hidden height-100p shadow-v1 border">
                   <!--  <span class="ribbon-badge font-size-sm bg-success text-white">Best selling</span> -->
                      <img with="330" height="202" class="card-img-top" src="{{$instructor_course->course_photo}}" alt="">
                      <div class="card-body">
                        <h4 class="h5">
                          {{$instructor_course->course_title}}
                        </h4>
                        <p class="my-3">
                          <i class="ti-user mr-2"></i>
                          {{$instructor_course->course_moderator}}
                        </p>
                      
                      </div>
                      <div class="card-footer media align-items-center justify-content-between">
                        <ul class="list-unstyled mb-0">
                          <li class="mb-1">
                            <i class="ti-headphone small mr-2"></i>
                            {{$nun_of_instructor_courses}} lectures
                          </li>
                        
                        </ul>
                        <h5 class="h5">
                          <span class="text-primary"># {{$instructor_course->course_price}}</span>
                        </h5>
                      </div>
                    </a>
                  </div>

                 @endforeach
                  @endif
                
                 
              
                </div> <!-- END row-->
              </div> <!-- END tab-pane -->
              <div class="tab-pane fade" id="Tabs_1-3" role="tabpanel">
              

              @if(count($ireviews)>0)

                 @foreach($ireviews as $ireview)

                <div class="row mx-0 py-4 border-bottom mt-4">
                  <div class="col-md-4 media">
                    <img class="iconbox iconbox-xl" src="/img/user.png" alt="">
                    <div class="media-body ml-4 mb-4 mb-md-0">
                     <small class="text-gray">{{$ireview->created_at}}</small>
                     <h6>
                       {{$ireview->username}}
                     </h6>
                    </div>
                  </div>
                  <div class="col-md-8">
                    
                    <p class="font-size-18">
                    {{$ireview->title}}
                    </p>
                    <p>
                    {{$ireview->description}}
                    </p>
                  </div>
                </div>
                
                @endforeach
                @else
                <span class="alert alert-danger">No review left yet!</span>
                @endif
                
                 <!-- END d-flex-->
               <!-- <div class="text-center mt-5">
                  <a href="#" class="btn btn-primary btn-icon">
                    <i class="ti-reload mr-2"></i>
                    Load More
                  </a>
                </div> -->
              </div>
              <div class="tab-pane fade" id="Tabs_1-4" role="tabpanel">
                <form action="/ireviews" method="POST" class="p-4">
                @csrf
                  <div class="row">
   
                 
                    <div class="col-12 mb-4">
                      <textarea class="form-control" name="description" placeholder="Message" rows="5" required></textarea>
                    </div>
                    <div class="col-12 mb-4">
                      <input class="form-control" type="hidden" value="{{$profile->instructor_name}}" name="instructor_name" placeholder="James Walker" required>
                    </div>
                    <div class="col-12 mb-4">
                      <button type="submit" class="btn btn-primary">Send Now</button>
                    </div>
                  </div>
                </form>
              </div>
              
             
              
              
               <!-- END tab-pane -->
            </div> <!-- END tab-content-->
          </div> <!-- END card-->
        </div> <!-- END col-md-8 -->
      </div> <!--END row-->
    </div> <!--END container-->
  </section>

  </div>
  </div>


@endsection