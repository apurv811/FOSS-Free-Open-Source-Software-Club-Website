<?php
require 'conn.php';
$run=mysqli_query($con,"SELECT * FROM `activity`");


include 'commonhead.php';
?>

					<div class="container">
					<?php
					if( mysqli_num_rows( $run )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $run ) )
				{
					
					echo "<div id='accordion' class='panel-group'>
                                        <div class='panel panel-default'>
                                            <div class='panel-heading'>
                                                <h4 class='panel-title'>
                                                    <a class='accordion-toggle' href='#collapse-". $row['index']."' data-parent='#accordion' data-toggle='collapse'>
                                                        ".$row['title']."</a></h4></div><div id='collapse-".$row['index']."' class='accordion-body collapse in'><div class='panel-body'>
                                                    <div class='row'>
                                                    
                                                        <div class='col-md-7'><h3 class='no-margin no-padding'>".$row['time']."</h3>".$row['description']."</div></div></div></div>";
					
					
					
					
				}	
					
        }
      
					
					
					
					?>
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
