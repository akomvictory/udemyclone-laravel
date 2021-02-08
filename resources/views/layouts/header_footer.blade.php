<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    
    <!-- Title-->
    <title>Danisoft E-learning Platform</title>
    
    <!-- SEO Meta-->
    <meta name="description" content="Danisoft E-learning Platform A plartform 
    to ace your career and competence. Learn Android development,
    web development, business management, content writing">
    <meta name="keywords" content="">
    <meta name="danisoft" content="Danisoft E-learning Platform A plartform 
    to ace your career and competence. Learn Android development,
    web development, business management, content writing">
    
    <!-- viewport scale-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
            
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="{{ asset('/img/logo2.png') }}">
    <link rel="shortcut icon" href="{{ asset('/img/logo2.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('/img/logo2.png') }}">
    
    
    <!--Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700%7CWork+Sans:400,500">
    
    
    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{ asset('/fonts/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/fonts/themify-icons/css/themify-icons.css') }}">
    
    
    <!-- stylesheet-->    
    <link rel="stylesheet" href="{{ asset('/css/vendors.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    
  </head>
  
  <body>
   

  <header class="site-header bg-dark text-white-0_5">        
    <div class="container">
      <div class="row align-items-center justify-content-between mx-0">
        <ul class="list-inline d-none d-lg-block mb-0">
          <li class="list-inline-item mr-3">
           <div class="d-flex align-items-center">
           
            <i class="ti-email mr-2"></i>

            <a href="mailto:support@educati.com">info@danisoftsolutions.com</a>
           </div>
          </li>
          <li class="list-inline-item mr-3">
           <div class="d-flex align-items-center">
            <i class="ti-headphone mr-2"></i>
            <a href="tel:+8801740411513">+2348058999922</a>
           </div>
          </li>
        </ul>
        <ul class="list-inline mb-0">
          <li class="list-inline-item mr-0 p-3 border-right border-left border-white-0_1">
            <a href="https://www.facebook/danisoftictsolution"><i class="ti-facebook"></i></a>
          </li>
          <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
            <a href="https://www.twitter/danisoftsolution"><i class="ti-twitter"></i></a>
          </li>
          <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
            <a href="https://www.facebook/danisoft_solution"><i class="ti-instagram"></i></a>
          </li>

          
         
        </ul>
        <ul class="list-inline mb-0">
        @guest
          <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-left border-white-0_1">
            <a href="{{ route('login') }}">Login</a>
          </li>
          <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-white-0_1">
            <a href="{{ route('register') }}"> Register</a>
          </li>
          @endguest

    

      @auth
      @if(Auth::user()->role_id <3)
          <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-white-0_1">
            <a href="/Admin/dashboard-control" class="btn btn-secondary btn-sm"> Dashboard</a>
          </li>
          @endif
      @endauth
        </ul>
      </div> <!-- END END row-->
    </div> <!-- END container-->
  </header><!-- END site header-->
  
  

  <nav class="ec-nav sticky-top bg-white">
  <div class="container">
    <div class="navbar p-0 navbar-expand-lg">
      <div class="navbar-brand">
        <a class="logo-default" href="/"><img alt="" src="{{ asset('/img/logo2.png') }}"></a>
      </div>
      <span aria-expanded="false" class="navbar-toggler ml-auto collapsed" data-target="#ec-nav__collapsible" data-toggle="collapse">
        <div class="hamburger hamburger--spin js-hamburger">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
      </span>
      <div class="collapse navbar-collapse when-collapsed" id="ec-nav__collapsible">
        <ul class="nav navbar-nav ec-nav__navbar ml-auto">

        
        @auth
            <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" 
                class="nav-link__list">Logout</a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                  </form>
                  </li>
                   </ul>
                </li>
                @endauth

                

            <li class="nav-item nav-item">
                <a class="nav-link" href="/">Home</a>
             
            </li>
        

            <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Courses</a>
                <ul class="dropdown-menu">
                  <li><a href="/learning/all-courses" class="nav-link__list">All Courses</a></li>
                 
                </ul>
            </li>


            

            <li class="nav-item nav-item__has-dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">pages</a>
              <div class="dropdown-menu">
                  <ul class="list-unstyled">
                   <li><a class="nav-link__list" href="page-about.html">About</a></li>

                 

                  

              



                   <li class="nav-item__has-dropdown">
                      <a class="nav-link__list dropdown-toggle" href="#" data-toggle="dropdown"> Career </a>
                      <div class="dropdown-menu">
                        <ul class="list-unstyled">
                          <li><a class="nav-link__list" href="page-career.html"> Careers </a></li>
                          <li><a class="nav-link__list" href="page-career-details.html"> Career Details </a></li>
                        </ul>
                      </div>
                    </li>

                  
                  </ul>
              </div>
            </li>

         
        </ul>
      </div>
      @auth
      @if(Auth::user()->role_id>2)
      <div class="nav-toolbar">
    
        <ul class="navbar-nav ec-nav__navbar">
          <li class="nav-item nav-item__has-dropdown">
            <a class="nav-link dropdown-toggle no-caret" href="#" data-toggle="dropdown"><i class="ti-shopping-cart"></i></a>
            <ul class="dropdown-menu dropdown-cart" aria-labelledby="navbarDropdown">

            <?php $total = 0 ?>
 
        @if(session('cart'))

		
            @foreach(session('cart') as $id => $details)
 
                <?php $total += $details['price'] * $details['quantity'] ?>


              <li class="dropdown-cart__item">
                <div class="media">
                  <img class="dropdown-cart__img" src="{{ $details['photo'] }}" alt="">
                  <div class="media-body pl-3">
                    <a href="#" class="h6">{{ $details['name'] }}</a>
                    <span class="text-primary">{{ $details['price'] }}</span>
                  </div>
                </div>
                <a href="#" class="dropdown-cart__item-remove">
                  <i class="ti-close"></i>
                </a>
              </li>
              
              @endforeach
           
        @endif
            
              <li class="px-2 py-4 text-center">
                Subtotal: <span class="text-primary font-weight-semiBold"># {{$total}}</span>
              </li>
              <li class="px-2 pb-4 text-center">
                <button class="btn btn-outline-primary mx-1"> <a href="/bouquet/cart">View Cart</a></button>
               <!-- <button class="btn btn-primary mx-1">Checkout</button> -->
              </li>
            </ul>
          </li>
          @endif
          @endauth
          
          <li class="nav-item">
            <a class="nav-link site-search-toggler" href="#">
              <i class="ti-search"></i>
            </a>
          </li>
        </ul>
      </div>		
    </div>
  </div> <!-- END container-->		
  </nav> <!-- END ec-nav -->    

  <div class="site-search">
   <div class="site-search__close bg-black-0_8"></div>
   <form method="GET" action="/search/" class="form-site-search">
    <div class="input-group">
      <input type="text" name="course" class="form-control py-3 border-white">
      <div class="input-group-append">
      <button class="btn btn-info rounded" type="submit">
      Search
      <i class="ti-angle-right small"></i>
    </button>
        </div>
    </div>
   </form> 
  </div> <!-- END site-search-->

  
@yield('content')
 
<footer class="site-footer">
  <div class="footer-top bg-dark text-white-0_6 pt-5 paddingBottom-100">
    <div class="container"> 
      <div class="row">

        <div class="col-lg-4 col-md-6 mt-5">
         <img src="{{ asset('/img/logo2.png') }}" alt="Logo">
         <div class="margin-y-40">
           <p>
           Get Tutorials, Video Lessons, 
            Student and Teacher Dashboard, Curriculum Management, Earnings and Reporting,
            ERP, HR, CMS, Tasks, Projects, eCommerce and more.
          </p>
         </div>
          <ul class="list-inline"> 
            <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href="www.facebook.com/DanisoftIctSolution"><i class="ti-facebook"> </i></a></li>
            <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href="www.twitter.com/OfficialDaniso1"><i class="ti-twitter"> </i></a></li>
            <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href="www.youtube.com/Danisoft Solution"><i class="ti-youtube"></i></a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 mt-5">
          <h4 class="h5 text-white">Contact Us</h4>
          <div class="width-3rem bg-primary height-3 mt-3"></div>
          <ul class="list-unstyled marginTop-40">
            <li class="mb-3"><i class="ti-headphone mr-3"></i><a href="tel:+08058999922">08058999922</a></li>
            <li class="mb-3"><i class="ti-email mr-3"></i><a href="mailto:info@danisoftsolutions.com">info@danisoftsolutions.com</a></li>
            <li class="mb-3">
             <div class="media">
              <i class="ti-location-pin mt-2 mr-3"></i>
              <div class="media-body">
                <span> Ground Floor, left
                    Wing, Reinsurance Building, Beside Unity Bank, 
                    Central Business District, Abuja.
                </span>
              </div>
             </div>
            </li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 mt-5">
          <h4 class="h5 text-white">Quick links</h4>
          <div class="width-3rem bg-primary height-3 mt-3"></div>
          <ul class="list-unstyled marginTop-40">
            <li class="mb-2"><a href="page-about.html">About Us</a></li>
            <li class="mb-2"><a href="page-contact.html">Contact Us</a></li>
            <li class="mb-2"><a href="page-sp-student-profile.html">Students</a></li>
            <li class="mb-2"><a href="page-sp-admission-apply.html">Admission</a></li>
            <li class="mb-2"><a href="page-events.html">Events</a></li>
            <li class="mb-2"><a href="blog-card.html">Latest News</a></li>
          </ul>
        </div>

        <!--
        <div class="col-lg-4 col-md-6 mt-5">
          <h4 class="h5 text-white">Newslatter</h4>
          <div class="width-3rem bg-primary height-3 mt-3"></div>
          <div class="marginTop-40">
            <p class="mb-4">Subscribe to get update and information. Don't worry, we won't send spam!</p>
            <form class="marginTop-30" action="#" method="POST">
              <div class="input-group">
                <input type="text" placeholder="Enter your email" class="form-control py-3 border-white" required="">
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="submit">Subscribe</button>
                </div>
              </div>
            </form>
          </div>
        </div>  -->
        
      </div> <!-- END row-->
    </div> <!-- END container-->
  </div> <!-- END footer-top-->

  <div class="footer-bottom bg-black-0_9 py-5 text-center">
    <div class="container">
      <p class="text-white-0_5 mb-0">&copy; {{date('Y')}} Danisoft Innovative Solutions. All rights reserved.</p>
    </div>
  </div>  <!-- END footer-bottom-->
</footer> <!-- END site-footer -->


<div class="scroll-top">
  <i class="ti-angle-up"></i>
</div>

<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>

<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});

			
 
        $(".update-cart").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
 
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
 
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

        $(".like-course").click(function (e) {
            alert("test");
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "GET",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            } 
        });


	</script>
    
    <script src="{{ asset('/js/vendors.bundle.js') }}"></script>
    <script src="{{ asset('/js/scripts.js') }}"></script>
  </body>

</html>  