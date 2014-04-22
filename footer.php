

    </div>


</div>
</div>
</div>

		<div id="footer">
        <div id="footer-workspace">

        &copy; 2013 Оренбургский государственный институт менеджмента
        </div>


<?
/*
if(empty($_COOKIE['preload'])){
?>
	<script type="text/javascript">
		QueryLoader.selectorPreload = "body";
		QueryLoader.init();
	</script>
<?
setcookie("preload", "is", time()+6660);
} */
?>
<div id="modalAuth" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<?$APPLICATION->IncludeComponent("bitrix:system.auth.form",".default",Array("REGISTER_URL" => "/auth/","PROFILE_URL" => "/personal/profile/","SHOW_ERRORS" => "N"));?>
</div>

<div id="dialog" title="Авторизация на сайте">

</div>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28993159-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>
</html>