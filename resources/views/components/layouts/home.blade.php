<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bookcelebxclusives.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Apr 2024 11:44:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
   @livewireStyles
   <meta charset="UTF-8" />
   <meta name="description" content="description" />
   <meta name="keywords" content="Worldwide Stars & Property Booking | We are an agency that helps people meet with their favorites stars in sports, entertainment and more" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <meta http-equiv="X-UA-Compatible" content="ie=edge" />
   <link rel="shortcut icon" href="assets/img/favicon.png" />
    <meta property="og:image" content="assets/img/display.jpg" />
   <title>
      Welcome to Worldwide Property Buying,selling Booking   </title>
   <!-- styles-->
   
   <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
   <!-- web-font loader-->
   <script>
      WebFontConfig = {
         google: {
            families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],
         }
      }

      function font() {
         var wf = document.createElement('script')

         wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
         wf.type = 'text/javascript'
         wf.async = 'true'
         var s = document.getElementsByTagName('script')[0]
         s.parentNode.insertBefore(wf, s)

      }
      font()
   </script>
   
   
   
  <
</head>
<body>
	<div class="page-wrapper">
		<!-- aside dropdown start-->
<div class="aside-dropdown">
   <div class="aside-dropdown__inner"><span class="aside-dropdown__close">
         <svg class="icon">
            <use xlink:href="#close"></use>
         </svg></span>
      <div class="aside-dropdown__item d-lg-none d-block">
         <ul class="aside-menu">
            <li class="aside-menu__item aside-menu__item--active">
               <a class="aside-menu__link" href="{{ url('/') }}">
                  <span>Home</span>
               </a>
            </li>
            <li class="aside-menu__item">
               <a class="aside-menu__link" href="{{ url('home/property-list') }}">
                  <span>Find Property</span>
               </a>
            </li>
            <li class="aside-menu__item">
               <a class="aside-menu__link" href="{{ url('home/property-list') }}">
                  <span>Property List</span>
               </a>
            </li>
            
            <li class="aside-menu__item">
               <a class="aside-menu__link" href="{{ url('home/about-us') }}">
                  <span>About Us</span>
               </a>
            </li>
            <li class="aside-menu__item">
               <a class="aside-menu__link" href="mailto:support@celebritymeetups.com">
                  <span>Contact Us</span>
               </a>
            </li>
            <li class="aside-menu__item">
               @auth
               <a class="aside-menu__link" href="{{ url('home/user-add-property') }}">
                  <span>Add Property</span>
               </a>
                <a class="aside-menu__link" href="{{ url('home/user-setting') }}">
                  <span>Setting</span>
               </a>
                  @else
                  <a class="aside-menu__link" href="{{ route('login') }}">
                     <span>SignUp/SignIn</span>
                  </a>
               @endauth
                
             </li>
             <li class="aside-menu__item">
               <form method="POST" action="{{ route('logout') }}" class="w-full">
                  @csrf
                  <button type="submit" class="btn btn-link text-start w-100" style="padding: 10px 20px; display: flex; align-items: center; color: #495057; text-decoration: none;">
                      <i class="bi bi-box-arrow-right me-2" style="font-size: 1.2rem;"></i> Log Out
                  </button>
              </form>
            </li>
         </ul>
         
      </div>
      <div class="aside-dropdown__item">
         <!-- aside menu start-->

         <!-- aside menu end-->
         
         <div class="aside-inner"><span class="aside-inner__title">Email</span>
         	<!--
            <a class="aside-inner__link" href="cdn-cgi/l/email-protection.html#0a63646c654a68656561797e6b787964657d24696567">
               <span class="__cf_email__" data-cfemail="c6afa8a0a986a4a9a9adb5b2a7b4b5a8a9b1e8a5a9ab">[email&#160;protected]</span>            </a>
           -->
               <p>  info@bookcelebxcluisives.com</p>
         </div>
         <div class="aside-inner"><span class="aside-inner__title">Phone numbers</span>
            <a class="aside-inner__link" href="tel:">
                           </a>
            <a class="aside-inner__link" href="tel:">
                           </a>
         </div>
         <!-- <ul class="aside-socials">
            <li class="aside-socials__item">
               <a class="aside-socials__link" href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i></a>
            </li>
            <li class="aside-socials__item">
               <a class="aside-socials__link" href="#">
                  <i class="fa fa-google-plus" aria-hidden="true"></i>
               </a>
            </li>
            <li class="aside-socials__item">
               <a class="aside-socials__link aside-socials__link--active" href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
               </a>
            </li>
            <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
         </ul> -->
      </div>
      <div class="aside-dropdown__item">
         <a class="button button--squared" href="{{ url('home/property-list') }}"><span>Book Now</span></a>
      </div>
   </div>
</div>
<!-- aside dropdown end-->		<!-- header start-->
<header class="header header--front">
   <div class="container-fluid">
      <div class="row no-gutters justify-content-between">
         <div class="col-auto d-flex align-items-center">
            <div class="dropdown-trigger d-none d-sm-block">
               <div class="dropdown-trigger__item"></div>
            </div>
            <div class="header-logo"><a class="header-logo__link" href="{{ url('/') }}"><img class="header-logo__img logo--light" src="{{ asset('assets/img/logo.png') }}" alt="logo" /><img class="header-logo__img logo--dark" src="{{ asset('assets/img/logo.png') }}" alt="logo" /></a></div>
         </div>
         <div class="col-auto">
            <!-- main menu start-->
            <nav>
               <ul class="main-menu">
                  <li class="main-menu__item main-menu__item--active">
                     <a class="main-menu__link" href="{{ url('/') }}">
                        <span>Home</span>
                     </a>
                  </li>

                  <!-- <li class="main-menu__item">
                     <a class="main-menu__link" href="find-celebrity">
                        <span>Find Celebrity</span>
                     </a>
                  </li> -->
                  <li class="main-menu__item">
                     <a class="main-menu__link" href="{{ url('home/property-list') }}">
                        <span>Property List</span>
                     </a>
                  </li>
                  
                  <li class="main-menu__item">
                     <a class="main-menu__link" href="{{ url('home/about-us') }}">
                        <span>About Us</span>
                     </a>
                  </li>
                  <li class="main-menu__item">
                    <a class="main-menu__link" href="mailto:support@celebritymeetups.com">
                       <span>Contact us</span>
                    </a>
                 </li>
                
                 <li class="main-menu__item">
                  @auth
                  <a class="main-menu__link" href="{{ url('home/user-add-property') }}">
                     <span>Add Property</span>
                  </a>
                  
                  @else
                  <a class="main-menu__link" href="{{ route('login') }}">
                     <span>SignUp/SignIn</span>
                  </a>
                 @endauth
                  
                    
                 </li>
                 @auth
                 <li class="main-menu__item">
                    <a class="main-menu__link" href="{{ url('home/user-setting') }}">
                       <span>Setting</span>
                    </a>
                 </li>
                    
                 @endauth
                 @auth
                 <li class="main-menu__item">
                  <form method="POST" action="{{ route('logout') }}" class="w-full">
                     @csrf
                     <button type="submit" class="btn btn-link text-start w-100" style="padding: 10px 20px; display: flex; align-items: center; color: #495057; text-decoration: none;">
                         <i class="bi bi-box-arrow-right me-2" style="font-size: 1.2rem;"></i> Log Out
                     </button>
                 </form>
               </li>
                    
                 @endauth
                 
               </ul>
            </nav>
            <!-- main menu end-->
         </div>
         <div class="col-auto d-flex align-items-center">
            <!-- lang select end-->
            <div class="dropdown-trigger d-block d-sm-none">
               <div class="dropdown-trigger__item"></div>
            </div><a class="button button--squared" href="{{ url('home/property-list') }}"><span>Book Now</span></a>
         </div>
      </div>
   </div>
</header>

@yield('content')


<!-- footer start-->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-lg-3">
				<div class="footer-logo"><a class="footer-logo__link" href="{{ url('/') }}"><img class="footer-logo__img" src="{{ asset('assets/img/logo.png') }}" alt="logo" /></a></div>
				<!-- footer socials start-->
				<ul class="footer-socials">
					<li class="footer-socials__item">
						<p>
							We work with each client closely to ensure we secure the ideal Property or influencer at the lowest possible price.
						</p>
					</li>

				</ul>
				<!-- footer socials end-->
			</div>
			<div class="col-sm-6 col-lg-3">
				<h4 class="footer__title">Contacts</h4>
				<div class="footer-contacts">
					<p class="footer-contacts__address">
						123B Hughs Estate, Morna, Avril, United States					</p>
					<p class="footer-contacts__phone">Phone:
						<a href="tel:"></a>
					</p>

					
					<p class="footer-contacts__mail">Email:
						support@celebritymeetups.com
					</p>
						<!--
						<a href="cdn-cgi/l/email-protection.html#6c05020a032c0e0303071f180d1e1f02031b420f0301"><span class="__cf_email__" data-cfemail="2a43444c456a48454541595e4b585944455d04494547">[email&#160;protected]</span></a>
					</p>
				-->
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<h4 class="footer__title">Menu & Links</h4>
				<!-- footer nav start-->
				<nav>
					<ul class="footer-menu">
						<li class="footer-menu__item footer-menu__item--active">
							<a class="footer-menu__link" href="{{ url('/') }}">Home</a>
						</li>
						<li class="footer-menu__item">
							<a class="footer-menu__link" href="{{ url('home/about-us') }}">About</a>
						</li>
						<li class="footer-menu__item">
							<a class="footer-menu__link" href="mailto:support@celebritymeetups.com">Contacts</a>
						</li>
						{{-- <li class="footer-menu__item">
							<a class="footer-menu__link" href="find-celebrity/index.html">Pages</a>
						</li> --}}
					</ul>
				</nav>
				<!-- footer nav end-->
			</div>
			<div class="col-sm-6 col-lg-3">
				<h4 class="footer__title"></h4>
				<p>
					Our mission is to provide a best-in-class talent booking
					experience from start to finish.
				</p>
				<a class="button footer__button button--filled" href="{{ url('home/property-list') }}">Make A Booking</a>
			</div>
		</div>
		<div class="row align-items-baseline">
			<div class="col-md-6">
				<p class="footer-copyright">©  Book Property Worldwide</p>
			</div>
			<div class="col-md-6">
				<div class="footer-privacy"><a class="footer-privacy__link" href="#">Privacy Policy</a><span class="footer-privacy__divider">|</span><a class="footer-privacy__link" href="#">Term and Condision</a></div>
			</div>
		</div>
	</div>
</footer>
<!-- footer end-->
</div>
<!-- libs-->
<script data-cfasync="false" src="assets/js/email-decode.min.js"></script><script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/libs.min.js') }}"></script>

<!-- scripts-->

<script src="{{ asset('assets/js/common.min.js') }}"></script>
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
/>



</body>
@livewireScripts


<!-- Mirrored from bookcelebxclusives.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Apr 2024 11:48:08 GMT -->
</html>