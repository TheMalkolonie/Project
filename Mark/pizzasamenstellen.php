<!DOCTYPE html>

<html>
<head>
<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0px 0px 0px 25%;
    overflow: hidden;
    background-color: #333;
    text-align: center;
    
   
}

body {
    background-image: url();
    background-color: #FFFFFF;
}

li {
    float: left;

}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #111;
}

li.dropdown {
    display: inline-block;
}



table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    border-spacing: 5px;

}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

img {
    float: left;
    margin: 0 0 10px 10px;
}
</style>
</head>
<body>



<ul>
 <a href="link van homepage">
  <img src="pizza-icon-26.png" alt="Pizza & Co" style="width:70px;height:70px;border:0;"></a>
  <li><a href="HomePage.php"><font size="6" face="arial">Home</font></a></li>
   <li class="dropdown">
    <a href="#" class="dropbtn"><font size="6" face="arial">Pizza's</font></a>
    <div class="dropdown-content">
      <a href="#menukaart"><font size="4" face="arial">Menukaart</font></a>
      <a href="ZelfPizzaMaken.php"><font size="4" face="arial">Zelf Samenstellen</font></a>
      <li><a href="#desserts"><font size="6" face="arial">Desserts</font></a></li>
      <li><a href="#drank"><font size="6" face="arial">Drank</font></a></li>
  
 
      
    </div>
  </li>
</ul>

<p align="center">
	
Uw eigen pizza samenstellen? Dat kan! <br />
Met onze pizza samensteller kan je nu zelf <br />
pizza maken, kies de ingredienten <br />
en klik op bestel. <br />
Het laastste wat U hoeft te doen is genieten <br />
wanneer u de pizza warm op eet! <br />

</p>



<!--Formulier om pizza samen te stellen:-->

<!--Bodems-->
<div align="center">
<form action="Bestel.php">
	
<?php

	include 'DataTest3.php';
	
?>	

<!--Sauzen-->

<?php

	include 'DataTest2.php';
	
?>
	
<!--Bestel + aantal-->	
	
	<br />
	<input type="number" value="1" name="Aantal">
	<input type="submit" value="Bestel!"/>
</div>

<br />
<center>
7,95 euro!
</center>


<!--Ingredienten-->

	<br />
	
<div align="center">

<?php

	include 'DataTest1.php';
	
?>

</div>
</Form>


<!-- De footer -->

</br></br></br></br></br></br></br></br></br></br>
<h6>
</body>

<div class="container">
    <div class="main">
        
    </div>
</div>
<div class="clear"></div>
    <div id="footer">
        <div class="container">
            <div class="footer_nav">
                <ul>
                    <li><a href="#home">Home</a></li>                                      
                    <li><a href="#pizza's">Pizza's</a></li>      <!-- Pizza knop moet nog een dropdown?? idk -->           
                    <li><a href="#desserts">Deserts</a></li>
                    <li><a href="#drank">Drank</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                </ul>
            </div>
           
                <a href="mailto:Voorbeeld@gmail.com">Voorbeeld@gmail.com</a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</body>

</h6>
<!-- Einde van footer -->
</style>
</head>
</html>

