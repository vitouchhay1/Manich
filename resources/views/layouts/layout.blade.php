<!doctype html>
<html lang="en-US">
	
<!-- Mirrored from tk-themes.net/html-emigo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Mar 2018 11:54:42 GMT -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<title>Emigo &#8211; Home 2 | HTML Ecommerce Template</title>
		
		<link rel='stylesheet' href='{{asset("/")}}css/bootstrap.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset("/")}}css/settings.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset("/")}}css/commerce.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset("/")}}css/prettyPhoto.css' type='text/css' media='all' />
		<link rel='stylesheet' href='{{asset("/")}}css/owl.carousel.css' type='text/css' media='all' />
		<link rel='stylesheet' href='{{asset("/")}}css/owl.theme.css' type='text/css' media='all' />
		<link rel='stylesheet' href='{{asset("/")}}css/font-awesome.min.css' type='text/css' media='all' />
		<link rel='stylesheet' href='{{asset("/")}}css/simple-line-icons.css' type='text/css' media='all'/>
		<link href='http://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link href="http://fonts.googleapis.com/css?family=Montserrat:700,400" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Roboto:700,500" rel="stylesheet" property="stylesheet" type="text/css" media="all"/>
		<link href="http://fonts.googleapis.com/css?family=Raleway:400" rel="stylesheet" property="stylesheet" type="text/css" media="all"/>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet" property="stylesheet" type="text/css" media="all"/>
		<link rel='stylesheet' href='{{asset("/")}}css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset("/")}}css/custom.css' type='text/css' media='all'/>
		<link rel="stylesheet" href='{{asset("/")}}css/magnific-popup.css' type='text/css' media='all' />
		<link rel="stylesheet" href='{{asset("/")}}css/preloader.css' type='text/css' media='all' />
		<link rel="stylesheet" href='{{asset("/")}}css/style-selector.css' type='text/css' media='all' />
		<link id="style-main-color" rel="stylesheet" href="css/colors/default.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<body>
		<div id="loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="loader">Loading...</div>
				</div>
			</div> 
		</div>
		<div class="site">
			<header class="noo-header fixed_scroll header_services">
				<div class="navbar-wrapper">
					<div class="noo-topbar">
						@yield('top-nav')
					</div>
					<div class="navbar navbar-default">
						<div class="container">
							@yield('logo-search-cart')
							<nav class="noo-main-menu">
								@yield('menu')
							</nav>
						</div> 
					</div> 
				</div> 
				<div class="search-header5">
					<div class="remove-form"></div>
					<div class="container">
						<form class="form-horizontal noo-emigo-searchform">
							<label class="note-search">Type and Press Enter to Search</label>
							<input type="search" name="s" class="form-control" value="" placeholder="Enter keyword to search..." />
							<input type="submit" class="hidden" value="Search"/>
						</form>
					</div>
				</div>
			</header>
			<div class="content-area">
				@yield('login') 
				
				@yield('slider')
				
				@yield('content-women')
				
				@yield('purchase')
				
				@yield('content-man')
				
				@yield('content-man-women')
				
				@yield('brand')
				
				@yield('latest')
				
				@yield('quote') 
				
				@yield('contact')
			</div>  
			<footer class="wrap-footer"> 
				@yield('footer')
			</footer>

		</div>

		<a href="#" class="go-to-top hidden-print"><i class="fa fa-angle-up"></i></a>

		<script type='text/javascript' src='{{asset("/")}}js/jquery.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/bootstrap.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/jquery.themepunch.tools.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/jquery.themepunch.revolution.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/modernizr-2.7.1.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/jquery.prettyPhoto.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/jquery.prettyPhoto.init.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/off-cavnass.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/owl.carousel.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/jquery.parallax-1.1.3.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/jquery.plugin.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/jquery.countdown.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/script.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/custom.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/jquery.magnific-popup.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/jflickrfeed.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/jquery.cookie.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/style.selector.js'></script>

		<script type='text/javascript' src='{{asset("/")}}js/extensions/revolution.extension.video.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/extensions/revolution.extension.slideanims.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/extensions/revolution.extension.actions.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/extensions/revolution.extension.layeranimation.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/extensions/revolution.extension.kenburn.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/extensions/revolution.extension.navigation.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/extensions/revolution.extension.migration.min.js'></script>
		<script type='text/javascript' src='{{asset("/")}}js/extensions/revolution.extension.parallax.min.js'></script>
    </body>

<!-- Mirrored from tk-themes.net/html-emigo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Mar 2018 12:00:45 GMT -->
</html>