<?php

if ($_COOKIE ['login'] !=''){
  $id = filter_input(INPUT_GET,'id');

  if ($id =='')
  echo 'какая-то ошибка';

  include 'connectdb.php';

  //Авторизация
  $sql = "DELETE FROM `loans` WHERE  `id`=$id";
  $query = $pdo->prepare($sql);
  $query -> execute([$id]);
  header('Location: http://localhost:8000/admin.php');
  exit;
}
else {
  header('Location: http://localhost:8000/singin.php');
}
 ?>
