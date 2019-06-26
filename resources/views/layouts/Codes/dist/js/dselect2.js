
$(document).ready(function(){
						   
	var path = 'http://127.0.0.1/POS/index.php/';
	//Change in continent dropdown list will trigger this function and
	//generate dropdown options for county dropdown
	$(document).on('change','#country', function() {
		var country_id = $(this).val();
		if(country_id != "") {
			$.ajax({
				url:path+"/Members/AutoData",
				type:'POST',
				data:{country_id:country_id},
				success:function(response) {
					//var resp = $.trim(response);
					if(response != '') {
						$("#estateoforigin").removeAttr('disabled','disabled').html(response);
						$("#ecity").attr('disabled','disabled').html("<option value=''>------- Select --------</option>");
					} else {
						$("#estateoforigin, #ecity").attr('disabled','disabled').html("<option value=''>------- Select --------</option>");
					}
				}
			});
		} else {
			$("#estateoforigin, #ecity").attr('disabled','disabled').html("<option value=''>------- Select --------</option>");
		}
	});

	//Change in state dropdown list will trigger this function and
	//generate dropdown options for city dropdown
	$(document).on('change','#estateoforigin', function() {
		var state_id = $(this).val();
		if(state_id != "") {
			$.ajax({
				url:path+"/Members/AutoData",
				type:'POST',
				data:{state_id:state_id},
				success:function(response) {
					if(response != '') $("#ecity").removeAttr('disabled','disabled').html(response);
					else $("#ecity").attr('disabled','disabled').html("<option value=''>------- Select --------</option>");
				}
			});
		} else {
			$("#ecity").attr('disabled','disabled').html("<option value=''>------- Select --------</option>");
		}
	});
    
	
	
	//Change in state dropdown list will trigger this function and
	//generate dropdown options for city dropdown
	$(document).on('change','#transtype', function() {
		var transtype_id = $(this).val();
		if(transtype_id != "") {
			$.ajax({
				url:path+"/CashItems/LoadItemData",
				type:'POST',
				data:{transtype_id:transtype_id},
				success:function(response) {
					if(response != '') $("#cashitem").removeAttr('disabled','disabled').html(response);
					else $("#cashitem").attr('disabled','disabled').html("<option value=''>------- Select --------</option>");
				}
			});
		} else {
			$("#cashitem").attr('disabled','disabled').html("<option value=''>------- Select --------</option>");
		}
	});
	
});

