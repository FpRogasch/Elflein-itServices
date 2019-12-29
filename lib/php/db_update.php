<?php
include 'dbconnect.php';
$connect = OpenConnection();

if (isset($_POST['edit_btn'])) {
  $id = $_POST['edit_id'];

  $query = "SELECT * FROM inv_it_test WHERE ProductID='$id' ";
  $query_run = mysqli_query($connect, $query);
}
?>
