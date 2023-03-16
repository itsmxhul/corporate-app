<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Work</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Work Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/fontawesome-all.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->

	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Niramit:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
	<!-- //google fonts -->

</head>
<body>

<!-- header -->
<header class="bg-white py-1">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light">
			<h1>
				<a class="navbar-brand" href="index"><i class="fab fa-python"></i> Work</a>
			</h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-lg-4 mr-auto">
				  <li class="nav-item active">
					<a class="nav-link" href="about">About Us <span class="sr-only">(current)</span></a>
				  </li>
				   <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Why Us?
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="features">Features</a>
					  <a class="dropdown-item" href="blogs">Company Stories</a>
					  <a class="dropdown-item" href="pricing">Pricing</a>
					</div>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="faq">faq's</a>
					  <a class="dropdown-item" href="security">Security</a>
					  <a class="dropdown-item" href="typography">Typography</a>
					</div>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="contact">Contact</a>
				  </li>
                  <li class="nav-item">
					<a class="nav-link" href="team">Team</a>
				  </li>
                  @guest
                  @else
                  <li class="nav-item">
					<a class="nav-link" href="create_blog">Uplod Blog</a>
				  </li>
                  @endguest
                  <li class="nav-item">
					<a class="nav-link" href="gallery">Gallery</a>
				  </li>
				</ul>
                @guest
				<div class="header-right">
					<a href="signin" class="signin mr-4"> Sign in <i class="fas fa-sign-in-alt"></i></a>
					<a href="register" class="contact">Get Started</a>
				</div>
                @else
                <div class="header-right">
					<a href="logout" class="signin mr-4"> logout <i class="fas fa-sign-in-alt"></i></a>
					<a href="register" class="contact">Get Started</a>
				</div>
                @endguest
			</div>
		</nav>
	</div>
</header>
<!-- //header -->
