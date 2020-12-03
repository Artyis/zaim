<?php

$id = $_POST['id'];
$mfo = trim(filter_var($_POST['mfo']),FILTER_SANITIZE_STRING);
$cpalink = trim(filter_var($_POST['cpalink']), FILTER_SANITIZE_URL);
$loantime = filter_var(trim($_POST['loantime']),FILTER_SANITIZE_NUMBER_INT);
$procent = filter_var(trim($_POST['procent']),FILTER_SANITIZE_NUMBER_INT);
$sumfrom = filter_var(trim($_POST['sumfrom']),FILTER_SANITIZE_NUMBER_INT);
$sumto = filter_var(trim($_POST['sumto']),FILTER_SANITIZE_NUMBER_INT);
$age = filter_var(trim($_POST['age']),FILTER_SANITIZE_NUMBER_INT);
$chbx = filter_var($_POST['checkbox']);
$txt = trim(filter_var($_POST['txt']),FILTER_SANITIZE_STRING);

include 'connectdb.php';

if ($_POST['file'] != 'undefined'){

  $imgtype = $_FILES['file']['type'] == 'image/gif' || $_FILES['file']['type'] == 'image/jpeg' || $_FILES['file']['type'] == 'image/png';
  $imgsize = $_FILES['file']['size'];

  $apend= $_FILES['file']['name'];
  $filetmp = $_FILES['file']['tmp_name'];
  if (move_uploaded_file($filetmp, '../img/'.$apend){

global $id;
  $sql = "UPDATE `loans` SET  `mfo`=?, `cpalink`=?, `loantime`=?, `procent`=?, `sumfrom`=?, `sumto`=?, `age`=?, `checkbox`=?, `img`=?, `txt`=? WHERE `id`=$id";
  $query = $pdo->prepare($sql);
  $res=$query -> execute([$mfo ,$cpalink, $loantime, $procent, $sumfrom, $sumto, $age, $chbx, $apend, $txt]);
echo 'ок';

}
else{
global $id;
  $sql = "UPDATE `loans` SET  `mfo`=?, `cpalink`=?, `loantime`=?, `procent`=?, `sumfrom`=?, `sumto`=?, `age`=?, `checkbox`=?, `txt`=? WHERE `id`=$id";
  $query = $pdo->prepare($sql);
  $res=$query-> execute([$mfo ,$cpalink, $loantime, $procent, $sumfrom, $sumto, $age, $chbx, $txt]);
echo 'ок';

};


 ?>
