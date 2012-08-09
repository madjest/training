function setUserState(key,value){
    $.ajax({
	url: '/ajax/userstate/set',
	type: 'POST',
	dataType: 'json',
	data: {
	    key: key
	    , 
	    value: value
	}
    });	
}

function flash(text){
    $.jGrowl(text);
}