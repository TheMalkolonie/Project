<?php 
include('config.php');
$result = mysql_query("SELECT * FROM administrator") 
    or die(mysql_error());  
  while($row = mysql_fetch_array( $result )) {
echo $row['id'];
  }
  	?>