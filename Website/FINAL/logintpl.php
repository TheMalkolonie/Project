<?php 
session_start(); // deze login page is alleen voor administrators.
if(!isset($_SESSION['login']) AND !isset($_SESSION['login2'])){
   include 'NaviNoScroll.php';
}
Else{
   include 'NaviNoScrollKlant.php';
} ?>
<!-- BEGIN OF CONTENT PART -->
<div class="container">
   <form class="form-signin" method="POST" action="">
      <h1>Administrator Login</h1>
      <?php include('clockwhite.php'); ?>
<br />
      <input type="text" autocomplete="off" class="input-block-level" placeholder="Gebruikersnaam" name="username" />
      <input type="password" class="input-block-level" placeholder="Wachtwoord" name="password" />
            <?php if(!empty($error)) { ?>
      	<div>
      		<p style="color: red;"><?php echo  $error ?></p>
      	</div>
      <?php } ?>
      <input class="btn btn-large btn-primary" type="button" value="Ga terug" onclick="location.href = 'http://localhost/pizzaenco/index.php';" />
      <input class="btn btn-large btn-primary" type="submit" name="login" value="Log In" />
   </form>
</div>
<!-- END OF CONTENT PART -->
