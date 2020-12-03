<?php
if ($_COOKIE ['login'] == '') {header ('Location: /admin.php');
   exit();}
$titleweb='Админка';
require 'block/head.php';
require_once 'ajax/connectdb.php';

   ?>

 <main class="bg-ligth">
   <div class="container">
     <?php
     $sql= 'SELECT * FROM `loans` ORDER BY `id` DESC';
     $query = $pdo->query($sql);
     while ($row= $query->fetch(PDO::FETCH_OBJ)) {

       if (($row->checkbox) != '') {
         $id=$row->id;
         $mfo=$row->mfo;
         $cpalink=$row->cpalink;
         $img=$row->img; ?>

             <div class="row card-header mb-2">
               <h4 class="my-3 font-weight-normal col-md-8"><? echo $mfo; ?></h4>
                 <a href="ajax/rloan.php?id=<?echo $id;?>" class="btn btn-lg btn-block btn-primary col-4 col-md-2" >Редактировать</a>
                  <a href="ajax/dloan.php?id=<?echo $id;?>" class="btn btn-lg btn-block btn-primary col-4 col-md-2" >Удалить</a>

               </div>
                    <? } } ?>


  </div>
 </main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
// выход из авторизации
$('#exit').click(function(){
  $.ajax ({
    url: 'ajax/exit.php',
    type: 'POST',
    cache: false,
    dataType: 'html',
    success: function(data){
      if (data == 'успех') {
        window.location = "singin.php";
      }
    }
  });
});
</script>
</html>
