
<?php
function LayoutRenderStart($title){
	echo "<html>
<head>
<title>$title</title>
<link href='/content/site.css' rel='stylesheet'>
</head>
<body>
<div class='main_header'>
<h2 class='header_hello'>HELLO WORLD</h2>
</div>

";
	
	
}


function LayoutRenderEnd(){
	
	echo "</body>
</html>";
	
}


?>