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
#img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
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
<?php
//DISPLAY IMAGEs
   include('config.php');
   $result = mysql_query("SELECT * FROM product") 
    or die(mysql_error());
echo "<center><table border='1' cellpadding='5'></center>";
  echo "<center><tr> <th>Afbeelding</th> <th>Naam</th> <th>Prijs</th></center>";
  while($row = mysql_fetch_array( $result )) {
    echo "<tr>";
    echo "<div id='img_div'>";
    echo "<td><img src='images/".$row['Product_Afbeelding']."'></td>";
    echo '<td>' . $row['Naam'] . '</td>';
    echo '<td>&euro;' . $row['Prijs'] . '</td>';
    echo "</tr>"; 
    echo "</div>";
  } 
?>