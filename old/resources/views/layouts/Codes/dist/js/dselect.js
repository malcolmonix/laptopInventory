
$(document).ready(function() {

	var path = 'http://127.0.0.1/POS/index.php/';
	//Change in continent dropdown list will trigger this function and
	//generate dropdown options for county dropdown
	$(document).on('change','#country', function() {
		var country_id = $(this).val();
		if(country_id != "") {
			$.ajax({
				url:path+"/Users/AutoData",
				type:'POST',
				data:{country_id:country_id},
				success:function(response) {
					//var resp = $.trim(response);
					if(response != '') {
						$("#stateoforigin").removeAttr('disabled','disabled').html(response);
						$("#city").attr('disabled','disabled').html("<option value=''>------- Select --------</option>");
					} else {
						$("#stateoforigin, #city").attr('disabled','disabled').html("<option value=''>------- Select --------</option>");
					}
				}
			});
		} else {
			$("#stateoforigin, #city").attr('disabled','disabled').html("<option value=''>------- Select --------</option>");
		}
	});

	//Change in state dropdown list will trigger this function and
	//generate dropdown options for city dropdown
	$(document).on('change','#stateoforigin', function() {
		var state_id = $(this).val();
		if(state_id != "") {
			$.ajax({
				url:path+"/Users/AutoData",
				type:'POST',
				data:{state_id:state_id},
				success:function(response) {
					if(response != '') $("#city").removeAttr('disabled','disabled').html(response);
					else $("#city").attr('disabled','disabled').html("<option value=''>------- Select --------</option>");
				}
			});
		} else {
			$("#city").attr('disabled','disabled').html("<option value=''>------- Select --------</option>");
		}
	});

function readURL(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();
            reader.onload = function (e) {
                $('#profile-img-tag').css('display', "block");
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });


});