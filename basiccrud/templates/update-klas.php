
<?php
include "../head.php";
include "../scripts/connectdb.php";
$code=$_POST['code'];
$vestiging=$_POST['vestiging'];
$sectie=$_POST['sectie'];
$cohort=$_POST['cohort'];

$id = $_POST['id'];

$sql = "UPDATE klas SET code = :code, vestiging = :vestiging, sectie = :sectie, cohort = :cohort WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->execute([':code' => $code, ':vestiging' => $vestiging, ':sectie' => $sectie, ':cohort' => $cohort, ':id' => $id]);
header("Location:../klas.php");

?>