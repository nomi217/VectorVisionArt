$(document).ready(function(){
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
							for(var i =0 ; i< data.length; i++){
														var rowNo = i+1;
														var sale_amount = data[i].sale_amount;
														var customer_id = data[i].customer_id;
														var unique_id = data[i].unique_id;
														var customer_name = data[i].customer_name;
														var totalOtherItemsExcludingthisEntry = data[i].totalOtherItemsExcludingthisEntry+1;
														var sale_datetime = data[i].sale_datetime;
														var totalNumofpaymentSchdule = data[i].totalNumofpaymentSchdule;
														//var totalOtherItemsExcludingthisEntry = data[i].totalOtherItemsExcludingthisEntry;
														var havetodaySchdule  = data[i].havetodaySchdule;
														//////////////classes filter 
														var	havetodaySchduleClass = "";	
														if(havetodaySchdule>0)
														{
																havetodaySchduleClass = "havetodaySchdule-yes";
														}else{
																havetodaySchduleClass = "havetodaySchdule-no";
														}
														var sale_dateonly = data[i].sale_dateonly;
														var haveupcomingSchdule= 0;
														var haveExpiredSchdule= 0;
														var haveExpiredandNotPaid= 0;
														var totalNotPaidSchdule= 0;
														var totalPaidSchdule= 0;


														var haveupcomingSchduleClass= "haveupcomingSchduleClass-no";
														var haveExpiredSchduleClass= "haveExpiredSchduleClass-no";
														var haveExpiredandNotPaidClass= "haveExpiredandNotPaidClass-no";
														var totalNotPaidSchduleClass= "totalNotPaidSchduleClass-no";
														var totalPaidSchduleClass= "totalPaidSchduleClass-no";
														var viewPaymentbuttonCode = '';
														var havePaymentSchdule = "havePaymentSchdule-no";
														var allpaid = "allpaid-yes";

														if(totalNumofpaymentSchdule>0){
															havePaymentSchdule = "havePaymentSchdule-yes";
																haveupcomingSchdule = data[i].haveupcomingSchdule;
																haveExpiredSchdule  = data[i].haveExpiredSchdule;
																haveExpiredandNotPaid = data[i].haveExpiredandNotPaid;
																totalNotPaidSchdule  = data[i].totalNotPaidSchdule;
																 totalPaidSchdule = data[i].totalPaidSchdule;
																		 if(haveupcomingSchdule>0)
																			{haveupcomingSchduleClass= "haveupcomingSchduleClass-YES"; }
																	if(haveExpiredSchdule>0)
																			{haveExpiredSchduleClass= "haveExpiredSchduleClass-YES"; }
																	if(haveExpiredandNotPaid>0)
																			{haveExpiredandNotPaidClass= "haveExpiredandNotPaidClass-YES"; }
																		if(totalNotPaidSchdule>0)
																				{totalNotPaidSchduleClass= "totalNotPaidSchduleClass-YES"; }
																		if(totalPaidSchdule>0)
																				{totalPaidSchduleClass= "totalPaidSchduleClass-YES"; }

																			if(totalNumofpaymentSchdule==totalPaidSchdule){
 																					allpaid = "allpaid-yes";
																			}else{
																					allpaid = "allpaid-no";
																			}

																	viewPaymentbuttonCode = '<a title="View Payment Schdules" href="sale_payment_schudules.php?unique_id='+unique_id+'&customer_id='+customer_id+'"><i class="fa fa-eye"></i></a>';
																
														}	

															var customer_profileBtn = '<a title="View Customer Profile" href="customer_profile.php?customer_id='+customer_id+'"><i class="fa fa-eye"></i></a>';
																var sale_type = data[i].sale_type;
														var viewSalebuttonCode ='<a title="View Sale Record" href="sale_record.php?unique_id='+unique_id+'&totalNumofpaymentSchdule='+totalNumofpaymentSchdule+'&sale_type='+sale_type+'"><i class="fa fa-book"></i></a>' ;
														var printSaleRecord = '<a title ="View or Print Invoice of Sale Record" href="sale_record_invoice.php?unique_id='+unique_id+'&totalNumofpaymentSchdule='+totalNumofpaymentSchdule+'&customer_id='+customer_id+'"><i class="fa fa-print"></i></a>';
													//	if(data[i].sale_type=="accessories_sales"){
														//var j = i+1;

																var row = '<tr class="customer-'+customer_id+' '+haveupcomingSchduleClass+' '+haveExpiredSchduleClass+' '+haveExpiredandNotPaidClass+' '+totalNotPaidSchduleClass+' '+totalPaidSchduleClass+' saletype-'+sale_type+' '+havePaymentSchdule+' '+allpaid+' '+havetodaySchduleClass+' '+sale_dateonly+'"  id="saleRow'+rowNo+'"><td>'+rowNo+'</td><td>'+customer_name+'</td><td>'+sale_datetime+'</td><td class="text-center"><span class="badge badge-info">'+totalOtherItemsExcludingthisEntry+'</span></td><td class="text-center"><span class="badge badge-primary">'+totalNumofpaymentSchdule+'</span></td><td class="text-center"><span class="badge badge-success">'+totalPaidSchdule+'</span></td><td class="text-center"><span class="badge badge-pink">'+haveupcomingSchdule+'</span></td><td class="text-center"><span class="badge badge-purple">'+havetodaySchdule+'</span></td><td class="text-center"><span class="badge badge-danger">'+haveExpiredSchdule+'</span></td><td>'+sale_amount+'</td><td>'+viewPaymentbuttonCode+' '+viewSalebuttonCode+' '+printSaleRecord+' '+customer_profileBtn+'</td></tr>';
															//	console.log(row);
																$("#salestableBody").append(row);

														//}
														
														
										}//end for loop here
											
				}//end success function here
			});
			//end ajax call here


});	//end ready function 