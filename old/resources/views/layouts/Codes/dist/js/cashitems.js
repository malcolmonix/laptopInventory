
$(document).ready(function() {

	var path = 'http://127.0.0.1/POS/index.php/';
	$(document).on('change','#transtype', function() {
		var transtype_id = $(this).val();
		if(transtype_id != "") {
			$.ajax({
				url:path+"/CashItems/LoadItemData",
				type:'POST',
				data:{transtype_id:transtype_id},
				success:function(response) {
					//var resp = $.trim(response);
					if(response != '') {
						$("#cashitem").removeAttr('disabled','disabled').html(response);
					} else {
						$("#cashitem").attr('disabled','disabled').html("<option value=''>------- Select222 --------</option>");
					}
				}
			});
		} else {
			$("#cashitem").attr('disabled','disabled').html("<option value=''>------- Select333 --------</option>			         ");
		}
	});
});