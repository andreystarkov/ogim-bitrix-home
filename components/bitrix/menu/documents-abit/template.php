<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<script>
$(document).ready(function() {
 $(".pagemenu-block1").corner("10px");

});


        var pre;
    $(window).load(function() {
    $('.pagemenu-bullet').css('opacity', 0.7);


	  $('.pagemenu-cell').hover(function() {
        pre =  $('.pagemenu-bullet', this).attr("src");
	    $('.pagemenu-bullet', this).fadeTo("100","1");
	    $('.pagemenu-bullet', this).attr("src", $('.pagemenu-bullet', this).attr("src-hl"));

                    }, function() {
                    	  $('.pagemenu-bullet', this).attr("src", pre);
                          $('.pagemenu-bullet', this).fadeTo("200", "0.7")
                    }
                );

});
</script>


<style>
.documents-item { margin: 5px; height: 48px; position: relative; float: left; display: table-cell;vertical-align: middle; width: 280px; font-size: 10px; }
.document-link a {}
.document-link { padding-top: 5px;}
.documents-icon { height: 48px; width: 40px; position: relative; float: left}

</style>


<?foreach($arResult as $arItem):?>
<div class="documents-item">
<?
$link = $arItem[3];
echo $link;
$ext=substr(strstr($arItem["LINK"], "."),1);

echo "<div class=\"documents-icon\">";
//проверка на расширение
if(strstr($ext, "pdf") != ""){echo "<img src=\"/_abit-res/images/icons/pdf.png\" >";}
if($ext=="xls" or $ext=="xslx"){echo "<img src=\"/_abit-res/images/icons/xls.png\" >";}
if($ext=="doc" or $ext=="docx"){echo "<img src=\"/_abit-res/images/icons/doc.png\" >"; }

echo "</div>";
?>

<div class="document-link"><a style="font-size: 11px;  color: #393939" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>

</div>


<?endforeach?>


           <?endif?>
