
<?php

function One_country_for_list_view_Render($obj){
	?>
	
	<div class='one_country_all'>
	<?php
	
	echo "<div class='one_country_head'>$obj->name
	<div class='one_country_buttons'><button onclick='alert(\"не реализовано\")'>Удалить</button>
	<button onclick='alert(\"не реализовано\")'>Редактировать</button></div>
	</div>";
	?>
	
	<div>
	<?php
	echo "<div><label>Id:</label><span>$obj->id</span></div>";
	echo "<div><label>Количество городов:</label><span>$obj->number_of_cities</span></div>";
		echo "<div><label>Население:</label><span>$obj->population</span></div>";
			echo "<div><label>Монархия?:</label><span>";
			 
			if($obj->monarchy)
				echo "Да";
			else
				echo "Нет";
			echo "</span></div>";
				

	?>
	</div>
	</div>
	
	
<?php	
}

?>