<?php

include 'conn.php';

extract($_GET);
$query = "DELETE FROM crudtable WHERE id='$id'";
mysqli_query($conn,$query);
header('Location:view.php');



?>