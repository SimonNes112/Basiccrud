<?php
include "../scripts/connectdb.php";
$id = $_GET['id'];

$sql = "DELETE FROM klas WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->execute(['id'=> $id]);
//header('location: ../klas.php');
?>
