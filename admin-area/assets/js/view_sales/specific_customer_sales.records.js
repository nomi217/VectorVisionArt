$(document).ready(function(){=
			//start ajax call here
			$.ajax({
				method:'post',
				data:{
							pageName:'specific_customer',
							customer_id : parseInt($("#cus_id").val()),
				},
				dataType:'json',
				url:'actions/fetch.php',
				success:function(data){

				}//end success function here
			});
			//end ajax call here


});	//end ready function 