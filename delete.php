<?php

include 'conn.php';

$id = $_GET['id'];

$q = "DELETE FROM `crudtable` WHERE id = $id";

mysqli_query($cone,$q);


header('location:display.php');



?>
