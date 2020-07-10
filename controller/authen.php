<?php
session_start();
include "../config.inc.php";
include "../connect.inc.php";
$return = array();

if(!isset($_GET['stage'])){
  mysqli_close($conn);
  die();
}

$stage = mysqli_real_escape_string($conn, $_GET['stage']);

if($stage == 'login'){
  if(
      (!isset($_POST['username'])) ||
      (!isset($_POST['password']))
    ){
    mysqli_close($conn);
    die();
  }

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $password = base64_encode($password);

  $strSQL = "SELECT * FROM d04s_account a
             WHERE
             a.username = '$username'
             AND a.password = '$password'
             AND a.delete_status = 'N'
             AND a.allow_status = 'Y'";
  $resultCm = mysqli_query($conn, $strSQL);
  if(($resultCm) && (mysqli_num_rows($resultCm) > 0)){
    $data = mysqli_fetch_assoc($resultCm);
    $return['status'] = "Success";
    $return['uid'] = $data['uid'];
    $return['role'] = $data['role'];
    $_SESSION['id'] = session_id();
  }
  echo json_encode($return);
  mysqli_close($conn);
  die();
}

if($stage == 'register'){
  if(
      (!isset($_POST['name'])) ||
      (!isset($_POST['username'])) ||
      (!isset($_POST['password']))
    ){
    mysqli_close($conn);
    die();
  }

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $password = base64_encode($password);

  // Check CHAIRMAN
  $strSQL = "SELECT * FROM d04s_account a
             WHERE
             a.username = '$username'
             AND a.delete_status = 'N'
             AND a.allow_status = 'Y'";
  $resultCm = mysqli_query($conn, $strSQL);
  if(($resultCm) && (mysqli_num_rows($resultCm) > 0)){
    $return['status'] = "Duplicate";
    echo json_encode($return);
    mysqli_close($conn);
    die();
  }

  $uid = base64_encode($sysdateu.$username);
  $strSQL = "INSERT INTO d04s_account (uid, username, password, fullname, regdate) VALUES ('$uid', '$username', '$password', '$name', '$sysdatetime')";
  $resultInsert = mysqli_query($conn, $strSQL);
  if($resultInsert){
    $return['status'] = "Success";
    $return['uid'] = $uid;
    $_SESSION['id'] = session_id();
  }else{
    $return['status'] = "Fail ".$strSQL;
  }

  echo json_encode($return);
  mysqli_close($conn);
  die();
} // End register

?>
