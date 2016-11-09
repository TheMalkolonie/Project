<?php
    $msg = "";
    if(isset($_POST['upload'])){
        $target = "images/".basename($_FILES['Product_Afbeelding']['name']);
        
        $db = mysqli_connect("localhost", "root", "", "projdata");

        $Product_Afbeelding = $_FILES['Product_Afbeelding']['name'];
        $Naam = $_POST['Naam'];

        $sql = "INSERT INTO product (Product_Afbeelding, Naam) VALUES ('$Product_Afbeelding', '$Naam')";
        mysqli_query($db, $sql);


        if(move_uploaded_file($_FILES['Product_Afbeelding']['tmp_name'], $target)){
            $msg = "Image Uploaded successfully";
         }else{
            $msg = "There was a problem uploading image";
         }
    }

?>

<!DOCTYPE html>
<html>
<head>
<style>
#content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid $cbcbcb;
}
#form{
    width: 50%;
    margin: 20px auto;
}
#form_div{
    margin-top: 5px;
}
#img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
}
#img_div:after{
    content: "";
    display: block;
    clear: both;
}
#img{
    float: left;
    margin: 5px;
    width: 85px;
    height: 85px;
}
</style>
</head>
<body>
    <div id="content">
<?php
//DISPLAY IMAGEs
   include('config.php');
   $result = mysql_query("SELECT * FROM product") 
    or die(mysql_error());

  while($row = mysql_fetch_array( $result )) {
    echo "<div id='img_div'>";
    echo "<img src='images/".$row['Product_Afbeelding']."'>";
    echo "<p>".$row['Naam']."</p>";
    echo '&euro;' . $row['Prijs'] . '<br/>';
    echo "</div>";
  } 
?>


   <form method="POST" action="test3.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <div>
     <input type="file" name="Product_Afbeelding">
 </div>
     <input type="text" name="Naam">
 </div>
 <div>
     <input type="submit" name="upload" value="upload image">
 </div>
</body>
</html>