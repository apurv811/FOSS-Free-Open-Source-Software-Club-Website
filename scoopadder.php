<?php
include 'commonhead.php';
?>
					<div id="content">
                        <div class="container">
                            <div class="container">
                                <div class="row margin-vert-30">
                                    <!-- Login Box -->
                                    <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                        <form class="login-page" action="scoopadder1.php" method="POST">
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
