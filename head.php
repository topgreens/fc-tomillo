<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Yana</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="img/icons/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
  <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.theme.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
  <link href="#" id="colour-scheme" rel="stylesheet">
</head>

<body class="page-index has-hero">
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  <div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">
    
    
    <!-- ======== @Region: #navigation ======== -->
    <div id="navigation" class="wrapper">
      <!--Hidden Header Region-->
      <div class="header-hidden collapse">
        <div class="header-hidden-inner container">
          <div class="row">
            <div class="col-md-3">
              <h3>
                  About Us
                </h3>
              <p>YANA is a super flexible responsive theme with a modest design touch.</p>
              <a href="about.php" class="btn btn-more"><i class="fa fa-plus"></i> Learn more</a>
            </div>
            <div class="col-md-3">
              <!--@todo: replace with company contact details-->
              <h3>
                Contact Us
              </h3>
              <address>
                  <strong>YANA</strong>
                  <abbr title="Address"><i class="fa fa-pushpin"></i></abbr>Sunshine House, Sunville. SUN12 8LU.<br>
                  <abbr title="Phone"><i class="fa fa-phone"></i></abbr>019223 8092344<br>
                  <abbr title="Email"><i class="fa fa-envelope-alt"></i></abbr>info@yanainc.com
              </address>
            </div>
            <div class="col-md-6">
              <!--Colour & Background Switch for demo - @todo: remove in production-->
              <h3>
                  Select Theme 
                </h3>
              <div class="switcher">
                <div class="cols">
                  Backgrounds:
                  <br>
                  <a href="#benches" class="background benches active" title="Benches">Benches</a> 
                  <a href="#boots" class="background boots" title="Boots">Boots</a> 
                  <a href="#buildings" class="background buildings" title="Buildings">Buildings</a>
                  <a href="#city" class="background city" title="City">City</a> 
                  <a href="#metro" class="background metro" title="Metro">Metro</a>
                </div>
                <div class="cols">
                  Colours:
                  <br>
                  <a href="#orange" class="colour orange active" title="Orange">Orange</a> 
                  <a href="#green" class="colour green" title="Green">Green</a> 
                  <a href="#blue" class="colour blue" title="Blue">Blue</a> 
                  <a href="#lavender" class="colour lavender" title="Lavender">Lavender</a>
                </div>
              </div>
              <p>
                <small>Selection is not persistent.</small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!--Header & navbar-branding region-->
      <div class="header">
        <div class="header-inner container">
          <div class="row">
            <div class="col-md-8">
              <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
              <a class="navbar-brand" href="index.php" title="Home">
                <h1 class="hidden">
                    <img src="img/logos.png" alt="yana Logo">
                    Yana
                  </h1>
              </a>
              <div class="navbar-slogan">
                You're not alone
                <br> By Yana
              </div>
            </div>
            <!--header rightside-->
            <div class="col-md-4">
              <!--user menu-->
              <ul class="list-inline user-menu pull-right">
                <li class="user-button"><a class="btn btn-primary btn-hh-trigger" role="button" data-toggle="collapse" data-target=".header-hidden">Open</a></li>
              </ul>
              <ul class="list-inline user-menu pull-right">
                <li class="user-register"><i class="fa fa-edit text-primary "></i> <a href="register.php" class="text-uppercase">Register</a></li>
                <li class="user-login"><i class="fa fa-sign-in text-primary"></i> <a href="login.php" class="text-uppercase">Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="navbar navbar-default">
          <!--mobile collapse menu button-->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <!--social media icons-->
          <div class="navbar-text social-media social-media-inline pull-right">
            <!--@todo: replace with company social media details-->
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
          </div>
          <!--everything within this div is collapsed on mobile-->
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="main-menu">
              <li class="icon-link">
                <a href="index.php"><i class="fa fa-home"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<b class="caret"></b></a>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu">
                  <li class="dropdown-header">Yana Foundacion Tomillo</li>
                  <li><a href="contact.php" tabindex="-1" class="menu-item">contact</a></li>
                  <li><a href="about.php" tabindex="-1" class="menu-item">About Us</a></li>
                  <li><a href="login.php" tabindex="-1" class="menu-item">Login</a></li>
                  <li><a href="register.php" tabindex="-1" class="menu-item">Sign-Up</a></li>
                  <li class="dropdown-footer">Dropdown footer</li>
                </ul>
              </li>
              <li><a href="showcase.php">Showcase</a></li>
              <li class="dropdown dropdown-mm">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mega Menu<b class="caret"></b></a>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu dropdown-menu-mm dropdown-menu-persist">
                  <li class="row">
                    <ul class="col-md-6">
                      <li class="dropdown-header">Websites and Apps</li>
                      <li><a href="#">Analysis and Planning</a></li>
                      <li><a href="#">User Experience / Information Architecture</a></li>
                      <li><a href="#">User Interface Design / UI Design</a></li>
                      <li><a href="#">Code &amp; Development / Implementation &amp; Support</a></li>
                    </ul>
                    <ul class="col-md-6">
                      <li class="dropdown-header">Enterprise solutions</li>
                      <li><a href="#">Business Analysis</a></li>
                      <li><a href="#">Custom UX Consulting</a></li>
                      <li><a href="#">Quality Assurance</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-footer">
                    <div class="row">
                      <div class="col-md-7">Like the lite version? <strong>Get the extended version of Flexor.</strong></div>
                      <div class="col-md-5">
                        <a href="#" class="btn btn-more btn-lg pull-right"><i class="fa fa-cloud-download"></i> Get It Now</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!--/.navbar-collapse -->
        </div>
      </div>
    </div>