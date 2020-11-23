<?php
$yclid= filter_input(INPUT_GET, 'yclid');
if ($yclid != ''){
  $ords = "".$yclid.",testpb,".time()."";
  $fp=fopen('data.csv',"a+");
  fwrite($fp,$ords."\r\n");
  fclose($fp);
}
 ?>
