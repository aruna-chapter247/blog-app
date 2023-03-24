<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themefisher.com">

  <title>Megakit| Html5 Agency template</title>

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

						<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
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
          <span class="text-white">News details</span>
          <h1 class="text-capitalize mb-4 text-lg">Blog Details</h1>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="{{url('/megakitapp/')}}" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">News details</a></li>
          </ul>
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
                    <div class="col-lg-12 mb-5">
                        <div class="single-blog-item">
                            @if(!empty($blogDetail->feature_image))
                                <img src="{{url('images/blog_feature_images/'.$blogDetail->feature_image)}}" alt="Avatar" alt="" class="img-fluid rounded">
                            @else
                                <img alt="" class="img-fluid rounded" src="{{url('images/blog_feature_images/avatar.png')}}" />
                            @endif
                            

                            <div class="blog-item-content bg-white p-5">
                                <div class="blog-item-meta bg-gray py-1 px-2">
                                    <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Creativity</span>
                                    <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
                                    <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span>
                                </div> 

                                <h2 class="mt-3 mb-4"><a href="blog-single.html">{{ $blogDetail->title }}</a></h2>
                                <!-- <p class="lead mb-4">Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium pariatur repudiandae!</p> -->

                                <p>{{ $blogDetail->description }}</p>

                                <!-- <h3 class="quote">A brand for a company is like a reputation for a person. You earn reputation by trying to do hard things well.</h3>
                                
                                <p class="lead mb-4 font-weight-normal text-black">The same is true as we experience the emotional sensation of stress from our first instances of social rejection ridicule. We quickly learn to fear and thus automatically.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, rerum beatae repellat tenetur incidunt quisquam libero dolores laudantium. Nesciunt quis itaque quidem, voluptatem autem eos animi laborum iusto expedita sapiente.</p> -->

                                <div class="tag-option mt-5 clearfix">
                                    <ul class="float-left list-inline"> 
                                        <li>Tags:</li> 
                                        <li class="list-inline-item"><a href="#" rel="tag">Advancher</a></li>
                                        <li class="list-inline-item"><a href="#" rel="tag">Landscape</a></li>
                                        <li class="list-inline-item"><a href="#" rel="tag">Travel</a></li>
                                    </ul>        

                                    <ul class="float-right list-inline">
                                        <li class="list-inline-item"> Share: </li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-5">
                        <div class="posts-nav bg-white p-5 d-lg-flex d-md-flex justify-content-between ">
                            <a class="post-prev align-items-center" href="#">
                                <div class="posts-prev-item mb-4 mb-lg-0">
                                    <span class="nav-posts-desc text-color">- Previous Post</span>
                                    <h6 class="nav-posts-title mt-1">
                                        Donec consectetuer ligula <br>vulputate sem tristique.
                                    </h6>
                                </div>
                            </a>
                            <div class="border"></div>
                            <a class="posts-next" href="#">
                                <div class="posts-next-item pt-4 pt-lg-0">
                                    <span class="nav-posts-desc text-lg-right text-md-right text-color d-block">- Next Post</span>
                                    <h6 class="nav-posts-title mt-1">
                                        Ut aliquam sollicitudin leo.
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-5">
                        <div class="comment-area card border-0 p-5">
                            <h4 class="mb-4">2 Comments</h4>
                            <ul class="comment-tree list-unstyled">
                                <li class="mb-5">
                                    <div class="comment-area-box">
                                        <img alt="" src="{{asset('frontend/images/blog/test1.jpg')}}" class="img-fluid float-left mr-3 mt-2">

                                        <h5 class="mb-1">Philip W</h5>
                                        <span>United Kingdom</span>

                                        <div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
                                            <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a>
                                            <span class="date-comm">Posted October 7, 2018 </span>
                                        </div>

                                        <div class="comment-content mt-3">
                                            <p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="comment-area-box">
                                        <img alt="" src="{{asset('frontend/images/blog/test2.jpg')}}" class="mt-2 img-fluid float-left mr-3">

                                        <h5 class="mb-1">Philip W</h5>
                                        <span>United Kingdom</span>

                                        <div class="comment-meta mt-4 mt-lg-0 mt-md-0 float-lg-right float-md-right">
                                            <a href="#"><i class="icofont-reply mr-2 text-muted"></i>Reply |</a>
                                            <span class="date-comm">Posted October 7, 2018</span>
                                        </div>

                                        <div class="comment-content mt-3">
                                            <p>Some consultants are employed indirectly by the client via a consultancy staffing company, a company that provides consultants on an agency basis. </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <form class="contact-form bg-white rounded p-5" id="comment-form">
                            <h4 class="mb-4">Write a comment</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="name" id="name" placeholder="Name:">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">
                                    </div>
                                </div>
                            </div>


                            <textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>

                            <input class="btn btn-main btn-round-full" type="submit" name="submit-contact" id="submit_contact" value="Submit Message">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-wrap">
                    <div class="sidebar-widget search card p-4 mb-3 border-0">
                        <input type="text" class="form-control" placeholder="search">
                        <a href="#" class="btn btn-mian btn-small d-block mt-2">search</a>
                    </div>

                    <div class="sidebar-widget card border-0 mb-3">
                        <img src="{{asset('frontend/images/blog/blog-author.jpg')}}" alt="" class="img-fluid">
                        <div class="card-body p-4 text-center">
                            <h5 class="mb-0 mt-4">Arther Conal</h5>
                            <p>Digital Marketer</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, dolore.</p>

                            <ul class="list-inline author-socials">
                                <li class="list-inline-item mr-3">
                                    <a href="#"><i class="fab fa-facebook-f text-muted"></i></a>
                                </li>
                                <li class="list-inline-item mr-3">
                                    <a href="#"><i class="fab fa-twitter text-muted"></i></a>
                                </li>
                                <li class="list-inline-item mr-3">
                                    <a href="#"><i class="fab fa-linkedin-in text-muted"></i></a>
                                </li>
                                <li class="list-inline-item mr-3">
                                    <a href="#"><i class="fab fa-pinterest text-muted"></i></a>
                                </li>
                                <li class="list-inline-item mr-3">
                                    <a href="#"><i class="fab fa-behance text-muted"></i></a>
                                </li>
                            </ul>
                        </div>
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
                                    <a href="{{ url('megakitapp/blog-detail/'.$blog->slug) }}"><img class="mr-4" src="{{url('images/blog_feature_images/'.$blog->feature_image)}}" alt="" width="87px" height="72px"></a>
                                    <div class="media-body">
                                        <h6 class="my-2"><a href="{{ url('megakitapp/blog-detail/'.$blog->slug) }}">{{ $blog->title }}</a></h6>
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
                                <a href="#">{{ $category->category_name }}</a>
                            @endforeach
                        @endif
                        
                        <!-- <h5 class="mb-4">Tags</h5>

                        <a href="#">Web</a>
                        <a href="#">agency</a>
                        <a href="#">company</a>
                        <a href="#">creative</a>
                        <a href="#">html</a>
                        <a href="#">Marketing</a>
                        <a href="#">Social Media</a>
                        <a href="#">Branding</a> -->
                    </div>
                </div>
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