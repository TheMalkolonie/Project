 <?php
include('config.php');

  $sql = "SELECT * FROM klant ORDER BY ID DESC";
  $query = mysql_query($sql) or die(mysql_error());
  
  if (isset($_GET['id'])) {

    $id = mysql_real_escape_string($_GET['id']);
    $sql_delete = "DELETE FROM klant WHERE ID = {$id}";

    mysql_query($sql_delete) or die (mysql_error());
   
    header("location: cklanten.php");
    exit();
  }  

?>