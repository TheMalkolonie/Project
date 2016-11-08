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
         <form class="form-signin" method="POST" action="prodbeh.php">
         	<h2><b>Product beheer</b></h2>
            <?php include('clockwhite.php'); ?>
            <br />
            <div>
            <input class="btn btn-large btn-primary" type="" value="Producten" onclick="location.href = 'http://localhost/pizzaenco/chkprod.php';" />
            </div>
            <br />
            <div>
            <input class="btn btn-large btn-primary" type="" value="Aanbiedingen" onclick="location.href = 'http://localhost/pizzaenco/error.php';" />
            </div>
            <br />
            <div>
            <input class="btn btn-large btn-primary" type="" value="Deals" onclick="location.href = 'http://localhost/pizzaenco/error.php';" />
            </div>
            <br />
            <br />
            <br />
            <div>
            <input class="btn btn-large btn-primary" type="button" value="Ga terug" onclick="location.href = 'http://localhost/pizzaenco/management.php';" />
            </div>
            <br />           
         </form>
      </div>
      <!-- END OF CONTENT PART -->