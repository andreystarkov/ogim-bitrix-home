<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<style>
.graylink {
color: silver;
padding-left: 10px; font-family: Verdana; 
font-size: 11px;
}

.graylink:hover{
color:gray;
}
</style>

<?if (!empty($arResult)):?>
<div>
<table><tr>
<?foreach($arResult as $arItem):?>

	<?if ($arItem["PERMISSION"] > "D"):?>
		<td><a style="color:silver" class="graylink" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></td>
	<?endif?>

<?endforeach?>
</tr></table>
	
</div>
<div class="menu-clear-left"></div>
<?endif?>