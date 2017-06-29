function removeOperation(operation){
    operation.forEach(function(e){
	if(e['operarionType']=='button'){
	    $('[operationID="'+e['name']+'"]').remove();
	}else if(e['operarionType']=='event'){
	    $('body').undelegate('[operationID="'+e['name']+'"]','click');
	}
    });
}

