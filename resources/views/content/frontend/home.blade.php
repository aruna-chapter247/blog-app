<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themefisher.com">

  <title>Megakit</title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/bootstrap/css/bootstrap.min.css')}}"> 
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/themify/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/plugins/fontawesome/css/all.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/plugins/magnific-popup/dist/magnific-popup.css')}}">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="{{asset('frontend/plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/plugins/slick-carousel/slick/slick-theme.css')}}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

  <!-- created custom css -->
  <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">

</head>

<body>

<!-- Header Start --> 

<header class="navigation">
	<div class="header-top ">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-2 col-md-4">
					<div class="header-top-socials text-center text-lg-left text-md-left">
						<a href="https://www.facebook.com/themefisher" target="_blank"><i class="ti-facebook"></i></a>
						<a href="https://twitter.com/themefisher" target="_blank"><i class="ti-twitter"></i></a>
						<a href="https://github.com/themefisher/" target="_blank"><i class="ti-github"></i></a>
					</div>
				</div>
				<div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
					<div class="header-top-info">
						<a href="tel:+23-345-67890">Call Us : <span>+23-345-67890</span></a>
						<a href="mailto:support@gmail.com" ><i class="fa fa-envelope mr-2"></i><span>support@gmail.com</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg  py-4" id="navbar">
		<div class="container">
		  <a class="navbar-brand" href="{{ url('megakitapp') }}">
		  	Mega<span>kit.</span>
		  </a>

		  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="about.html">Our company</a></li>
						<li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
					</ul>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
			   <li class="nav-item"><a class="nav-link" href="project.html">Portfolio</a></li>
			   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown05">
						<li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
						<li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

						<li><a class="dropdown-item" href="{{url('megakitapp/blog-detail')}}">Blog Single</a></li>
					</ul>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
			</ul>

			<form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
			  <a href="contact.html" class="btn btn-solid-border btn-round-full">Get a Quote</a>
			</form>
		  </div>
		</div>
	</nav>
</header>

<!-- Header Close --> 

<div class="main-wrapper ">
<section class="page-title bg-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <!-- <span class="text-white">Our blog</span> -->
          <h1 class="text-capitalize mb-4 text-lg">Blog articles</h1>
          <!-- <ul class="list-inline">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our blog</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
					<!-- create dynamic blog -->
					@if (!empty($blogsData))
						@foreach ($blogsData as $blog)
					
							<div class="col-lg-6 col-md-6 mb-5">
								<div class="blog-item">
									<img src="{{url('images/blog_feature_images/'.$blog->feature_image)}}" alt="" class="img-fluid rounded">

									<div class="blog-item-content bg-white p-4">
										<div class="blog-item-meta  py-1 px-2">
										@if (isset($blog->category->category_name))
											<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>{{ $blog->category->category_name }}</span>
										@else
											<span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>{{ $blog->category_name }}</span>
										@endif
										
										</div> 

										<h3 class="mt-3 mb-3"><a href="{{url('megakitapp/blog-detail?blog='.$blog->slug)}}"> {{ $blog->title }}</a></h3>
										<p class="mb-4">{{ $blog->description }}</p>

										<a href="{{url('megakitapp/blog-detail?blog='.$blog->slug)}}" class="btn btn-small btn-main btn-round-full">Learn More</a>
									</div>
								</div>
							</div>
						@endforeach
					@endif
					<!-- end blog -->
				</div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-wrap">
					<div class="sidebar-widget search card p-4 mb-3 border-0">
						<form action="{{ url('/megakitapp') }}" method="GET">
							<input type="text" class="form-control" name="search" placeholder="search">
							
							<button type="submit" class="btn btn-main btn-small d-block mt-2 w-100">search</button>
						</form>
					</div>

					<div class="sidebar-widget latest-post card border-0 p-4 mb-3">
						<h5>Latest Posts</h5>

						<!-- create dynamic latest post  -->
						@if (!empty($latestBlog))
							@foreach ($latestBlog as $blog)
								@php 
									$date = $blog->created_at? date("d M Y ", strtotime($blog->created_at)) : '';
								@endphp
								<div class="media border-bottom py-3">
									<a href="{{ url('megakitapp/blog-detail?blog='.$blog->slug) }}"><img class="mr-4 latest-blog-img" src="{{url('images/blog_feature_images/'.$blog->feature_image)}}" alt="" ></a>
									<div class="media-body">
										<h6 class="my-2"><a href="{{ url('megakitapp/blog-detail?blog='.$blog->slug) }}">{{ $blog->title }}</a></h6>
										<span class="text-sm text-muted">{{ $date }}</span>
									</div>
								</div>
							@endforeach
						@endif
						<!-- end -->
					</div>

					<div class="sidebar-widget bg-white rounded tags p-4 mb-3">
						<h5 class="mb-4">Categories</h5>
						@if (count($categoryData) > 0)
							@foreach ($categoryData as $category)
								<a href="{{ url('/megakitapp?search='.$category->slug)}}">{{ $category->category_name }}</a>
							@endforeach
						@endif
					</div>
				</div>
            </div>   
        </div>

        <div class="row mt-5">
            <div class="col-lg-8">
			{!! $blogsData->withQueryString()->links() !!}
                <!-- <nav class="navigation pagination py-2 d-inline-block">
                    <div class="nav-links">
                        <a class="prev page-numbers" href="#">Prev</a>
                        <span aria-current="page" class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#">Next</a>
						 {!! $blogsData->withQueryString()->links() !!}
                    </div>
                </nav> -->
            </div>
        </div>
    </div>
</section>

<!-- footer Start -->
<footer class="footer section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4">Company</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4">Quick Links</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">About</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget">
					<h4 class="text-capitalize mb-4">Subscribe Us</h4>
					<p>Subscribe to get latest news article and resources  </p>

					<form action="#" class="sub-form">
						<input type="text" class="form-control mb-3" placeholder="Subscribe Now ...">
						<a href="#" class="btn btn-main btn-small">subscribe</a>
					</form>
				</div>
			</div>

			<div class="col-lg-3 ml-auto col-sm-6">
				<div class="widget">
					<div class="logo mb-4">
						<h3>Mega<span>kit.</span></h3>
					</div>
					<h6><a href="tel:+23-345-67890" >Support@megakit.com</a></h6>
					<a href="mailto:support@gmail.com"><span class="text-color h4">+23-456-6588</span></a>
				</div>
			</div>
		</div>
		
		<div class="footer-btm pt-4">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">Megakit.</span> by <a href="https://themefisher.com/" target="_blank">Themefisher</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="copyright">
					Distributed by  <a href="https://themewagon.com/" target="_blank">Themewagon</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12 text-left text-lg-left">
					<ul class="list-inline footer-socials">
						<li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="ti-facebook mr-2"></i>Facebook</a></li>
						<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="ti-twitter mr-2"></i>Twitter</a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="ti-linkedin mr-2 "></i>Linkedin</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
   
    </div>

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="{{asset('frontend/plugins/jquery/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/contact.js')}}"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{asset('frontend/plugins/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('frontend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
   <!--  Magnific Popup-->
    <script src="{{asset('frontend/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{asset('frontend/plugins/slick-carousel/slick/slick.min.js')}}"></script>
    <!-- Counterup -->
    <script src="{{asset('frontend/plugins/counterup/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/counterup/jquery.counterup.min.js')}}"></script>

    <!-- Google Map -->
    <script src="{{asset('frontend/plugins/google-map/map.js')}}"></script>
    <script src="{{asset('frontend/https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap')}}"></script>    
    
    <script src="{{asset('frontend/js/script.js')}}"></script>

  </body>
  </html>