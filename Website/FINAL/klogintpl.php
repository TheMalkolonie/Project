<?php 
session_start();
if(!isset($_SESSION['login2'])){
   include 'NaviScroll.php';
}
Else{
   include 'NaviScrollKlant.php';
} ?>
<!-- BEGIN OF CONTENT PART -->
<div class="container">
   <form class="form-signin" method="POST" action="">
      <h1>Klanten Login</h1>
<?php include('clockwhite.php'); ?>
<br />
      <input type="text" autocomplete="off" class="input-block-level" placeholder="Gebruikersnaam" name="username" />
      <input type="password" class="input-block-level" placeholder="Wachtwoord" name="password" />
            <?php if(!empty($error)) { ?>
         <div>
            <p style="color: red;"><?php echo  $error ?></p>
         </div>
      <?php } ?>
         <p><a href="kregister2.php">Nog geen account? Registreer nu!</a></p>
      <input class="btn btn-large btn-primary" type="button" value="Ga terug" onclick="location.href = 'http://localhost/pizzaenco/';" />
      <input class="btn btn-large btn-primary" type="submit" name="login" value="Log In" />
   </form>
</div>
<!-- END OF CONTENT PART -->

<?php include 'Footer3.php';?>