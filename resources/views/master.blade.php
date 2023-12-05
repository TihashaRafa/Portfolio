<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Name of your web site">
<meta name="author" content="Marketify">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Tihasha</title>

<!-- STYLES -->
<link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kristi&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/modalbox.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css')}}" />

</head>

<body> 
	
	<!-- PRELOADER -->
	<div id="preloader">
		<div class="loader_line"></div>
	</div>
	<!-- /PRELOADER -->
	
	<!-- WRAPPER ALL -->
	<div class="elisc_tm_all_wrap w-full h-auto clear-both float-left relative" data-magic-cursor="show" data-enter="fadeInLeft" data-exit=""> 

		<div class="dodo_tm_one_page_wrapper">
			
			<!-- MOBILE MENU -->
			@include('frontend.Layout.manu')
			@include('frontend.Layout.footer')
		
			@yield('content')
			<!-- /MOBILE MENU -->
					
			<!-- SIDEBAR -->
			@include('frontend.Layout.sidebar')
			<!-- /SIDEBAR -->
			
			<!-- MAINPART -->
			<div class="elisc_tm_mainpart w-full min-h-[100vh] clear-both float-left pl-[370px]">
				<div class="mainpart_inner w-full min-h-[100vh] clear-both float-left relative">
				
					<!-- HOME -->
					@include('frontend.pages.home')
					<!-- /HOME -->

					<!-- ABOUT -->		
					@include('frontend.pages.aboutme')
					<!-- /ABOUT -->
					
					<!-- Projects -->
					@include('frontend.pages.projects')
					<!-- /Projects -->
					
					<!-- PORTFOLIO -->
					@include('frontend.pages.portfolio')
					<!-- /PORTFOLIO -->

					<!-- CONTACT -->
					@include('frontend.pages.contact')
					<!-- /CONTACT -->
					
				</div>
			</div>
			<!-- /MAINPART -->
         
		</div>

		<!-- CURSOR -->
		<div class="mouse-cursor cursor-outer"></div>
		<div class="mouse-cursor cursor-inner"></div>
		<!-- /CURSOR -->
		
	</div>
	<!-- / WRAPPER ALL -->
	
<!-- SCRIPTS -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->	
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/init.js') }}"></script>
<!-- /SCRIPTS -->

</body>
</html>