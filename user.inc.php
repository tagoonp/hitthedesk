<?php

$uid = false;
if(isset($_GET['uid'])){
  if($_GET['uid'] == ''){
    header('Location: ./login');
    die();
  }
  $uid = mysqli_real_escape_string($conn, $_GET['uid']);
}

$strSQL = "SELECT * FROM d04s_account a
           WHERE
           a.uid = '$uid'
           AND a.delete_status = 'N'
           AND a.allow_status = 'Y'";
$resultCm = mysqli_query($conn, $strSQL);
$userData = '';
if(($resultCm) && (mysqli_num_rows($resultCm) > 0)){
 $userData = mysqli_fetch_assoc($resultCm);
}else{
  mysqli_close($conn);
  header('Location: ./login');
  die();
}
?>
