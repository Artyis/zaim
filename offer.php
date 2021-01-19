<?php
$id =filter_input(INPUT_GET,id);
include 'connectdb.php';

$sql = "SELECT * FROM `loans` WHERE  `id`=:id LIMIT 1";
$query = $pdo->prepare($sql);
$query->execute(['id'=>filter_input(INPUT_GET,'id')]);
$all = $query->fetch(PDO::FETCH_OBJ);
$cpa=$all->cpalink;
header('Location: https://'.$cpa.'');
exit;
 ?>
