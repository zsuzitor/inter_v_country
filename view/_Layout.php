
<?php
// header('Content-Type: text/html; charset=utf-8');
function LayoutRenderStart($title){
	echo "<html>
<head>
<title>$title</title>";
?>
<meta charset="utf-8" /> <html lang="ru">

<link href='/content/site.css' rel='stylesheet'>


<script src='/scripts/scripts.js'></script>


<script src='scripts/jquery-3.3.1.js'></script>
</head>
<body>
<div class='main_header'>
<div id="Main_preloader_id" class="Main_preloader"></div>
<h2 class='header_hello'>HELLO WORLD</h2>
</div>


	
<?php	
}


function LayoutRenderEnd(){
	
	echo "<div class='main_footer'></div></body>
</html>";
	
}


?>