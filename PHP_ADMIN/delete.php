<?php 
$id=$_GET['id'];
include "db_config.php";
$sql="DELETE FROM comments WHERE id='$id'";
$delete=$con->query($sql);
header("location:user.php");



 ?>