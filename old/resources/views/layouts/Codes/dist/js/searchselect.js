
$(document).ready(function() {

	var path = 'http://127.0.0.1/POS/index.php/';
	//Change in continent dropdown list will trigger this function and
	//generate dropdown options for county dropdown
	$(document).on('change','#selectoption', function() {
		var option_id = $(this).val();
		if(option_id != "") {
			$.ajax({
				url:path+"/Search/AutoData",
				type:'POST',
				data:{option_id:option_id},
				success:function(response) {
					//var resp = $.trim(response);
					if(response != '') {
						$("#searchoptions").removeAttr('disabled','disabled').html(response);
					} else {
						$("#searchoptions").attr('disabled','disabled').html("<option value=''>------- Select --------</option>");
					}
				}
			});
		} else {
			$("#searchoptions").attr('disabled','disabled').html("<option value=''>------- Select --------</option>");
		}
	});
});