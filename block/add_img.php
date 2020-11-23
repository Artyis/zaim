<?php
$uploaddir = 'img/';
$tmp_path = 'tmp/';
$data =array();
// это папка, в которую будет загружаться картинка
$apend=date('YmdHis').rand(100,1000).'.png';
// это имя, которое будет присвоенно изображению
$uploadfile = "$uploaddir$apend";
//в переменную $uploadfile будет входить папка и имя изображения

// В данной строке самое важное - проверяем загружается ли изображение (а может вредоносный код?)
// И проходит ли изображение по весу. В нашем случае до 512 Кб
if(($_FILES['userfile']['type'] == 'image/gif' || $_FILES['userfile']['type'] == 'image/jpeg' || $_FILES['userfile']['type'] == 'image/png') && ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=512000))
{
// Указываем максимальный вес загружаемого файла. Сейчас до 512 Кб
  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
   {
   //Здесь идет процесс загрузки изображения
   $size = getimagesize($uploadfile);
   // с помощью этой функции мы можем получить размер пикселей изображения
     if ($size[0] < 501 && $size[1]<1501)
     {
     // если размер изображения не более 500 пикселей по ширине и не более 1500 по  высоте
     return $uploadfile;
    $data = array('userfile' => $uploadfile);
    echo json_encode( $data );
   } else {
          // Функция изменения размера
          function resize ($uploadfile, $type =1, $quality =null)
          {
            global $tmp_path;
            // Ограничение по ширине в пикселях
            $max_size = 500;
            // Качество изображения по умолчанию
            if ($quality =null)
            $quality = 75;
            // Cоздаём исходное изображение на основе исходного файла
            if ($uploadfile['type'] == 'image/jpeg')
            $source = imagecreatefromjpeg($uploadfile['tmp_name']);
            elseif ($uploadfile['type'] == 'image/png')
            $source = imagecreatefrompng($uploadfile['tmp_name']);
            elseif ($uploadfile['type'] == 'image/gif')
            $source = imagecreatefromgif($uploadfile['tmp_name']);
            else
            return false;

             // Определяем ширину и высоту изображения
             $scr=$source;
             $w_src = imagesx($src);
             $h_src = imagesy($src);

             // В зависимости от типа (эскиз или большое изображение) устанавливаем ограничение по ширине.
             if ($type == 1)
             $w = $max_size;

             // Если ширина больше заданной
             if ($w_src > $w)
              {
               // Вычисление пропорций
               $ratio = $w_src/$w;
               $w_dest = round($w_src/$ratio);
               $h_dest = round($h_src/$ratio);

               // Создаём пустую картинку
               $dest = imagecreatetruecolor($w_dest, $h_dest);

               // Копируем старое изображение в новое с изменением параметров
               imagecopyresampled($dest, $src, 0, 0, 0, 0, $w_dest, $h_dest, $w_src, $h_src);

               // Вывод картинки и очистка памяти
               imagejpeg($dest, $tmp_path . $uploadfile['userfile'], $quality);
               imagedestroy($dest);
               imagedestroy($src);
               return $uploadfile['userfile'];
              }
              else {
              // Вывод картинки и очистка памяти
              imagejpeg($src, $tmp_path . $file['name'], $quality);
              imagedestroy($src);
              return $uploadfile;

            }
          }
     }
   } else {
   $data = array('error' => 'Ошибка загрузки файлов.');
   echo json_encode( $data );
   }
} else {
$data = array('error' => 'Ошибка загрузки файлов.');
echo json_encode( $data );
}

?>
