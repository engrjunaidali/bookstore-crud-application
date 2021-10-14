<?php
include "db.php";

$id = $_GET['id'];

$q = "DELETE FROM books WHERE id='$id'";

mysqli_query($con,$q);

header('location:index.php');

?>