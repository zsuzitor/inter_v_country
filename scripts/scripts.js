



// function show_hide_add_form(){
	// var div=document.getElementById('div_form_add_new_county_id');
	
	// if(div.style.height=='30px'){//=='block'
		// div.style.height='100px';
	// }
	// else{
		// div.style.height='30px';
	// }
	
	
// }


function PreloaderAction(show) {
    if (show == true)
        document.getElementById('Main_preloader_id').style.display = 'block';
        else
        document.getElementById('Main_preloader_id').style.display = 'none';
}



function add_new_counry(){
	
	if(!confirm("Уверены?"))
		return;
	
	var dt = {
        'name': document.getElementById('NEW_form_name'),
		'number_of_cities':document.getElementById('NEW_form_number_of_cities'),
		'population':document.getElementById('NEW_form_population'),
		'monarchy':document.getElementById('NEW_form_monarchy')
		
    };
    $.ajax({
        url: "/Add_new_county.php",
        data: dt,
        success: 
		function(result){
			if(result=='false'){
				alert("что то пошло не так");
				return;
			}
			var div_replace=document.getElementById('div_list_country');
			if(div_replace){
				div_replace.innerHTML+=result;
			}
			
		}
		,
        error: function () {
            alert("ошибка добавления");
            PreloaderAction(false);
        },
        beforeSend: function () { PreloaderAction(true); },
        complete: function () { PreloaderAction(false); },
        type: 'POST', dataType: 'html'//html
    });
	
	
	
	
}