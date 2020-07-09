<?php
include "../config.inc.php";
include "../connect.inc.php";

if(!isset($_GET['stage'])){
  mysqli_close($conn);
  die();
}

$stage = mysqli_real_escape_string($conn, $_GET['stage']);

if($stage == 'test'){
  $strSQL = "SELECT * FROM d04s_account WHERE 1 LIMIT 1";
  $result = mysqli_query($conn, $strSQL);
  if($result){
    echo "true";
  }else{
    echo "false";
  }

  mysqli_close($conn);
  die();
}

?>
