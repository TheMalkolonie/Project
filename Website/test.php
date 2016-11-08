<style>
body {
  margin: 0;
  padding: 0;
}

.logo {
  float: left;
  width: 85px;
  height: 85px;
}
/* ~~ Top Navigation Bar ~~ */

#navigation-container {
  width: 1200px;
  margin: 0 auto;
  height: 70px;
}

.navigation-bar {
  background-color: #333;
  height: 100px;
  width: 100%;
}

.navigation-bar ul {
  list-style-type: none;
    margin: 0;
    padding: 0px 0px 0px 0px;
    overflow: hidden;
    background-color: #333;
}

.navigation-bar li {
float: left;
}

.navigation-bar li a {
  display: block;
    color: white;
    text-align: center;
    padding: 5px 16px;
    text-decoration: none;
    position: relative;
    top: 13px;
}

.navigation-bar li a:hover:not(.active) {
    background-color: #111;
}
.active {
    background-color: #4CAF50;
}
.icon{
	float: right;
}
#menu {
  float: left;
}
</style>
<body>
<title>Pizza&Co</title>

<div class="navigation-bar">
  <div id="navigation-container">

    <a href="index.php"><img class="logo" src="images/Pizza & Co Logo.png" alt="Pizza & Co"></a>
    <div class="icon">
   <a href="klogin.php"><img src="images/login.png"</a>
   <a href="Winkelmandje.php"><img src="images/cart.png" alt="Pizza & Co"></a>
</div>
<ul>
  <li><a href="index.php"><font size="7" face="arial">Home</font></a></li>
  <li><a href="Menukaart.php"><font size="7" face="arial">Pizza's</font></a></li>
  <li><a href="DessertPage.php"><font size="7" face="arial">Desserts</font></a></li>
  <li><a href="DrankenPage.php"><font size="7" face="arial">Dranken</font></a></li>
  <li><a href="SnacksPage.php"><font size="7" face="arial">Snacks</font></a></li>
</ul>
</div>


</body>
</html>