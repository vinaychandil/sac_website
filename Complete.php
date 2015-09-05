<html lang="en">
<head>
	<link type="text/css" rel="stylesheet" href="navbar.css"  />
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  />
	<link type="text/css" rel="stylesheet" href="css/box.css"  />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="css\js-image-slider.css">
  <script src="//maps.googleapis.com/maps/api/js"></script>
 <link rel="stylesheet" type="text/css" href="contact.css">
       <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="modernizr.js"></script> <!-- does the cover flip-->
       
<style>
#head1 {
color:#727a7e;
display:inline;
margin-left:20px;
}
.header_inner {
height:100px;
padding:10px;
float:left;
width:100%;
}

,nav- ul li a{
	text-decoration:none;
}
body{
	background-image:url('1.png');
	
}
</style>
</head>
<body>
<div id="big_wrapper">
	<header id="header">
	<div class="header_inner">
			<a><img src="http://placehold.it/75x75" height="75" width="75"> </a>
			<h1 id="head1"> Students' Alumni Cell </h1>	
	</div>	
</header>
	<div id="wrapper">
		<div class="place position">
		<nav class="width12 blue-grey darken-4 pos">
		  <div class="nav-wrapper">
				 <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
				<ul class="left hide-on-med-and-down">
					<li><a class="waves-effect waves-light red widthb">Home</a></li>
					<li><a class="waves-effect waves-light dropdown-button widthb" href="#" data-activates="event_dropdown">Events<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
					<li><a class="waves-effect waves-light widthb">Mentorship Programme</a></li>
					<li><a class="waves-effect waves-light dropdown-button widthb" href="#" data-activates="publications_dropdown">Publications<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
					<li><a class="waves-effect waves-light widthb">My Imprint Programme</a></li>
					<li><a class="waves-effect waves-light widthb">Blog</a></li>
					<li><a href="contact.php" class="waves-effect waves-light widthb">Contact Us</a></li>
				</ul>
				<ul class="side-nav" id="mobile-nav">
					<li><a class="waves-effect waves-light red">Home</a></li>
					<li><a class="waves-effect waves-light dropdown-button" href="#" data-activates="event_dropdown1">Events<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
					<li><a class="waves-effect waves-light ">Mentorship Programme</a></li>
					<li><a class="waves-effect waves-light dropdown-button" href="#" data-activates="publications_dropdown1">Publications<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
					<li><a class="waves-effect waves-light ">My Imprint Programme</a></li>
					<li><a class="waves-effect waves-light ">Blog</a></li>
					<li><a class="waves-effect waves-light ">Contact Us</a></li>
				</ul>
			</div>	
		</nav>	
		</div>
		<ul id="event_dropdown" class="dropdown-content " style="top:64px;">
			<li><a class="waves-effect waves-light" on>One</a></li>
			<li><a class="waves-effect waves-light" on>One</a></li>
			<li><a class="waves-effect waves-light" on>One</a></li>
			<li><a class="waves-effect waves-light" on>One</a></li>
		</ul>
		<ul id="publications_dropdown" class="dropdown-content " style="top:64px;">
			<li><a class="waves-effect waves-light" on>One</a></li>
			<li><a class="waves-effect waves-light" on>One</a></li>
			<li><a class="waves-effect waves-light" on>One</a></li>
			<li><a class="waves-effect waves-light" on>One</a></li>
		</ul>
		<ul id="event_dropdown1" class="dropdown-content ">
			<li><a class="waves-effect waves-light" on>One</a></li>
			<li><a class="waves-effect waves-light" on>One</a></li>
			<li><a class="waves-effect waves-light" on>One</a></li>
			<li><a class="waves-effect waves-light" on>One</a></li>
		</ul>
		<ul id="publications_dropdown1" class="dropdown-content ">
			<li><a class="waves-effect waves-light" on>One</a></li>
			<li><a class="waves-effect waves-light" on>One</a></li>
			<li><a class="waves-effect waves-light" on>One</a></li>
			<li><a class="waves-effect waves-light" on>One</a></li>
		</ul>
	
	   <div class="fixed-action-btn" style="bottom: 24px; right: 24px;">
    <a class="btn-floating btn-large red waves-effect waves-light">
      <i class="large material-icons">thumb_up</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
  
	<div id="sliderFrame">
        <div id="slider">
						<img src="http://placehold.it/1200x400  " alt="zero" />
            <img src="http://placehold.it/1200x400 " alt="first" />
            <img  src="http://placehold.it/1200x400 " alt="second" />
            <img src="http://placehold.it/1200x400 " alt="third" />
            <img src="http://placehold.it/1200x400 " alt="fourth" />
        </div>
    </div>
	<?php
	 include 'column3.php';
	 include 'column4.php';
	 include 'midbox.php';
	 include 'footer.php';
	?>

</div>
</div>	

<script src="js/materialize.js"></script>
<script src="navbar.js"></script>
<script src="js\js-image-slider.js"></script>
</body>
</html>
