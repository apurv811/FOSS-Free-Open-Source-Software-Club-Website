<?php session_start();
?>
<head>

<!-- Title -->
        <title>Foss LDCE</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <!-- Google Fonts-->
      <link href="https://fonts.googleapis.com/css?family=Fjord:400,400italic,700,900,300" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Fjord:500,500italic,700,900,300" rel="stylesheet" type="text/css">
	
            <!-- JS -->
            <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75858295-1', 'auto');
  ga('send', 'pageview');

</script>
			<script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
			<style>
			body{
				font-family:Josefin Sans;
				font-size:20px;
			}
			</style>
</head>
<body>

<div id="body_bg">
           
            <div class="primary-container-group" class="col-md-12">
                
                    <div id="header" class="container">
                        <div class="row">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="" title="">
                                    <img src="assets/img/foss_logo.jpg" alt="Logo" />
                                </a>
                            </div>
                            <!-- End Logo -->
                            <ul class="social-icons pull-right hidden-xs">
                                <li class="social-rss">
                                    <a href="#" target="_blank" title="RSS"></a>
                                </li>
                                <li class="social-twitter">
                                    <a href="#" target="_blank" title="Twitter"></a>
                                </li>
                                <li class="social-facebook">
                                    <a href="#" target="_blank" title="Facebook"></a>
                                </li>
                                <li class="social-googleplus">
                                    <a href="#" target="_blank" title="GooglePlus"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Top Menu -->
                    <div id="hornav" class="container no-padding">
                        <div class="row">
                            <div class="col-md-12 no-padding">
                                <div class="pull-right visible-lg">
                                    <ul id="hornavmenu" class="nav navbar-nav">
                                        <li>
											<span class="fa-home"><a href='index'>Home</a></span>
                                        </li>
                                        <li>
                                            <span class="fa-gears"><a href='activities'>Activities</a></span>
										</li>
                                        <li>
                                            <span class="fa-building-o"><a href='proj.php'>Project</a></span>
										</li>
                                           
                                        
										<li>
											<span class="fa-foursquare" ><input type="button" style="background-color:transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;" data-toggle="modal" data-target="#myModal" value="Fosscoop"></button></span>
                                       
									   <li>
                                            <span class="fa-pencil"><a href='openforums'>Forums</a></span>
                                         </li>   
                                         <li>
                                            <span class="fa-pencil"><a href='blog1'>Blogs</a></span>
                                         </li>  
										<li>
											<?php 
										if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']==true){
											?>
											
											<span class="fa-angle-down">More</span>
                                            <ul>
                                                <li>
                                                    <a href="profile">Profile</a>
                                                </li>
                                                <li>
                                                    <a href="blog1">Blog</a>
                                                </li>
												<li>
                                                    <a href="logout">Logout</a>
                                                </li>
											
                                            </ul>
											<?php
										}
										else{
											?>
											<span class="fa-sign-in"><a href='indexee'>Member Login</a></span>
											<?php
										}
										?>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Fosscoop</h4>
      </div>
      <div class="modal-body">
        <p><?php include 'new125.php';?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>	