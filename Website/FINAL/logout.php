<?php
session_start();

session_destroy();//sesion destroy eindigd de sessie en zorgt ervoor dat je uitlogt.
echo '<script language="javascript">';
echo 'alert("U bent nu uigelogd.")';
echo '</script>';
?>
<meta http-equiv="refresh" content="0; url=index.php" />