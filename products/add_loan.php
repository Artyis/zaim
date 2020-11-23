<?
if ($_COOKIE ['login'] == '') {header ('Location: /index.php');
   exit();}
$titleweb='Добавление займа';
 require '../block/head.php';
?>
 <main class="bg-ligth">
   <div class="container">
  <div class="row py-5">
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Форма добавления займа</h4>
      <form class="needs-validation" method="post" enctype= "multipart/form-data">
      <div class ="row">
      <div class="col-md-6 mb-3">
       <label for="inputLogin"> Название МФО</label>
       <input type="text" id="mfo" class="form-control" placeholder="МФО" required="" autofocus="">
      </div>
      <div class="col-md-6 mb-3">
       <label for="inputPassword">ссылка</label>
       <input type="url" id="cpalink" class="form-control" placeholder="cpalink" required="">
      </div>
      <div class="col-md-6 mb-3">
       <label for="inputLogin">Текст</label>
       <input type="text" id="txt" class="form-control" placeholder="СЕО ключевики" required="" autofocus="">
      </div>
    </div>
    <div class ="row">
      <div class="col-md-6 mb-3">
       <label for="inputPassword">Срок</label>
       <input type="number" id="loantime" class="form-control" placeholder="loantime" required="">
     </div>
     <div class="col-md-6 mb-3">
       <label for="inputPassword">Ставка%</label>
       <input type="number" id="procent" class="form-control" placeholder="procent" required="">
    </div>
      <div class="col-md-6 mb-3">
       <label for="inputPassword">Сумма</label>
       <input type="number" id="sumfrom" class="form-control mb-2" placeholder="sumfrom" required="">
       <input type="number" id="sumto" class="form-control" placeholder="sumto" required="">
     </div>
     <div class="col-md-6 mb-3">
       <label for="inputPassword" class>Возраст</label>
       <input type="number" id="age" class="form-control mb-4" placeholder="age" required="">
       <div class="custom-control custom-checkbox col-md-12">
         <input type="checkbox" class="custom-control-input" id="save-info">
         <label class="custom-control-label" for="save-info">Активный займ</label>
       </div>
   </div>
   <div class="row">
     <div class = "col-md-12">
       <input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" multiple>
    </div>
   </div>
   <div class = "col-md-12 py-5">
   <div class="alert alert-danger col-md-12" id ="error_alert"></div>
   <button class="btn btn-lg btn-primary btn-block col-md-12 " type="button" id="addloan">Добавить</button>
  </div>
 </div>
     </form>
  </div>
 </main>

<?php require '../block/footer.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$('#addloan').click(function(){
  var mfo = $('#mfo').val();
  var cpalink = $('#cpalink').val();
  var loantime = $('#loantime').val();
  var procent = ($('#procent').val()*100);
  var sumfrom = $('#sumfrom').val();
  var sumto = $('#sumto').val();
  var age = $('#age').val();
  var txt =  $('#txt').val();
  var checkbox = $('input[type="checkbox"][id="save-info"]:checked').val();
  var file_data = $('#image_uploads').prop('files')[0];
  var fd = new FormData;
  fd.append ('mfo', mfo);
  fd.append ('cpalink', cpalink);
  fd.append ('procent', procent);
  fd.append ('loantime', loantime);
  fd.append ('sumfrom',sumfrom);
  fd.append ('sumto', sumto);
  fd.append ('age', age);
  fd.append ('txt', txt);
  fd.append ('checkbox', checkbox);
  fd.append ('file', file_data);
  $.ajax ({
    url: '../ajax/add_loandb.php',
    type: 'POST',
    processData: false,
    contentType: false,
    cache: false,
    data: fd,
    success: function(data){
    if (data == "ок") {
      alert ('Продукт добавлен');
      location.reload();

    }
    else {
      $('#error_alert').show();
      $('#error_alert').text(data);
        }
    }
  });
});
</script>
</html>
