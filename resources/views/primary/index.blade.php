@extends('layouts.header_footer')

@section('content')



<section class="padding-y-150 flex-center jarallax" data-dark-overlay="5" style="background:url({{ asset('/img/lynda/pexels-christina-morillo-1181274.jpg') }})">
  <div class="container">
    <div class="row">
      <div class="col-12 text-white text-center">
        <h4 style="color:blue" class="font-weight-bold font-primary text-primary text-uppercase wow slideInUp">
          Learn Online Courses
        </h4>
        <h1 class="display-lg-3 font-weight-bold wow slideInUp">
          Advance Your Career.
        </h1>
        <p class="lead wow slideInUp">
          <span class="text-primary font-weight-semiBold">E-learning</span> courses in Business, Technology and Creative Skills taught by industry experts.
        </p>
        <a href="/learning/free-courses" class="btn btn-secondary mt-3 wow slideInUp">Start Free Trial</a>
      @auth
        @if(Auth::user()->role_id>2)
        <a href="/application/become-instructor" class="btn btn-outline-white mt-3 ml-sm-3 wow slideInUp">Become an Instructor</a>
        @endif
        @endauth
    </div>
      <form method="GET" action="search/" class="col-lg-7 mx-auto mt-5">
     
        <div class="input-group bg-white rounded p-2">
          <input type="text" name="course" class="form-control border-white" placeholder="What do you want to learn?" required>
          <div class="input-group-append">
            <button class="btn btn-info rounded" type="submit">
              Search
              <i class="ti-angle-right small"></i>
            </button>
          </div>
        </div>
      </form>
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>

  
  
 
  
   
<section class="padding-y-100">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-md-4">
        <h2 class="mb-4">
          Featured Categories
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
      </div>
      
  

      

      @if(count($courses_categories)>0)
           @foreach($courses_categories as $category)
      
      <div class="col-lg-4 col-md-7 marginTop-30">
        <a href="/learning/{{$category->category_heading}}/view-courses" class="card text-white height-100p hover:parent">
          <img class="w-100 transition-0_3 hover:zoomin" width="330" height="202" src="/{{$category->category_photo}}" alt="">
          <div class="card-img-overlay bg-black-0_5 flex-center">
            <h4>
              {{$category->category_heading}}
            </h4>
            <button class="btn btn-info btn-sm btn-pill">
             <!-- Over 769 Courses -->
            </button>
          </div>
        </a>
      </div>
          @endforeach
      @endif


    </div> <!-- END row-->
  </div> <!-- END container-->
</section>   <!-- END section-->
    
    
    
  
<section class="padding-y-100 bg-light-v5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="mb-4">
          Browse Our Top Courses
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
      </div>
      
      <div class="col-12">
        <ul class="nav nav-pills justify-content-center" role="tablist">
          <li>
            <a class="btn btn-secondary m-2 shadow-v1 active"  href="/learning/Programming/view-courses" role="tab" aria-selected="true">
              Programming
            </a>
          </li>
          <li>
            <a class="btn btn-white m-2 shadow-v1"  href="/learning/Business/view-courses" role="tab" aria-selected="true">
              Business
            </a>
          </li>
          <li>
            <a class="btn btn-white m-2 shadow-v1" href="/learning/Video Editing/view-courses" role="tab" aria-selected="true">
             Video Editing
            </a>
          </li>
          <li>
            <a class="btn btn-white m-2 shadow-v1" href="/learning/Graphic Design/view-courses" role="tab" aria-selected="true">
              Graphic Design
            </a>
          </li>
          <li>
            <a class="btn btn-white m-2 shadow-v1"  href="/learning/Networking/view-courses" role="tab" aria-selected="true">
              Networking
            </a>
          </li>
        </ul>
      <div class="tab-content">
       
        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
          <div class="row">
           
          @if(count($courses)>0)
           @foreach($courses as $course)

            <div class="col-lg-4 col-md-6 marginTop-30">
              <div class="card text-gray overflow-hidden height-100p shadow-v1">
           <!--    <span class="ribbon-badge font-size-sm bg-success text-white">Best selling</span> -->
                <img class="card-img-top" width="330" height="202" src="{{$course->course_photo}}" alt="">
                <div class="card-body">
                  <a href="/learning/{{$course->course_category}}/view-course/{{$course->id}}/detail" class="h5">
                    {{$course->course_title}}
                  </a>
                  <p class="my-3">
                    <i class="ti-user mr-2"></i>
                    {{$course->course_moderator}}
                  </p>
                <!--<ul class="list-unstyled ec-review-rating">
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="active"><i class="fas fa-star"></i></li>
                    <li class="text-gray">
                      <span>(4.9)</span>
                      <span>4578</span>
                    </li>
                  </ul> -->

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
                  <h4 class="h5">
                    <span class="text-primary">{{$course->course_price}} Naira</span>
                  </h4>
                </div>
              </div>
            </div>
            
          @endforeach
          @endif
            
            
          </div> <!-- END row-->
        </div> <!-- END tab-pane -->
        
      
        



        
      </div> <!-- END tab-content-->
      </div> <!-- END col-12 -->
     <!-- <div class="col-12 text-center mt-5">
        <a href="#" class="btn btn-primary">Start Free Trial</a>
      </div> -->
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
    
<section class="padding-y-100">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-md-4">
        <h2 class="mb-4">
          Learning at Danisoft
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
      </div>
      
      <div class="col-lg-4 col-md-6 mt-5 wow slideInUp" data-wow-delay=".1s">
        <div class="media">
          <div class="iconbox iconbox-lg rounded font-size-24 bg-secondary text-white mt-2">
            <i class="ti-pencil-alt"></i>
          </div>
          <div class="media-body ml-4">
            <h4 class="mt-0 mb-3">
              A Valuable Certificate
            </h4>
            <p>
            Yes! We do offer certificates which will help
            you a long way when seeking employment.
            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mt-5 wow slideInUp" data-wow-delay=".2s">
        <div class="media">
          <div class="iconbox iconbox-lg rounded font-size-24 bg-secondary text-white mt-2">
            <i class="ti-medall"></i>
          </div>
          <div class="media-body ml-4">
            <h4 class="mt-0 mb-3">
              Credit-Eligible
            </h4>
            <p>
            Unlimited Access
            Unlock Library and learn any topic with one subscription.            </p>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mt-5 wow slideInUp" data-wow-delay=".3s">
        <div class="media">
          <div class="iconbox iconbox-lg rounded font-size-24 bg-secondary text-white mt-2">
            <i class="ti-flag-alt"></i>
          </div>
          <div class="media-body ml-4">
            <h4 class="mt-0 mb-3">
              Expert Instructors
            </h4>
            <p>
           While your learning parse is up to you, our instructors
           are always available to guide you.

            </p>
          </div>
        </div>
      </div>
      <!--
      <div class="col-lg-4 col-md-6 mt-5 wow slideInUp" data-wow-delay=".1s">
        <div class="media">
          <div class="iconbox iconbox-lg rounded font-size-24 bg-primary text-white mt-2">
            <i class="ti-wand"></i>
          </div>
          <div class="media-body ml-4">
            <h4 class="mt-0 mb-3">
              MicroMasters Programs
            </h4>
            <p>
              Investig ationes demons travg vunt lectores legere lyrus quod legunt saepius claritas est.
            </p>
          </div>
        </div>
      </div>  -->
      
      <!--
      <div class="col-lg-4 col-md-6 mt-5 wow slideInUp" data-wow-delay=".2s">
        <div class="media">
          <div class="iconbox iconbox-lg rounded font-size-24 bg-primary text-white mt-2">
            <i class="ti-book"></i>
          </div>
          <div class="media-body ml-4">
            <h4 class="mt-0 mb-3">
              XSeries Programs
            </h4>
            <p>
              Investig ationes demons travg vunt lectores legere lyrus quod legunt saepius claritas est.
            </p>
          </div>
        </div>
      </div>  -->
      
      <!--
      <div class="col-lg-4 col-md-6 mt-5 wow slideInUp" data-wow-delay=".3s">
        <div class="media">
          <div class="iconbox iconbox-lg rounded font-size-24 bg-primary text-white mt-2">
            <i class="ti-ruler-pencil"></i>
          </div>
          <div class="media-body ml-4">
            <h4 class="mt-0 mb-3">
              Take The Tour
            </h4>
            <p>
              Investig ationes demons travg vunt lectores legere lyrus quod legunt saepius claritas est.
            </p>
          </div>
        </div>
      </div>  -->
      
    </div> <!-- END row-->
  </div> <!-- END container-->
</section> 


   
    <!--
<section class="paddingTop-70 paddingBottom-100 bg-light-v3">
  <div class="container">
    <div class="row text-center align-items-center">
      <div class="col-lg-3 col-sm-4 marginTop-30">
        <img src="{{ asset('/img/logos/2.png') }}" alt="">
      </div>
      <div class="col-lg-3 col-sm-4 marginTop-30">
        <img src="{{ asset('/img/logos/1.png') }}" alt="">
      </div>
      <div class="col-lg-3 col-sm-4 marginTop-30">
        <img src="{{ asset('/img/logos/4.png') }}" alt="">
      </div>
      <div class="col-lg-3 col-sm-4 marginTop-30">
        <img src="{{ asset('/img/logos/5.png') }}" alt="">
      </div>
    </div> <!- END row->
  </div> <!- END container-> 
</section>    -->



    
<section class="padding-y-100 bg-cover bg-center jarallax" data-dark-overlay="6" style="background: url({{ asset('/img/1920/550_2.jpg') }}) no-repeat;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 col-md-7 mr-auto text-white my-3">
        <h4 class="text-primary font-weight-semiBold">
          Try Danisoft free for 30 days.
        </h4>
        <h2>
          Learn a New Skill Online, on Your Time
        </h2>
        <a href="#" class="btn btn-secondary mt-3">Start Free Trail</a>
      </div>
      
      <div class="col-lg-4 col-md-5 my-3">
   <img src="{{ asset('/img/1920/660.jpg') }}" alt="">
     
      </div>
    
    
    
    
    
    
    </div> <!-- END row-->
  </div> <!-- END container--> 
</section> 





    
<section class="paddingTop-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <img src="/img/david1.jpg" alt="">
      </div>
      <div class="col-md-6 mt-5 mb-5 mb-md-0 pl-lg-5">

        <p class="lead font-weight-semiBold mb-4 position-relative">
         <i class="ti-quote-left position-absolute display-1 opacity-01" data-offset-top="-50"></i>
        We will get you trained with the most innovative skills available today, like programming skills and database management 
          skills and web design skills through self-study and the material available on Danisoft.
        </p>
        <h6>
          <span class="text-primary">David Samson,</span> Digital Administrator
        </h6>
        <a href="/instructor/profile/1" class="btn btn-secondary btn-md mt-4">Lead Instructor</a>
      </div>
    </div>
  </div>
</section> 


  
<!--   
    
<section class="padding-y-100 bg-light-v4">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-md-4">
        <h2 class="mb-4">
          Campus News
        </h2>
        <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
      </div>
    </div> <!- END row->
    <div class="row">
      <div class="col-lg-6">
        <div class="list-card align-items-center marginTop-30 shadow-v1">
          <div class="col-md-4 px-md-0">
            <img class="w-100" src="{{ asset('/img/262x230/1.jpg') }}" alt="">
          </div>
          <div class="col-md-8 p-4">
            <p class="text-primary">June 9, 2018</p>
            <a href="#" class="h5">
              Kudiyattam: Sanskrit Theater by the Napathya Troupe
            </a>
          </div>
        </div>
        <div class="list-card align-items-center marginTop-30 shadow-v1">
          <div class="col-md-4 px-md-0">
            <img class="w-100" src="{{ asset('/img/262x230/2.jpg') }}" alt="">
          </div>
          <div class="col-md-8 p-4">
            <p class="text-primary">June 12, 2018</p>
            <a href="#" class="h5">
              How to become a math super hero by
            </a>
          </div>
        </div>
        <div class="list-card align-items-center marginTop-30 shadow-v1">
          <div class="col-md-4 px-md-0">
            <img class="w-100" src="{{ asset('/img/262x230/3.jpg') }}" alt="">
          </div>
          <div class="col-md-8 p-4">
            <p class="text-primary">June 17, 2018</p>
            <a href="#" class="h5">
              Increase your English skill with Anthony Brooks 
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 marginTop-30">
        <div class="card">
          <img class="card-img-top" src="{{ asset('/img/555x490/2.jpg') }}" alt="">
          <div class="card-body">
           <p class="text-primary">
             20 July 2018
           </p>
          <a href="#" class="h5 mb-3">
            Hidden in Plain Sight: Family Secrets and American History
          </a>
           <p>
             Investig ationes demons trave wanrunt the lectore legere kliushy was aequod legunt saeph claritas.
           </p>
            <a href="#" class="btn btn-outline-primary mt-3">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div> <!- END row->
  </div> <!- END container ->
</section>  -->


<section class="padding-y-100 bg-info">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center text-white">
      <h2>Start Teaching</h2>
      
        <p class="lead my-4">
          Share your knowledge and reach millions of students across the globe. 
          Join the Nigeria leading online learning marketplace.
        </p>
    @auth
      @if(Auth::user()->role_id>2)
        <a href="/application/become-instructor" class="btn btn-white mt-2">Become an Instructor</a>
      @endif
      @endauth
      
      </div>
    </div>
  </div>
</section>

<br/> <br/>

@endsection