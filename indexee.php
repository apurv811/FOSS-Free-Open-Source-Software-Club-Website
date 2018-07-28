<?php

include 'commonhead.php';
?>
<html lang="en">
    <!--<![endif]-->
   
					<div id="content">
                        <div class="container">
                            <div class="container">
                                <div class="row margin-vert-30">
                                    <!-- Login Box -->
                                    <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                        <form class="login-page" action="checker.php" method="POST">
                                            <div class="login-header margin-bottom-30">
                                                <h2>Login to your account</h2>
                                            </div>
                                            <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                <input placeholder="Username" class="form-control" name="username" type="text">
                                            </div>
                                            <div class="input-group margin-bottom-20">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                                <input placeholder="Password" class="form-control"  name="password" type="password">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="checkbox">
                                                        <input type="checkbox">Stay signed in</label>
                                                </div>
                                                <div class="col-md-6">
                                                  <input type="submit"  value="Login" class="btn btn-primary pull-right">
                                                </div>
                                            </div>
                                            <hr>
                                            <h4>New user ?</h4>
                                            <p>
                                                <a href="new1.php">Click here</a>to register.</p>
                                        </form>
                                    </div>
                                    <!-- End Login Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			</body>
			</html>
        