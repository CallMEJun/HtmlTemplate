$(function(){
	var countries = [];
    $.each({"BD": "Bangladesh","bs":"sss"}, function(k, v) {
        countries.push({id: k, text: v});
    }); 
    console.log(company)
    $('#country').editable({
        source: countries,
        select2: {
            width: 200,
            placeholder: 'Select country',
            allowClear: true
        } 
    });   

});