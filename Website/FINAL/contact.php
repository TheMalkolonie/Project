<?php
session_start();
if(!isset($_SESSION['login2'])){
  include 'NaviNoScroll.php';
}
Else{
  include 'NaviNoScrollKlant.php';
} ?>
<html>
<center> 
<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Voornaam</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="voornaam" placeholder="Voornaam" class="form-control"  type="text" required/>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Achternaam</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="achternaam" placeholder="Achternaam" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Adres" class="form-control"  type="text" required/>
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Telefoonnummer</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="telefoonnummer" placeholder="06 12345678" class="form-control" type="text" min="0" max="9999999999">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Adres</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="adres" placeholder="Adres" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">Stad</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="stad" placeholder="Stad" class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- Postcode -->



<div class="form-group">
  <label class="col-md-4 control-label">Postcode</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="postcode" placeholder="1234AB" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Vraag</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="comment" placeholder="zet hier uw vraag neer" required/></textarea> <!-- Hier kan de vraag te komen staan -->
  </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Verstuur <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div></center>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
 </center>   
</html>
<?php include 'Footer2.php'; ?>