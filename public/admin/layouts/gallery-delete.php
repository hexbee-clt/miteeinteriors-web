<?php 
include "./connection.php";

$id=$_GET['id'];


// sql to delete a record
$sql = "DELETE FROM gallery WHERE id=$id";

if ($con->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location:../../view-gallery.php');
} else {
  echo "Error deleting record: " . $con->error;
}


 ?>