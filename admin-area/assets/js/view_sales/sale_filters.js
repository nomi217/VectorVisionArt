$(document).ready(function(){
	$(document).on('change','#filter_saleType',function(){
			var filterval = $(this).find(':selected').val();
			//var totalRows = $("#salestableBody tr").length;
			if(filterval=="accessory"){
				$("#salestableBody tr").fadeOut();
				$(".saletype-accessories_sales").fadeIn();
			}else if(filterval=="new_mobile"){
					$("#salestableBody tr").fadeOut();
				$(".saletype-new_mobile_sales").fadeIn();
			}
			else if(filterval=="used_mobile"){
				$("#salestableBody tr").fadeOut();
					$(".saletype-used_mobile_sales").fadeIn();
			}
				else if(filterval=="repairing_items"){
					$("#salestableBody tr").fadeOut();
						$(".saletype-reparing_items_sales").fadeIn();
				}
			else if(filterval=="all_sales_types"){
					$("#salestableBody tr").fadeIn();
			}
	});

	$(document).on('change','#filter_customerName',function(){
			var customer_id = parseInt($(this).find(':selected').val());
			if(customer_id==0){
							$("#salestableBody tr").fadeIn();
				}else{
							$("#salestableBody tr").fadeOut();
							$(".customer-"+customer_id).fadeIn();
				}
			
	});

	$(document).on('change','#filter_paymentSchedule',function(){
		var payment_sch = $(this).find(':selected').val();
					if(payment_sch=="all"){
								$("#salestableBody tr").fadeIn();
					}else if(payment_sch=="no Paymentsch"){
								$("#salestableBody tr").fadeOut();
								$(".havePaymentSchdule-no").fadeIn();
					}else if(payment_sch=="upcoming"){
						$("#salestableBody tr").fadeOut();
						$('.haveupcomingSchduleClass-YES').fadeIn();
					}else if(payment_sch=="expired"){
							$("#salestableBody tr").fadeOut();
							$(".haveExpiredSchduleClass-YES").fadeIn();
					}else if(payment_sch=="paid"){
							$("#salestableBody tr").fadeOut();
							$(".allpaid-yes").fadeIn();
					}else if(payment_sch=="havetodaySchdule"){
								$("#salestableBody tr").fadeOut();
							$(".havetodaySchdule-yes").fadeIn();
					}
		
	});

	/////for the dates filter
			function toTimestamp(strDate){
			   var datum = Date.parse(strDate);
			   return datum/1000;
			}	

	$(document).on('change keyup','.dates',function(){
			var startDate  = $("#salestart_date").val();
			var endDate = $("#end_date").val();
			// var compareDate = moment("15/02/2013", "DD/MM/YYYY");
            var startDate   = moment(startDate, "YYYY-MM-DD");
            var endDate     = moment(endDate, "YYYY-MM-DD");
  			
			if(startDate.length==0 || endDate.length==0){
					$("#error_msg").empty().append('<div class="alert alert-danger">Please Specify The Start & End Date of Sale.</div>');
			}else{
				$("#error_msg").empty();
				          var itr = moment.twix(new Date(startDate),new Date(endDate)).iterate("days");
            var range=[];
            while(itr.hasNext()){
              //  console.log(itr.next().toDate());
                range.push(itr.next().toDate())
            }
							//console.log(range);
								if(range.length>0)
									{$("#salestableBody tr").fadeOut();

										   for(var t=0; t<range.length; t++)
					        				   { 
									          				var finalDate = dateFormat(range[t], "mm/dd/yyyy").toString();
									          				var d = toTimestamp(finalDate);
									          				$('.'+d).fadeIn();
					           				 }
									}

					 

			}
	});

});