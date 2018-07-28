<?php
include 'commonhead.php';
require 'conn.php';
$selectSQL = 'SELECT * FROM `project_data`;
 
  if( !( $selectRes = mysqli_query($con, $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysqli_errno().': '.mysqli_error();
  }else{
    ?>
	<div class="container">
<table border='5' id="viewer">
  <thead>
    <tr>
	   <th>Project Name</th>
      <th>Team Leader</th>
      <th>Start Date</th>
      <th>Status</th>
    
    </tr>
  </thead>
  <tbody></center>
    <?php
	
      if( mysqli_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['project_name']}</td><td>{$row['team_leader']}</td><td>{$row['start_date']}</td><td>{$row['p_status']};
				
				}	
					
        }
      }
    ?>
  </tbody>
</table>
<br>
<br>
<br>
<br>
</div>
  
<style type="text/css">

th, td {
    border:1 px solid black;
	width:300px;
	
}
table{
	border:0px;
}
</style>

	