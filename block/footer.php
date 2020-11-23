<footer class="footer">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="../js/jquery.cookie.js"></script>
  <script src="../js/bookmark.js"></script>
  <p class ="footer_text container">Сервис zaim-zaym.ru не выдает займы и не является финансовым учреждением, банком или кредитором.
Все рекомендации являются результатом аналитических исследований и не несут рекламный характер.
Предложение не является оффертой. Конечные условия займов уточняйте при прямом общении к кредиторам.
</p>
<p class="footer_text"> zaim-zaym.ru - Россия, 2020г.</p>
</footer>
<div id="popup" style="position:fixed;">
  <div class="for_popup container">
    <p class="popup_txt">Понравился наш сайт?! Добавьте его в закладки чтобы не потерять!;)</p>
    <a href="#" class="js-bookmark button" title="Добавить в закладки">Добавить в закладки</a>
    <a id="setCookie" class="close" href="#" title="Закрыть" onclick="document.getElementById('popup').style.display='none'; return false;"></a>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
$("#setCookie").click(function () {
$.cookie("popup", "", { expires:0, path: '/' });
$("#popup").hide();
});

if ( $.cookie("popup") == null )
{
setTimeout(function(){
$("#popup").show();
}, 4000)
}
else { $("#popup").hide();
}
});
</script>
