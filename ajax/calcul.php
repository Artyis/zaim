<?php
  $sum =filter_var($_POST ['sum']);
  $time =filter_var($_POST ['time']);
  $cbx = "on";
  require_once 'connectdb.php';
  $sql="SELECT * FROM `loans` WHERE `checkbox`='on' ORDER BY `procent`>=0 DESC";
  $query = $pdo->query($sql);
  $out1=[];
  $out2=[];
    while ($row=$query->fetch(PDO::FETCH_OBJ)){
      if(($row->sumto)>=$sum && ($row->sumfrom)<=$sum && ($row->loantime)>=$time){
      $out1[]=[
        '<div class="offer_box">
        <div class = "text_box">
        <p class="text_into_box">'.$row->txt.'</p>
         </div>
          <div class="offer_box_row">
            <div class ="offer_box_img">
                <img src="/img/'.$row->img.'" alt="'.$row->mfo.'" class="offer_box_img_scr">
                <h4>'.$row->mfo.'</h4>
              </div>
          <div class="offer_box_cont">
            <div class ="offer_info">
              <div class="offer_info_box">
                <p class="offer_info_text">Сумма займа</p>
                <p class="offer_info_num">'.$sum.' <small>₽</small></p>
              </div>
              <div class="offer_info_box">
                <p class="offer_info_text">Комиссия '.$time.' дн.</p>
                <p class="offer_info_num">'.$sumend=intval(($sum*($row->procent/100)/100)*$time).' <small>₽</small></p>
              </div>
              <div class="offer_info_box">
                <p class="offer_info_text">Сумма к выплате</p>
                <p class="offer_info_num1">'.$sumend=intval($sum+(($sum*($row->procent/100)/100)*$time)).' <small>₽</small></p>
              </div>
              <div class="offer_info_box">
                <p class="offer_info_text">Первый займ</p>
                <p class="offer_info_num2">'.$row->sumfrom.' - '.$row->sumto.' <small>₽</small></p>
              </div>
              <div class="offer_info_box">
                <p class="offer_info_text"> Ставка в % </p>
                <p class="offer_info_num2">'.($row->procent/100).'</p>
              </div>
              <div class="offer_info_box" >
                <p class="offer_info_text">Срок займа</p>
                <p class="offer_info_num2">'.$row->loantime.' дней</p>
              </div>
            </div>
          </div>
              <div class="pbttn"><a href ="https://'.$row->cpalink.'" class="bttn" >Изучить условия</a></div>
            </div>
              </div>
            '
    ];
      }
      else{
      $out2[]=[
        '<div class="offer_box">
          <div class="offer_box_row">
            <div class ="offer_box_img">
                <img src="/img/'.$row->img.'" alt="'.$row->mfo.'" class="offer_box_img_scr">
                <h4>'.$row->mfo.'</h4>
              </div>
          <div class="offer_box_cont">
            <div class ="offer_info">
              <div class="offer_info_box">
                <p class="offer_info_text">Сумма займа</p>
                <p class="offer_info_num">'.$sum.' <small>₽</small></p>
              </div>
              <div class="offer_info_box">
                <p class="offer_info_text">Комиссия '.$time.' дн.</p>
                <p class="offer_info_num">'.$sumend=intval(($sum*($row->procent/100)/100)*$time).' <small>₽</small></p>
              </div>
              <div class="offer_info_box">
                <p class="offer_info_text">Сумма к выплате</p>
                <p class="offer_info_num1">'.$sumend=intval($sum+(($sum*($row->procent/100)/100)*$time)).' <small>₽</small></p>
              </div>
              <div class="offer_info_box">
                <p class="offer_info_text">Первый займ</p>
                <p class="offer_info_num2">'.$row->sumfrom.' - '.$row->sumto.' <small>₽</small></p>
              </div>
              <div class="offer_info_box">
                <p class="offer_info_text"> Ставка в % </p>
                <p class="offer_info_num2">'.($row->procent/100).'</p>
              </div>
              <div class="offer_info_box" >
                <p class="offer_info_text">Срок займа</p>
                <p class="offer_info_num2">'.$row->loantime.' дней</p>
              </div>
            </div>
          </div>
              <div class="pbttn"><a href ="https://'.$row->cpalink.'" class="bttn" >Изучить условия</a></div>
            </div>
              </div>'
      ];
}
    };
    foreach ($out1 as $elem) {
        foreach ($elem as $elem2) {
          print_r($elem2);
        }
    }
?><div class="offers_vse">
  <p class="data_text">Результаты,  не соответствующие условиям</p>
 </div>
<?
foreach ($out2 as $elem) {
    foreach ($elem as $elem2) {
      print_r($elem2);
    }
}
?>
