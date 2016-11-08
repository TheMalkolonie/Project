<!DOCTYPE html>
<html>
<head>
<style>
body {margin:0;}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0px 0px 0px 0px;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;      
}
li {
    float: left;
}
li a {
    display: block;
    color: white;
    padding: 16px;
    text-decoration: none;
}
li a:hover:not(.active) {
    background-color: #111;
}
.active {
    background-color: #4CAF50;
}
.main {
    padding: 16px;
    margin-top: 30px;
    height: 1500px; /* Used in this example to enable scrolling */
}
</style>
</head>
<body>


<ul>
  <li><a href="index.php"><img src="images/Pizza & Co Logo.png" alt="Pizza & Co" style="width:85px;height:85px;border:0;"></a></li> 
  <li><a><font size="7" face="arial" color="">Pizza&Co</font></a></li>
  <li><a><font size="4" face="arial">&emsp;&emsp;&emsp;&emsp;&emsp;</font></a></li>
 
  <li><a href="index.php"><font size="7" face="arial">Home</font></a></li>
  <li><a href="Menukaart.php"><font size="7" face="arial">Pizza's</font></a></li>
  <li><a href="DessertPage.php"><font size="7" face="arial">Desserts</font></a></li>
  <li><a href="DrankenPage.php"><font size="7" face="arial">Dranken</font></a></li>
  <li><a href="SnacksPage.php"><font size="7" face="arial">Snacks</font></a></li>
  
    <li><a><font size="4" face="arial">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</font></a></li>
   <li><a href="klogin.php"><font size="4" face="arial">Inloggen</font></a></li>
   <li><a href="Winkelmandje.php"><img src="images/winkelmandjeplaatje.png" alt="Pizza & Co" style="width:30px;height:30px;border:0;"></a></li> 
</ul>


</body>
</html>