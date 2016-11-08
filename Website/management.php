<!DOCTYPE html>
 <?php
session_start();
include 'NaviNoScroll.php';                   //Roept de navigatiebalk aan
include('templates/header2.inc.php');

if(!isset($_SESSION['login'])) {
  header('location: alogin.php');
  exit;
}
?>

<html>
<body>
</body>
</html>

      <div class="container">
         <form class="form-signin" method="POST" action="management.php">
         	<h2><b>Welkom Administrator <u><?php echo $_SESSION['Gebruikersnaam']; ?></u>!</b></h2>
            <?php include('clockwhite.php'); ?>
            <br />
            <div>
            <input class="btn btn-large btn-primary" type="" value="Administrators beheren" onclick="location.href = 'http://localhost/pizzaenco/cbeheerder.php';" />
            </div>
            <br />
            <div>
            <input class="btn btn-large btn-primary" type="" value="Klanten beheren" onclick="location.href = 'http://localhost/pizzaenco/cklanten.php';" />
            </div>
            <br />
            <div>
            <input class="btn btn-large btn-primary" type="" value="Product beheer" onclick="location.href = 'http://localhost/pizzaenco/prodbeh.php';" />
            </div>
            <br />
            <div>
            <input class="btn btn-large btn-primary" type="" value="Bestellingen" onclick="location.href = 'http://localhost/pizzaenco/error.php';" />
            </div>
            <br />
            <div>
            <input class="btn btn-large btn-primary" type="" value="Optie" onclick="location.href = 'http://localhost/pizzaenco/error.php';" />
            </div>
            <br />
            <div>
            <input class="btn btn-large btn-primary" type="" value="Optie" onclick="location.href = 'http://localhost/pizzaenco/error.php';" />
            </div>
            <br />
            <br />
            <br />
            <div>
            <input class="btn btn-large btn-primary" type="button" value="Uitloggen" onclick="location.href = 'http://localhost/pizzaenco/logout.php';" />
            </div>
            <br />           
         </form>
      </div>
      <!-- END OF CONTENT PART -->