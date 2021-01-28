<? require 'block/header.php';
require_once 'ajax/connectdb.php'; ?>
<main class="main_cont">
  <div class="container">
  <div class="sticky">
  <div class="calcul" id="navbar">
  <div class="polzunok-wrap">
      <div class="polzunok-label">
        <span class="polz_sum_text">Сумма займа</span>
        <div class="polz_sum_val">
          <input type="text" id="amount1" data-calc="sum" value="3000" class="cal_val">
          <div class="polz_sum_value_suffix">₽</div>
        </div>
      </div>
      <div class="slider_bar">
        <div id="polzunok-1" class="jqueryui_slider calc_loanslider loan_amount_slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-val="3000" data-min="1000" data-max="100000" data-step="1000" ></div>
      </div>
  </div>
  <div class="box_hidden">
  <div class="polzunok-wrap">
    <div class="polzunok-label">
      <span class="polz_sum_text">Срок займа</span>
      <div class="polz_sum_val">
        <input type="text" id="amount2" data-calc="time" value="5" class="cal_val">
        <div class="polz_sum_value_suffix">дней</div>
      </div>
    </div>
    <div class="slider_bar">
    <div id="polzunok-2" class="jqueryui_slider calc_loanslider loan_amount_slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-val="5" data-min="1" data-max="90" data-step="1"></div>
  </div>
  </div>
</div>
</div>
<a class="city" onclick="showCityPopup();"><img class="geo" src="/img/geo.svg" alt="Гео иконка"><span class="text_geo">Россия</span></a>
<div class="popup" id="cityblock">
	<div class="popupIn" onclick="showCityPopup();">
      	<div class="popupInSecond">
			<h4>Выберите город</h4>
      <ul>
			<li><a href="/">Займы онлайн в Архангельске</a></li>
			<li><a href="/">Займы онлайн в Астрахани</a></li>
			<li><a href="/">Займы онлайн в Балашихе</a></li>
			<li><a href="/">Займы онлайн в Барнауле</a></li>
			<li><a href="/">Займы онлайн в Белгороде</a></li>
			<li><a href="/">Займы онлайн в Брянске</a></li>
			<li><a href="/">Займы онлайн в Владивостоке</a></li>
			<li><a href="/">Займы онлайн в Владикавказе</a></li>
			<li><a href="/">Займы онлайн в Владимире</a></li>
			<li><a href="/">Займы онлайн в Волгограде</a></li>
			<li><a href="/">Займы онлайн в Волжском</a></li>
			<li><a href="/">Займы онлайн в Вологде</a></li>
			<li><a href="/">Займы онлайн в Воронеже</a></li>
			<li><a href="/">Займы онлайн в Грозном</a></li>
			<li><a href="/">Займы онлайн в Екатеринбурге</a></li>
			<li><a href="/">Займы онлайн в Иваново</a></li>
			<li><a href="/">Займы онлайн в Ижевске</a></li>
			<li><a href="/">Займы онлайн в Иркутске</a></li>
			<li><a href="/">Займы онлайн в Йошкар-Оле</a></li>
			<li><a href="/">Займы онлайн в Казани</a></li>
			<li><a href="/">Займы онлайн в Калининграде</a></li>
			<li><a href="/">Займы онлайн в Калуге</a></li>
			<li><a href="/">Займы онлайн в Кемерово</a></li>
			<li><a href="/">Займы онлайн в Кирове</a></li>
			<li><a href="/">Займы онлайн в Костроме</a></li>
			<li><a href="/">Займы онлайн в Краснодаре</a></li>
			<li><a href="/">Займы онлайн в Красноярске</a></li>
			<li><a href="/">Займы онлайн в Кургане</a></li>
			<li><a href="/">Займы онлайн в Курске</a></li>
			<li><a href="/">Займы онлайн в Липецке</a></li>
			<li><a href="/">Займы онлайн в Магнитогорске</a></li>
			<li><a href="/">Займы онлайн в Махачкале</a></li>
			<li><a href="/">Займы онлайн в Москве</a></li>
			<li><a href="/">Займы онлайн в Мурманске</a></li>
			<li><a href="/">Займы онлайн в Набережных Челнах</a></li>
			<li><a href="/">Займы онлайн в Нижневартовске</a></li>
			<li><a href="/">Займы онлайн в Нижнекамске</a></li>
			<li><a href="/">Займы онлайн в Нижнем Новгороде</a></li>
			<li><a href="/">Займы онлайн в Нижнем Тагиле</a></li>
			<li><a href="/">Займы онлайн в Новокузнецке</a></li>
			<li><a href="/">Займы онлайн в Новороссийске</a></li>
			<li><a href="/">Займы онлайн в Новосибирске</a></li>
			<li><a href="/">Займы онлайн в Омске</a></li>
			<li><a href="/">Займы онлайн в Орле</a></li>
			<li><a href="/">Займы онлайн в Оренбурге</a></li>
			<li><a href="/">Займы онлайн в Пензе</a></li>
			<li><a href="/">Займы онлайн в Перми</a></li>
			<li><a href="/">Займы онлайн в Петрозаводске</a></li>
			<li><a href="/">Займы онлайн в Подольске</a></li>
      <li><a href="/">Россия</a></li>
      <li><a href="/">Займы онлайн в Ростове-на-Дону</a></li>
			<li><a href="/">Займы онлайн в Рязани</a></li>
			<li><a href="/">Займы онлайн в Самаре</a></li>
			<li><a href="/">Займы онлайн в Санкт-Петербурге</a></li>
			<li><a href="/">Займы онлайн в Саранске</a></li>
			<li><a href="/">Займы онлайн в Саратове</a></li>
			<li><a href="/">Займы онлайн в Севастополе</a></li>
			<li><a href="/">Займы онлайн в Симферополе</a></li>
			<li><a href="/">Займы онлайн в Смоленске</a></li>
			<li><a href="/">Займы онлайн в Сочи</a></li>
			<li><a href="/">Займы онлайн в Ставрополе</a></li>
			<li><a href="/">Займы онлайн в Стерлитамаке</a></li>
			<li><a href="/">Займы онлайн в Сургуте</a></li>
			<li><a href="/">Займы онлайн в Сыктывкаре</a></li>
			<li><a href="/">Займы онлайн в Тамбове</a></li>
			<li><a href="/">Займы онлайн в Твери</a></li>
			<li><a href="/">Займы онлайн в Тольятти</a></li>
			<li><a href="/">Займы онлайн в Томске</a></li>
			<li><a href="/">Займы онлайн в Туле</a></li>
			<li><a href="/">Займы онлайн в Тюмени</a></li>
			<li><a href="/">Займы онлайн в Улан-Удэ</a></li>
			<li><a href="/">Займы онлайн в Ульяновске</a></li>
			<li><a href="/">Займы онлайн в Уфе</a></li>
			<li><a href="/">Займы онлайн в Хабаровске</a></li>
			<li><a href="/">Займы онлайн в Химках</a></li>
			<li><a href="/">Займы онлайн в Чебоксарах</a></li>
			<li><a href="/">Займы онлайн в Челябинске</a></li>
			<li><a href="/">Займы онлайн в Череповце</a></li>
			<li><a href="/">Займы онлайн в Чите</a></li>
			<li><a href="/">Займы онлайн в Якутске</a></li>
			<li><a href="/">Займы онлайн в Ярославле</a></li>
      </ul>
      	</div>
	</div>
</div>
</div>
<div class="offers_cont" id="navbar_st">
<?$array=["янв.","фев.","мар.","апр.","мая","июня","июля","авг.","сен.","окт.","нояб.","дек."];
$date=date("d ");
$date.=$array[date('n')-1];
$date.=date(" Y");?>
<div class = "offers_data"> <h2 class ="data_text">Рейтинг займов: <?echo $date;?>&nbsp;год </h2>
</div>
<div class="offers">
  <?php
    $sum =3000;
    $time =5;
    $cbx = "on";
    $sql="SELECT * FROM `loans` WHERE `checkbox`='on' ORDER BY `procent`=0 DESC";
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
                <div class="pbttn"><a href ="/offer.php?id='.$row->id.'" class="bttn" target="_blank" id="mtdone" rel="nofollow">Изучить условия</a></div>
              </div>
                </div>
              '
      ];
        }
        else{
          if (($row->sumfrom)<=$sum && ($row->loantime)>=$time){
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
                <div class="pbttn"><a href ="/offer.php?id='.$row->id.'" class="bttn" target="_blank" id="stdone" rel="nofollow">Изучить условия</a></div>
              </div>
                </div>'
        ];
  }}
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
</div>
</div>
<div class="bg_txt">
<div class="main_txt container">
  <br>
  <h3>Какие условия у МФО на займы по паспорту онлайн?</h3> <br>
  Обычно большая часть микрокреедитных компаний выдают деньги на карту на относительно небольшой срок, до месяца.
   Но на рынке есть кредитные компании, среди которых есть даже самые новые МФО, они предлагают кредит на долгий срок. Такие долгосрочные кредиты становится доступным только для постоянных клиентов.
  Большинство компаний предоставляют возможность продлить сроки кредитования в рамках уже оформленного займа.
  Многие уже знают, что базовая процентная ставка в микрофинансовых организациях несколько выше, чем в банковских структурах или ломбардах. Тем не менее данный недостаток может быть частично или даже полностью скомпенсирован.
   Взять выгодный займ - это реально, причем не только в ходе оформления, но и в процессе погашения, если знать его некоторые особенности:<br>
  <br>
  1. Есть организации, которые выдают первый займ под 0% (<strong>первый займ без процентов</strong>) или с очень большой скидкой.<br>
  2. Промокоды и боусы от МФО позволяют одноразово снизить ставку на 10-50%.<br>
  3. Чем чаще заемщик берет займ, тем больше растет его скидка по программам лояльности.<br>
  4. Возврат долга частями уменьшает не только тело займа, но и сумму начисляемых процентов.<br>
  5. Досрочное погашение предполагает оплату лишь дней фактического пользования кредитом, но есть шанс подпортить КИ (кредитную историю).<br>
  <br>
  Новые клиенты обычно имеют имеют ограничения по максимальному размеру займа, но такая тенденция не присутствует во всех кампаниях на рынке. Есть МФО позволяющие занять на карту крупную сумму денег при первом обращении.
   Данный "кредитный лимит" довольно быстро возрастает после каждого успешного, а главное - своевременного погашения займа.
   Своевременно погасив такой займ, клиент довольно быстро может повысить свой "кредитный лимит", до необходимой суммы денег. Нарушение заемщиком долговых обязательств, способно не только понизить этот лимит, но и полностью лишить возможности кредитования.<br>
  <br>
  <h4 >Кому доступен <strong>займ на карту</strong> в online режиме?</h4><br>
  Микрофинансовые компании никогда не выставляют сильно завышенные требования своим потенциальным клиентам, что выгодно отличает их от прочих участников кредитно-финансового рынка.
  Одно из ключевых достоинств микрофинансовых организаций - это мягкие требования к будущим клиентам. Позволяет получить займ тем категориям клиентов, которым отказали прочие участники кредитно-финансового рынка.
  Сейчас, онлайн кредит по паспорту может оформить любой человек, который на момент подачи своей заявки на займ до зарплаты имеет:<br>
  <br>
  1. Действующее гражданство страны.<br>
  2. Совершеннолетний возраст от 18 лет.<br>
  3. Постоянный трудовой доход.<br>
  <br>
  Сейчас МФО не требует подтверждения заработка документально, поэтому займ online можно просто получить без справок о доходе, банковских выписок, без поручителей и т.д.
  Достаточно честно назвать реальный ежемесячный доход и дополнительные источники если есть. Дополнительным плюсом будет указание суммы, которую вы планируете выделить на обслуживание долга, без проблем для личного и/или семейного бюджета. Это позволит получить кредитные деньги таким категориям граждан как: самозанятые и частично занятые, а также работающим без оформления, а также временно безработным лицам. Для наименее обеспеченных социальных групп новые кредитные компании предлагают <b><u>льготный займ</u></b>. Подобные <b>займы</b> имеют ограничение по сумме и срокам кредитования, но предлагают сниженные ставки по кредиту.<br>
  <br>
  <h4>Какие еще документы может затребовать МФО в ходе оформления займа?</h4><br>
  Практически всегда,помимо внутреннего или заграничного паспорта, МФО просят указать ИНН, который должен быть у каждого гражданина в возрасте от 18 лет. Если у потенциального заемщика нет идентификационного номера налогоплательщика, то его можно получить буквально за 5 минут в ближайшем отделении налоговой инспекции. Так у нового клиента обратившегося за крупной суммой, организация выдающая займы, может запросить его личное фото на котором видно лицо и паспорт в развернутом виде на первой странице. Иногда могут потребоваться и цифровые копии всех вышеуказанных документов, то есть паспорта и ИНН. Такие требования связаны с профилактикой мошенничества, однако их исполнение сильно повысит ваши шансы на:<br>
  <br>
  1. Повышение кредитного лимита.<br>
  2. Ускоренную обработку заявок.<br>
  3. Получение одобрения без отказа.<br>
  <br>
  <h2>Преимущества быстрых займов. </h2> <br>
  По какой причине <b>быстрые займы</b> стали популярны, несмотря на критику по поводу больших процентов? Этому есть ряд объяснений:<br>
  • высокая скорость оформления. От подачи заявки до получения денег проходит от 15 минут до 1 часа. Деньги можно получить моментально на карту, расчетный счет, на кошелек ЯндексДенег или наличными. Это бывает единственным вариантом быстро достать нужную сумму, в моменты когда срочно нужны деньги;<br>
  • минимальный пакет документов. Чтобы оформить быстрый займ достаточно предоставить паспорт, ИНН и номер контактного телефона. Это весьма удобно для тех, кто официально не оформлен или имеет минимальный официальный заработок. При этом он может получить сумму выше чем в банке.<br>
  • возможность получение денег на любые нужды. Этот вид является нецелевым займом. Преимущества такого заёма в том, что заемщик может не отчитываться о том, на какие нужды пошли заемные деньги.<br>
  • простота в получении и расчете. Финансовые организации, выдающие <b>быстрые займы</b>, предлагают клиентам простые условия: получить деньги без имущественного залога, поручителей. Чтобы получить заем, заемщику достаточно лишь представить документ, удостоверяющий его личность и место проживания.<br>
  <br>
  Несомненным плюсом является то, что клиент знает наперед, какая сумма начислится по погашению займа за весь период пользования. Таким образом, при планировании своего бюджета заемщик точно понимает, когда он сможет погасить задолженность досрочно, сэкономив деньги на процентах.<br>
  <br>
  Зная эти нюансы можно легко брать <b>займ только по паспорту онлайн</b>, не затрачивая на его оформление много времени и сил. Главное, убедитесь, что вы берете заем в МФО которая обладает всеми лицензиями и сертификатами, а отзывы ее клиентов носят позитивный характер. Эти индикаторы помогут получить гарантированный займ без подводных камней и в рамках текущего кредитного законодательства, а также будет полностью защищено его соответствующими нормами.<br>
  <br>
  В микрофинансовых компаниях на рынке популярно предложение – первые займы без процентов онлайн, они доступны практически каждому заемщику. Получатель берет в пользование первую сумму безвозмездно, если успеет вернуть ее вовремя. Для каждой МФО срок разный, у одних он составляет неделю, у других может достигать 30 дней. Всего организаций, готовых выдать ссуду без начисления процентов новому клиенту, около 2-3 десятков. И у каждой МФО свои условия: одни структуры предоставляют кредит по льготной программе, другие - отказываются от таких тарифов из-за низкой рентабельности.
  <br>
  <br>
  <h4>Почему микрокредитные компании выдают <strong>займы онлайн без процентов</strong> на первый займ?</h4><br>
  Это делается для того чтобы нарастить свою клиентскую базу. Если взять статистику рынка в целом, то около 54% клиентов, которые воспользовались услугами микрокредитора- остались довольны и берут повторный заем или рекомендуют компанию своим близким.
  Изо дня в день растет число постоянных заемщиков, которые пользуются или уже успели оценить преимущества МФО. Все оформление такого беспроцентного договора ведется онлайн – нужно лишь корректно заполнить поля анкеты и оставить заявку. Все заемщики претендующие на бесплатный займ пройдут скоринг. Организация проверит всю информацию в анкете на достоверность предоставленных сведений и сверит с базой данных БКИ.
  <br>
  Отправить заявку на <b>онлайн-займ на карту без процентов</b> первый раз может любой совершеннолетний гражданин. Однако большинство МФО работают с клиентами от 20-21 года, которые относятся к категории наиболее платежеспособных заемщиков. Так же в МФК выделяют верхний порог возраста - обычно 65-70, но есть и те, кто активно сотрудничают с разными пенсионерами.
  У каждой организации есть свои требования к заемщикам. Для одних достаточно данных паспорта, телефона и именной карты. Для других необходимо фото получателя с документом, развернутым на главной странице. Прописка не имеет существенного веса для скоринга иногда, для МФО достаточно наличие штампа об официальной регистрации. Другие документы не требуются.
  <br>
  <br>
  <h4><strong>Первый займ без процентов</strong> онлайн – ограничения</h4><br>
  Существует мнение некоторых пользователей, что беспроцентный микрокредит взять намного сложнее, чем обычный заем в МФО. Все дело в том, что выдавая займ бесплатно, кредитор зачастую теряет деньги. Никто не покроет расходы на поддержание сайта, оформление документов, банковские переводы. Компания должна быть уверенна, что заемщик вернет деньги, поэтому проверка нового клиента происходит особенно тщательно.<br>
  <br>
  Чтобы получить первый займ достаточно иметь именную банковскую карту, хотя в каждой из компаний доступны как минимум 2-3 дополнительных способа вывода средств. Выбор вывода средств происходит при заполнении анкеты, в компаниях помимо вывода на карту есть 2-3 способа. Как только заявка одобрена деньги моментально перечислят на карту.
  Важно! Отчет о расходовании займа предоставлять не нужно. Полученные денежные средства клиент вправе использовать по своему усмотрению.
  В официальных МФО максимально прозрачные условия, но зато есть некоторые ограничения:<br>
  • cумма первого займа без процентов составляет до 15000 рублей. Максимальный размер безвозмездного кредита в редких случаях достигает 30000 рублей.<br>
  • cрок предоставления бесплатного кредита каждая организация определяет сама. Минимальный период составляет 1-3 дня, максимальный – до 30 суток.<br>
  • безвозмездный кредит организация предоставляет только один раз. Услуга доступна новому клиенту, который впервые оформляет микрокредит.<br>
  • вторую и последующие заявки финансовая компания одобрит по стандартной процентной ставке. Если успешно выплатить 2-3 мини-кредита, можно получить скидку для постоянных клиентов.<br>
  <br id="text">
  Какие требования необходимы для получения денежных средств:
  <br>
  • по возрасту – старше 18 лет;<br>
  • по гражданству – обладателям российского паспорта;<br>
  • по прописке – постоянная регистрация в любом из регионов;<br>
  • по доходам – официальные или неофициальные регулярные выплаты.<br>
  <br>
  Для кредитора очень важно вернуть денежные средства.Поэтому приемущества при оформлении займа получают официально трудоустроенные граждане со стабильной зарплатой. Поэтому МФО редко отказывают бюджетникам, людям с высшим образованием и хорошей кредитной историей.
  <br>
  <br>
  <h3>Получить займ онлайн без процентов первый раз</h3>  <br>
  Воспользоваться микрокредитом под 0% можно в различных компаниях. Рассмотрим кратко условия трех из них.
  <br>
  1. Екапуста. Этот сервис онлайн-займов предоставит первую ссуду абсолютно безвозмездно при единственном условии – погашении задолженности в срок. Договор заключат без выплаты процентов в режиме онлайн. Заполнение заявки займет всего 10 минут, а средства поступят на карточку банка моментально. Условия: сумма – 100-30000 рублей на 7-21 день.<br>
  2. MoneyMan. Платформа перечислит в режиме онлайн сумму 1500 до 15000 рублей по тарифу без процентов новым пользователям. Срок предоставления ссуды небольшой – всего 5-15 дней. На заполнение заявки уйдет около 10 минут, на одобрение – не более 1 минуты. Постоянные плательщики могут занять в МФО до 80000 с выплатой от 0,8% до 1% в день.<br>
  3. LIME-займ. Этот сервис также подойдет для получения первого займа онлайн. Доступная сумма – 2000-20000 рублей с возвратом через 10-15 суток. На заполнение анкеты по первому кредиту уйдет всего 5 минут, на получение повторного займа – 1 минута. Финансовую поддержку может получить российский гражданин, проживающий в любом населенном пункте.<br>
  <br>
  Для пользователей, которые боятся оформлять <b>микрозаймы онлайн</b>, <b>первый займ без процентов</b> – наилучшее решение бесплатно поправить финансовое положение! За предоставленные средства не придется платить, если погасить задолженность вовремя.
  Современная система кредитования, которую предлагают банки и МФО, стала настолько простой, что практически каждый гражданин страны может получить займ без отказа. Все потому, что сегодня большое число финансовых учреждений предлагает множество кредитных продуктов. В борьбе за клиентов кредиторы вынуждены ежедневно разрабатывать упрощенные программы кредитования для населения, что не может не радовать заемщиков.
  <br>
  <br>
  <h3>Кто может претендовать на получение займа без отказа</h3><br>
  Если раньше такие категории населения, как пенсионеры, студенты, безработные, матери в декрете имели низкие шансы на одобрение кредита, то теперь ситуация кардинально изменилась. Все они могут получить <b>деньги в долг без отказа</b> за считанные минуты. Для этого достаточно подать запрос в выбранную финансовую организацию, условия которой полностью им подходят.
  Чтобы подать запрос на <b>займ без отказа</b>, можно приехать непосредственно в офис компании. Также сегодня существует возможность дистанционного кредитования. В этом случае клиент может подать заявку на оформление займа прямо на сайте кредитора, дождаться ответа от менеджера, затем получить займ на карту, счет и др.
  <br>
  <br>
  <h4>Что нужно, чтобы получить займ без отказа?</h4><br>
  Чтобы получить деньги, понадобится:<br>
  • паспорт<br>
  • регистрация в стране<br>
  <br>
  Для совершеннолетнего жителя, который имеет прописку в стране, взять кредит не составит труда. Дополнительно также стоит знать: чем лучше кредитная история заемщика, тем выгоднее условия по кредиту ему могут предложить организации и банки.
  Для многих компаний даже небезупречная КИ не является причиной отказа в выдаче займа. Клиенты с плохой кредитной историей тоже могут получить <b>займ без отказа</b>, однако его условия могут отличаться от тех, что предлагают людям с хорошей финансовой репутацией.
  Основные отличия: выше процентная ставка и меньше сумма кредита. Однако и в этом положении дел заемщики могут легко исправить ситуацию: взять небольшой займ без отказа, выплатить его без просрочек, чем улучшить собственную КИ. После этого можно претендовать на более расширенные условия и выгоды от кредиторов.
  Пользуйтесь своими преимуществами, оформляйте <b>онлайн-займ без отказа</b> или кредиты наличными, тщательно анализируя условия, и пусть ваше материальное положение будет всегда под контролем!<br>
  <br>
</div>
</div>
</div>
</main>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/jquery.ui.touch-punch.min.js"></script>
<script src="/js/jquery.sticky-sidebar.min.js"></script>
<script>
/*window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var navbar_st =document.getElementById("navbar_st");
var sticky = navbar_st.offsetHeight;
var topsticky = navbar.offsetTop;
var stopscrll = document.getElementById("text");
var scrll = stopscrll.offsetTop;
function myFunction() {
  if (window.pageYOffset>=sticky) {
    navbar.classList.add("stickytop")
  } else {
    navbar.classList.remove("stickytop");
  }
};*/
window.isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
var onResize = function () {
      if (window.isMobile == false)
        $('.sticky').stickySidebar({
            topSpacing: 50,
        });
    };

    $(window).resize(onResize);
    onResize();

    function showCityPopup() {
    	if ($('.popup').is(':visible')) {
        	$('.popup').hide();
        } else {
			$('.popup').show();
        }
}
</script>
<script>
var load_ajax;
var load = function () {
    if(load_ajax) load_ajax.abort();
    var data = {
        sum: $('[data-calc="sum"]').val(),
        time: $('[data-calc="time"]').val()
    };
    load_ajax = $.post('/ajax/calcul.php', data, function (resp) {
        $('.offers').html(resp);
        $('body,html').animate({
            scrollTop: 0
        }, 400);

    });
};

var offers_load_timeout = null;

var jquery_ui_slider_after_change = function(th, input) {
    var temp_value = parseInt(input.val());
    if (isNaN(temp_value)) {
        temp_value = th.data('min');
    } else if (temp_value < th.data('min')) {
        temp_value = th.data('min');
    } else if (temp_value > th.data('max')) {
        temp_value = th.data('max');
    }
    input.val(temp_value);
    th.slider('option', 'value', temp_value);
    input.data('beforeclear', temp_value)
    clearTimeout(offers_load_timeout);
    offers_load_timeout = setTimeout(function () {
        load();
    }, 300);
};

var jquery_ui_slider = function() {
    $('.polzunok-wrap .jqueryui_slider').filter(function() {
        if (!$(this).data('jquery_ui_slider_hasscript')) {
            return true;
        }
    }).data('jquery_ui_slider_hasscript', true).each(function() {
        var th = $(this)
            , inp = th.closest('.polzunok-wrap').find('input')
            , plus_btn = th.closest('.polzunok-wrap').find('.slider_plus')
            , minus_btn = th.closest('.polzunok-wrap').find('.slider_minus');
        th.slider({
            animate: true,
            range: 'min',
            value: th.data('val'),
            min: th.data('min'),
            max: th.data('max'),
            step: th.data('step'),
            slide: function(e, ui) {
                inp.val(ui.value).trigger('change', [{
                    source: 'slider'
                }]);
            }
        });
      th.hover(function() {
            th.closest('.polzunok-wrap').addClass('slider_hover');
        }, function() {
            th.closest('.polzunok-wrap').removeClass('slider_hover');
        });
        plus_btn.click(function() {
            var temp_value = th.slider('option', 'value')
                , temp_min = th.slider('option', 'min')
                , temp_max = th.slider('option', 'max');
            var interval = Math.floor((temp_max - temp_min) / 20);
            if (typeof (th.data('step')) !== 'undefined') {
                interval = parseInt(th.data('step'));
            }
            temp_value += interval;
            if (temp_value > temp_max)
                temp_value = temp_max;
            inp.val(temp_value).trigger('change', [{
                source: 'plus_button'
            }]);
        });
        minus_btn.click(function() {
            var temp_value = th.slider('option', 'value')
                , temp_min = th.slider('option', 'min')
                , temp_max = th.slider('option', 'max');
            var interval = Math.floor((temp_max - temp_min) / 20);
            if (typeof (th.data('step')) !== 'undefined') {
                interval = parseInt(th.data('step'));
            }
            temp_value -= interval;
            if (temp_value < temp_min)
                temp_value = temp_min;
            inp.val(temp_value).trigger('change', [{
                source: 'minus_button'
            }]);
        });
        inp.on('keypress', function(e) {
            if (e.which === 13) {
                inp.trigger('blur');
            }
        }).focus(function() {
            inp.data('beforeclear', inp.val()).val('');
        }).blur(function() {
            if (typeof (inp.data('beforeclear')) !== 'undefined') {
                inp.val(inp.data('beforeclear'));
            }
        }).change(function() {
            inp.data('beforeclear', inp.val());
        });
        inp.change(function() {
            jquery_ui_slider_after_change(th, inp);
        });
        jquery_ui_slider_after_change(th, inp);
    });
};

jquery_ui_slider();

function rand(min, max){
    if(min === 0){
        return Math.floor((Math.random() * max) + 0);
    }else{
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
};

</script>
<?php require 'block/footer.php' ?>
</html>
