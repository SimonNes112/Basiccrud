<?php

include "../scripts/connectdb.php";
$id = $_GET['id'];

$sql = "DELETE FROM student WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->execute(['id'=> $id]);

?>
