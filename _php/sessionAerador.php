<?php
if ($_POST['id']) {

  $IDAerador =  $_POST['id'];           // Pega os dados do formul├íriosession_start();
  session_start();
  $_SESSION["IDAerador"]=$IDAerador;

  echo json_encode($_SESSION["IDAerador"]);
}
else
{
    echo json_encode(-1);
}
?>
