<?php
if($_SESSION["id"] != session_id()){
  header('Location: ./login');
  mysqli_close($conn);
  die();
}
?>
