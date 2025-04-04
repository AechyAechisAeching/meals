<?php
// eerste de benodigde data ophalen uit de database
require "db/dbconnection.class.php";
$dbconnect = new dbconnection();
// Ik wil alle gegevens met id die in de URL staat oppaken met $_GET
$id = $_GET['id'];
$sql = "SELECT * FROM recipes WHERE id = $id";
$query = $dbconnect -> prepare($sql);
$query -> execute();
$result = $query -> fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r(value: $recset);
echo "</pre>";
?>