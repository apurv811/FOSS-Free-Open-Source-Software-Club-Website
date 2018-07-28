
<?php include 'commonhead.php';
if(isset($_SESSION['admin']))
{

?>											
												
												<div class="container">
												<div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Admin panel</h3>
                                                </div>
                                                <div class="panel-body">
                                                    Approve pending requests of members
													<br><a href="newapproveid.php" class="btn btn-primary">View requests</a>
                                                </div>
                                                 <div class="panel-body">
                                                    Add Project
                                                    <br><a href="addpro.php" class="btn btn-primary">Add Project</a>
                                                </div>



												<div class="panel-body">
                                                    Approve pending articles of members
													<br><a href="approveart1.php" class="btn btn-primary">View articles</a>
                                                </div>
												<div class="panel-body">
                                                    Add activities on site
													<br><a href="addact.php" class="btn btn-primary">Add activity</a>
                                                </div>
												<div class="panel-body">
                                                    Add team members 
													<br><a href="addteam.php" class="btn btn-primary">Add Team</a>
                                                </div>
												<div class="panel-body">
                                                    Add blog 
													<br><a href="blogadder.php" class="btn btn-primary">Add blog</a>
                                                </div>
                                            </div>
<?php }?>