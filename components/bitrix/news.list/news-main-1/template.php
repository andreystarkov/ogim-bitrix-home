<script type="text/javascript" src="/_js/social.js" charset="windows-1251"></script>
<script type="text/javascript" src="http://vkontakte.ru/js/api/share.js?11" charset="windows-1251"></script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script src="http://cdn.connect.mail.ru/js/loader.js" type="text/javascript" charset="UTF-8"></script>
<script type="text/javascript"> 
$(document).ready(function() {
$('ul.reset li').css({'background-image': 'none', 'margin-left': '-28px', 'margin-top': '0px'});

$('.socials').mobilyblocks({
	trigger: 'click',
	direction: 'clockwise',
	duration: 400,
	zIndex: 50,
	widthMultiplier: 1
});
$(".news-img").corner("100px");
});
</script>



<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();



foreach($arResult["ITEMS"] as $arItem):?>


<div class="news-list-item">

	<em></em><div class="header-news">

			<div class="socials">
				<ul class="reset">
					<li>
						<a target="_blank" href="http://connect.mail.ru/share?url=http://www.ogim.ru<?=urlencode($arItem["DETAIL_PAGE_URL"]);?>&title=<?url_encode_cyr($arItem["NAME"]);?>&description=<?url_encode_cyr($arItem["PREVIEW_TEXT"]);?>">
						<img src="/_images/social/mail.png" alt="" /></a>
					</li>
					<li>
						<script type="text/javascript">
							document.write(VK.Share.button(
							{
								url: '[http://www.ogim.ru<?=$arItem["DETAIL_PAGE_URL"];?>]',
								title: '<?=$arItem["NAME"]?>', description:''},
								{type: 'custom', text: '<img src=\"/_images/social/vk.png\" />'}
							));
						</script>
					</li>

					<li>
						<a rel="nofollow" href="http://www.facebook.com/share.php?t=<?url_encode_cyr($arItem["NAME"]);?>&u=http://www.ogim.ru<?=$arItem["DETAIL_PAGE_URL"];?>" class="fb_share_button" onclick="return fbs_click()" target="_blank">
						<img src="/_images/social/fb.png" alt="" /></a>
					</li>

					<li>
						<a href="http://twitter.com/share?text=<?url_encode_cyr($arItem["NAME"]);?>&url=<?=urlencode("http://www.ogim.ru".$arItem["DETAIL_PAGE_URL"]);?>&lang=ru">
						<img src="/_images/social/twitter.png" alt="" /></a></script>
					</li>
				</ul>
			</div>


        <div class="news-link">
			<a href="http://www.ogim.ru<?=$arItem["DETAIL_PAGE_URL"];?>"><?=$arItem["NAME"]?></a>

			<div class="news-date">
			<?=$arItem["DISPLAY_ACTIVE_FROM"]?>
			</div>
		</div>


	</div>

	<div class="news-text">
		<?echo $arItem["PREVIEW_TEXT"]?>
	</div>
</div>

<? $i++; ?>
<?endforeach;?>
