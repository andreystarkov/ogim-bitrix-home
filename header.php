<?php
include $_SERVER["DOCUMENT_ROOT"]."/_inc/lib.php";
global $slides_count; $page = $_GET['p'];

function url_encode_cyr($data){
echo urlencode(iconv("windows-1251", "UTF-8", $data));
}
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?$APPLICATION->ShowHead();?>
  
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>

	<title>Œ√»Ã - √Î‡‚Ì‡ˇ</title>
	
    <link type="text/css" href="/_css/top-menu.css" rel="stylesheet"/>

	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/iview.css" type="text/css" />
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/iview/style.css" type="text/css" />	
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.min.css">
	
	<!--[if IE 7]>
		<link rel="stylesheet" href="/_css/font-awesome-ie7.min.css">
	<![endif]-->
	
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/jquery.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/migrate.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/corner.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/bootstrap.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/menu.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/color.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/easing.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/shadow.js"></script>	
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/raphael.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/iview.js"></script>
	
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/lib/engine.js"></script>

</head>

<body><?$APPLICATION->ShowPanel();?>
<div id="wrapper">

<div id="main-header">
	<div id="main-header-workspace">
	 
		<div id="logo"></div>
		<div id="eng-link"><a href="http://www.studyinorenburg.com/"><img class="eng" src="/_images/eng.png" src-hl="/_images/eng-active.png" border="0" alt="" /></a></div>
		<div id="contacts"></div>
	</div>
</div>

<? include "_inc/top-menu-full.html" ?>
<div id="workspace-wrapper">
 <div id="main-header-shadow"></div>
<div id="main-workspace">

   <div style="height: 370px; margin-top: -5px;" class="slider-wrapper theme-default">
           
   
			<div id="iview">	

				<div data-iview:image="/images/slides/1.jpg">
				<!--	<div data-width="250px" class="iview-caption caption1" data-x="30" data-y="120" 
					data-speed="600" data-transition="wipeBottom">Iaoe nooaaiou</div>
						
					<div  data-width="600px" class="iview-caption caption1" data-x="50" data-y="170" 
					data-speed="600" data-transition="wipeTop">iaeaaa?o aunieei iioaioeaeii</div>
						
					<div data-width="200px" class="iview-caption caption1" data-x="120" data-y="220" 
					data-speed="600" data-transition="wipeTop"> e yia?aeae.</div> -->
				</div>

				<div data-iview:image="/images/slides/2.jpg"  data-iview:transition="slice-right-fade, slice-top-fade">
			
				<!--	<div data-width="250px" class="iview-caption caption1" data-x="30" data-y="30" 
					data-speed="550" data-transition="wipeBottom" style="font-size: 50px">Ananoi?iiiaa,</div>
						
					<div  data-width="400px" class="iview-caption caption1" data-x="50" data-y="80" 
					data-speed="550" data-transition="wipeTop">aa?iiie?aneia ?acaeoea</div>
						
					<div data-width="3500px" class="iview-caption caption1" data-x="150" data-y="120" 
					data-speed="500" data-transition="wipeTop">ee?iinoe nooaaioa.</div> -->
	
				</div>
	
				<div data-iview:image="/images/slides/3.jpg">

				<!--	<div data-width="450px" class="iview-caption caption1" data-x="30" data-y="160" 
					data-speed="700" data-transition="wipeTop" style="font-size: 50px">Iaei ec eeaa?ia</div>
					<div data-width="350px" class="iview-caption caption1" data-x="60" data-y="210" 
					data-speed="700" data-transition="wipeBottom">aunoaai ia?aciaaiey</div>				
					<div data-width="200px" class="iview-caption caption1" data-x="390" data-y="210" 
					data-speed="500" data-transition="wipeTop">a ?aaeiia</div>	-->			

				</div>
				
				<div data-iview:image="/images/slides/4.jpg">
				
				<!--	<div data-width="150px" class="iview-caption caption1" data-x="20" data-y="170" 
					data-speed="700" data-transition="wipeTop">??eea, </div>
					<div data-width="280px" class="iview-caption caption1" data-x="130" data-y="170" 
					data-speed="700" data-transition="wipeBottom">oaeaono?aieaiiua</div>				
					<div data-width="500px" class="iview-caption caption1" data-x="30" data-y="210" 
					data-speed="500" data-transition="wipeTop" style="font-size: 50px">ioe?uoua ie?o nooaaiou</div> -->
				</div>

				<div data-iview:image="/images/slides/5.jpg">
				<!--<div data-width="150px" class="iview-caption caption1" data-x="20" data-y="150" 
					data-speed="700" data-transition="wipeTop">Nooaaiou, </div>
					
					<div data-width="35-px" class="iview-caption caption1" data-x="180" data-y="150" 
					data-speed="700" data-transition="wipeBottom">eioi?ua oioyo o?eouny </div>	
					<div data-width="280px" class="iview-caption caption1" data-x="450" data-y="190" 
					data-speed="900" data-transition="wipeRight" style="font-size: 60px">e o?aony</div> -->				
				</div>

				<div data-iview:image="/images/slides/6.jpg">
				<!--					<div data-width="650px" class="iview-caption caption1" data-x="30" data-y="40" 
					data-speed="700" data-transition="wipeTop" style="font-size: 40px">Eaaeeoeoe?iaaiiua i?aiiaaaaoaee </div>
					<div data-width="550px" class="iview-caption caption1" data-x="160" data-y="90" 
					data-speed="700" data-transition="wipeBottom">e eo nia?aiaiiua iaoiaeee</div>	-->
				</div>
				
				


            </div>


	</div> 


	<div id="main-content">

