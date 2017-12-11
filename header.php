<?php //session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from shapebootstrap.net/demo/html/corlate/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Jun 2017 08:42:34 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Home | DMK</title>
 
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head> 
<body class="homepage">
<header id="header">

<nav class="navbar navbar-inverse" role="banner">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index"><img src="images/logo.png" alt="logo"></a>
</div>
<div class="collapse navbar-collapse navbar-right">
<ul class="nav navbar-nav">
<li class="active"><a href="index">Home</a></li>
<?php if($_SESSION['userId']!="") {  ?> <li><a href="content">Content</a></li> <?php  } ?>
<li><a href="history">History</a></li>
<li><a href="blog">Latest News</a></li>
<li><a href="#">Meeting</a></li>
<li><a href="contact">Contact</a></li>
<li><a href="services">Employment</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if($_SESSION['userId']!="") {  echo $_SESSION['Name']; }else{  echo "Profile"; } ?> <i class="fa fa-angle-down"></i></a>
<ul class="dropdown-menu">
<li>
<?php if($_SESSION['userId']!="") { ?>
<a href="manage/action?type=Logout">Logout</a>
<?php }else{ ?>
<a href="Login">Login</a>
<?php } ?>
</li>

</ul>
</li>
</ul>
</div>
</div> 
</nav> 
</header> 
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
