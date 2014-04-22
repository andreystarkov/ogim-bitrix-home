<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
    <div class="searcher-container" style="width: 180px">
 <form action="<?=$arResult["FORM_ACTION"]?>">     
 <input id="SimpleSearcher" name="q" type="search" placeholder="" autocomplete="off" />
 </form>
    </div>
    <script type="text/javascript" charset="utf-8">
      $("#SimpleSearcher").searcher();
    </script>