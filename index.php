<?php
include 'commonhead.php';
?><!DOCTYPE html>
<html lang="en">
                    <!-- === BEGIN CONTENT === -->
                    <div id="content">
                        <div class="container no-padding">
                            <div class="row">
                                <!-- Carousel Slideshow -->
                                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                    <!-- Carousel Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example" data-slide-to="1"></li>
                                        <li data-target="#carousel-example" data-slide-to="2"></li>
                                    </ol>
                                    <div class="clearfix"></div>
                                    <!-- End Carousel Indicators -->
                                    <!-- Carousel Images -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="assets/img/slideshow/slide1.jpg">
                                        </div>
                                        <div class="item">
                                            <img src="assets/img/slideshow/slide2.jpg">
                                        </div>
                                        <div class="item">
                                            <img src="assets/img/slideshow/slide3.jpg">
                                        </div>
                                    </div>
                                    <!-- End Carousel Images -->
                                    <!-- Carousel Controls -->
                                    <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                    <!-- End Carousel Controls -->
                                </div>
                                <!-- End Carousel Slideshow -->
                            </div>
                        </div>
                        <div class="container background-gray-lighter">
                            <div class="row">
                                <h2 class="animate fadeIn text-center margin-top-50">Welcome to FOSS LDCE</h2>
                                <hr class="margin-top-15">
                                <p class="animate fadeIn text-center">Foss LDCE offers you the canvas to turn your imagination in to a realistic applications by
                                    <br>giving you the perfect platform to apply them into perfect direction.</p>
                                <p class="text-center animate fadeInUp margin-bottom-50">
                                    <a href="new1.php"<button type="button" class="btn btn-lg btn-primary">Register now</button></a>
                                </p>
                            </div>
                        </div>
						<div class="container">
							
                            <div class="row margin-vert-30">
                                <!-- Main Text --> 
                                <div class="col-md-9">
                                    <h2>About FOSS</h2>
                                    <p>What makes a university or institute powerful? The resources? We believe it is the
ideas, which stem from the people who study or teach in an institute. There is no doubt that
L. D. College of Engineering attracts the nation's best minds. . </p>
                                    <p>FOSS which is an acronym for Free and Open source programming is an initiative to enhance students through channelling their enthusiasm in more proper ways to encourage use of open source systems available and cope up with tremendously growing industry.
									Activities organised by the club can be broadly organised into Development (Web
Development, Open Source, Game/App Development) and programming contests. </p><p>Lecture
series are regularly taken on algorithms, web hijacking, game development and android app
development platforms. Club has different subparts like the “Algorithms Interests Group”
and “Developer’s Group”. Apart from activities for its members, club also develops various
applications to be used by the campus and college Fest.
<br>
<strong><h2>About Google codejam!</strong></h2><br> Attention coders!Google Code Jam is back!Google Code Jam is an international programming competition hosted and administered by Google. The competition began in 2003 as a means to identify top engineering talent for potential employment at Google but these days mostly attracts sport programmers.The competition consists of a set of algorithmic problems which must be solved in a fixed amount of time. Competitors may use any programming language and development environment to obtain their solutions, but top places usually require careful preparation of fast utility libraries for common tasks such as IO, data structures, and prepared solutions for typical classes of problems just as in other programming competitions. 
Click here to know more and register:<a href="https://code.google.com/codejam" style="color:red">Google code jam</a><br>
</p>
                                </div>
                                <!-- Side Column -->
                                <div class="col-md-3">
                                    <h2 class="title">Upcoming events</h2>

                                    <hr>
                                    <h3 style="margin: 0;">Seminar on google code jam</h3>
                                    <h4 style="margin: 0;">02/04/2016</h4>
                                    <p>
                                        <small>10:00 am - 12:00 pm</small>
                                    </p>
                                    <hr>
                                    <h3 style="margin: 0;">Python Workshop</h3>
                                    <h4 style="margin: 0;">02/04/2016</h4>
                                    <p>
                                        <small>1:00 pm - 3:00 pm</small>
                                    </p>
                                    <hr>
                                </div>
                                <!-- End Side Column -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id="base">
                <div class="container padding-vert-30 margin-top-40">
                    <div class="row">
                        <!-- Sample Menu -->
                        <div class="col-md-3 margin-bottom-20">
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Sample Menu -->
                        <!-- Contact Details -->
						<p><center>
                        <div class="col-md-5 margin-bottom-20">
                            <h3 class="margin-bottom-10">Contact Details</h3>
                            <p>
                                <span class="fa-phone">Tel:</span>7405350854,7567360805,8980274484
                                <br>
								<a href="map.html"><span class="fa-map-marker">Location:LDCE Comp. Department Ahmedabad</span>
                                </a>
                                <br>
                                
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:fossldce@gmail.com">fossldce@gmail.com</a>
                                <br>
                                <span class="fa-link">Website:</span>
                                <a href="http://www.fossldce.org">www.fossldce.org</a>
								<br>
								
								<a href="team.php"><span class="fa-users">Development team</span>
								</a>
								</a>
                            </p>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
 <div class="modal-content">     
	 <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><strong>Fosscoop</strong></h4>
      </div>
      <div class="modal-body">
        <p><?php 
				require 'conn.php';
$row=mysqli_fetch_assoc(mysqli_query($con,"select `scoop` from `fosscoop` where `id`=(select max(`id`) from `fosscoop`)"));
$k=$row['scoop'];
echo $k;
?>
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>   
</div>
</div>	
                        </div></center></p>
                        <!-- End Contact Details -->
                      
      
            <!-- End Footer Menu -->
            <!-- JS -->
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
    </body>
</html>