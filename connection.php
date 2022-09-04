<?php 
include("database.php")
$statement = $connect -> prepare("SELECT *FROM customers");
$statement->execute();
$customer =$statement->get_result();




?>