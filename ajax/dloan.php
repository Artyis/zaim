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
  header('Location: https://zaim-zaym.ru/admin.php');
  exit;
}
else {
  header('Location: https://zaim-zaym.ru/singin.php');
}
 ?>
