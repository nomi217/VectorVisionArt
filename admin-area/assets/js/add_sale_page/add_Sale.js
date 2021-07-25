 $(document).ready(function(){
                $(document).on('change','.choose_saleType',function(){
        
                        var sale_type = $(this).find(':selected').val();
                        var rowNum = extract_numer($(this).attr('id'));
                        reset_inputs(rowNum);
                            //ajax call here
                            $.ajax({

                                    url:'actions/fetch.php',
                                    method:'post',
                                    data:{
                                        sale_type:sale_type,
                                        salepage:1,
                                    },
                                    dataType:'json',
                                    success:function(data){
                                            // console.log(data);
                                            if(data.length>0){
                                                var str2= "";
                                                var button_for_showing_list='';
                                                if(sale_type=="accessory"){
                                                     
                                                          var str = '<input type="text"  id="selection'+rowNum+'"class="choosen_items" placeholder="search accessory...""><input type="hidden" name="selection[]" readonly id="selectedProduct'+rowNum+'"><ul class="all_items" id="SearchedItem'+rowNum+'">';
                                                }else if(sale_type=="new_mobile"){
                                                    // button_for_showing_list='<button class="btn btn-danger products_list" type="button"  data-id="new_mobile"  id="'+sale_type+'" ><i class="fa  fa-navicon"></i></button>';
                                                          var str = '<input type="text"  id="selection'+rowNum+'" class="choosen_items" placeholder="search new mobile...""><input type="hidden" name="selection[]" readonly id="selectedProduct'+rowNum+'"><ul class="all_items" id="SearchedItem'+rowNum+'">';
                                                }else if(sale_type=="used_mobile"){
                                                    // button_for_showing_list='<button class="btn btn-danger products_list" type="button"  data-id="used_mobile"  id="'+sale_type+'"><i class="fa  fa-navicon"></i></button>';
                                                    var str = '<input type="text"  id="selection'+rowNum+'" class="choosen_items" placeholder="search used mobile...""><input type="hidden" name="selection[]" readonly id="selectedProduct'+rowNum+'"><ul class="all_items" id="SearchedItem'+rowNum+'">';
                                                }else if(sale_type=="repairing_items"){
                                                  //   button_for_showing_list='<button class="btn btn-danger products_list" type="button"  data-id="repairing_items"  id="'+sale_type+'" ><i class="fa  fa-navicon"></i></button>';
                                                    var str = '<input type="text"  id="selection'+rowNum+'" class="choosen_items"  placeholder="search reparing items...""><input type="hidden" name="selection[]" readonly id="selectedProduct'+rowNum+'"><ul class="all_items" id="SearchedItem'+rowNum+'">';
                                                }
                                                $(".products_list").remove();
                                                button_for_showing_list='<button title="View All '+sale_type+' Lists"  class="btn btn-danger products_list" style="    margin-left: 5px;" type="button"  id="'+sale_type+'"><i class="fa  fa-navicon"></i></button>';
                                                          $('.product_info').remove();
                                                 $("#general"+rowNum).empty().append(str+str2+'</ul>'+button_for_showing_list+' <button class="btn btn-info product_info" type="button"  data-id="'+rowNum+'" title="View Item Details" id="" style="display:none;"><i class="fa fa-eye"></i></button>');
                                            }else{
                                                   // $("#choose_customer").hide();
                                                   if(sale_type=="accessory"){
                                                              $("#general"+rowNum).empty().append("<p style='color:red; font-size: 16px;'>There is no accessory in the stock</p>");
                                                    } else if(sale_type=="new_mobile"){
                                                                 $("#general"+rowNum).empty().append("<p style='color:red; font-size: 16px;'>There is no mobile in the stock</p>");
                                                    }else if(sale_type=="used_mobile"){
                                                             $("#general"+rowNum).empty().append("<p style='color:red; font-size: 16px;'>There is no used mobile in the stock</p>");
                                                    }else if(sale_type=="repairing_items"){
                                                       $("#general"+rowNum).empty().append("<p style='color:red; font-size: 16px;'>There is no reparing item in the stock</p>");
                                                   }
                                            }  //end else here 
                                           

                                    }

                            });     //end ajax call here   
                });    //end change function here 

                /////when admin will choose an item from the list
                // $(document).on('click','.choosen_items li',function(){
                //      var rowNum = extract_numer($(this).attr('id'));
                //     var selected_product = $(this).find(':selected').val();
                //      var sale_type = $("#sale_type"+rowNum).find(':selected').val();
                //               // alert(selected_product);
                //                  $(".product_info").attr("id",selected_product.trim());
                //                  $('.product_info').show();
                //                    $("#priceDiv"+rowNum).show();
                //                  $("#quantityDiv"+rowNum).show();
                //                  $("#totalAmount"+rowNum).show();
               
                //                  $.ajax({
                //                 url:'actions/fetch.php',
                //                 method:'post',
                //                 data:{
                //                       page:'salepage',
                //                       product_info:1,
                //                       item_id:selected_product,
                //                       sale_type :sale_type,
                //                 },
                //                 dataType:'json',
                //                 success:function(data){
                //                   if(sale_type=="accessory"){
                //                       $("#item_quantity"+rowNum).attr("max",parseInt(data.leftStock));
                //                   }else if(sale_type=="new_mobile"){
                //                        $("#item_quantity"+rowNum).attr("max",parseInt(data.leftStock)); 
                //                        $(".product_info").trigger( "click" );
                //                   }else if(sale_type == "used_mobile"){
                //                        $("#item_quantity"+rowNum).attr("max",parseInt(data.mobile_quantity)); 
                //                   }  else if(sale_type == "repairing_items"){
                //                       $("#item_quantity"+rowNum).attr("max",parseInt(data.leftStock));
                //                   } 
                //                 }  //end success function here
                //          });  //end ajax call  
                // });

                ///when admin will click on the view button then he will able to see the product info
                $(document).on('click','.product_info',function(e){
                 // alert("ABC");
                          var  item_id= $(this).attr('id');
                            var rowNum = extract_numer($(this).attr('data-id'));
                          var sale_type = $("#sale_type"+rowNum).find(':selected').val();
                          // console.log("Item_id "+item_id);
                          // console.log("rowNum "+rowNum);
                          // console.log("sale_type "+sale_type);
                         $.ajax({
                                url:'actions/fetch.php',
                                method:'post',
                                data:{
                                      page:'salepage',
                                      product_info:1,
                                      item_id:item_id,
                                      sale_type :sale_type,
                                },
                                dataType:'json',
                                success:function(data){
                                 // console.log(data);
                                  if(sale_type=="accessory"){
                                      var table  = '<table class="table table-hover table-bordered accessory_table"><tr><td class="td_heading">Accessory Name</td><td>'+data.acc_name+'</td></tr><tr><td class="td_heading">Accessory Mini Check</td><td>'+data.acc_mini_check+'</td></tr><tr><td class="td_heading">Quantity Left</td><td>'+data.leftStock+'</td></tr><tr><td class="td_heading">Accessory Price</td><td>'+data.perItemPrice+'</td></tr></table><div class="row"><h4>More Details About '+data.acc_name+'</h4><p class="accessory_details">'+data.acc_detail+'</p></div>';

                                      $("#modalLabel").empty().html("View "+data.acc_name+" Details");
                                      $("#modalDataMapping").empty().append(table);
                                      $("#custom-width-modal").modal('show');
                                   }
                                  else if(sale_type=="new_mobile"){

                                     var table  = '<table class="table table-hover table-bordered accessory_table"><tr><td class="td_heading">Mobile Name</td><td>'+data.mob_name+'</td></tr><tr><td class="td_heading">Mobile Mini Check</td><td>'+data.mob_mini_check+'</td></tr><tr><td class="td_heading">Quantity Left</td><td>'+data.leftStock+'</td></tr><tr><td class="td_heading">Mobile Price</td><td>'+data.perItemPrice+'</td></tr></table><div class="row"><h4>More Details About '+data.mob_name+'</h4><p class="accessory_details">'+data.mob_moredetils+'</p></div>';

                                     var table2 = "";
                                       //console.log(" total related_items are :"+ data['related_items'].length);
                                     if(data['related_items'].length==0){
                                            table2 = "";
                                    }else{
                                         table2 = '<div class="row"><h3 clas="text-center">View Related Accessories</h3><table class="table table-hover table-bordered accessory_table"><thead><th>Accessory Name</th><th>Quantity</th><th>Price</th><th>Mini Check</th></thead><tbody>';
                                        var row = "";
                                        for(var i = 0 ; i<data['related_items'].length; i++ ){
                                          row = row+'<tr id="related_acc'+data['related_items'][i].related_acc_id+'"><td>'+data['related_items'][i].related_acc_name+'</td><td>'+data['related_items'][i].related_accessory_leftStock+'</td><td>'+data['related_items'][i].related_accessory_price+'</td><td>'+data['related_items'][i].mini_check+'</td></tr>';
                                        }
                                        table2 = table2+row+'</tbody></table></div>';
                                    }//end else condition here
                                   
                                    $("#modalLabel").empty().html("View "+data.mob_name+" Details");

                                      $("#modalDataMapping").empty().append(table).append(table2);
                                      $("#custom-width-modal").modal('show');    
                                  }else if(sale_type == "used_mobile"){
                                         var table  = '<table class="table table-hover table-bordered accessory_table"><tr><td class="td_heading">Mobile Name</td><td>'+data.mobile_name+'</td></tr><tr><td class="td_heading">Mobile Purchase Date</td><td>'+data.mobile_purchasing_datetime+'</td></tr><tr><td class="td_heading">Have warantee?</td><td>'+data.purchased_mob_waranty+'</td></tr><tr><td class="td_heading">Mobile Price</td><td>'+data.mobile_price+'</td></tr><td class="td_heading">Mobile Location</td><td>'+data.location_id+'</td></tr></table>';

                                          var table2  = '<table class="table table-hover table-bordered accessory_table"><tr><td class="td_heading">Have Charger?</td><td>'+data.purchased_mob_havecharger+'</td></tr><tr><td class="td_heading">Have Box?</td><td>'+data.purchased_mob_havebox+'</td></tr><tr><td class="td_heading">Have USD Cable?</td><td>'+data.purchased_mob_haveusdcable+'</td></tr><tr><td class="td_heading">Have Head Phones?</td><td>'+data.purchased_mob_haveheadphones+'</td></tr><tr><td class="td_heading">Overall Test Performance</td><td>'+data.test_overall_performance+'</td></tr></table>';

                                         var end_div ='<div class="row text-center"><h4>More Details About '+data.mobile_name+'</h4><p class="accessory_details">'+data.pruchase_mob_details+'</p><a class="btn btn-purple" href="purchased_mobile_detail.php?used_mob_id='+data.purchased_mob_id+'" title="View Mobile Details?"><i class="fa fa-eye"></i> View More Info. About Mobile</a></div>';



                                    $("#modalLabel").empty().html("View "+data.mobile_name+" Details");
                                      $("#modalDataMapping").empty().append(table+table2+end_div);
                                      $("#custom-width-modal").modal('show'); 

                                  }  else if(sale_type=="repairing_items"){

                                        var table  = '<table class="table table-hover table-bordered repairingitems_table"><tr><td class="td_heading">Repairing Item Name</td><td>'+data.ritem_name+'</td></tr><tr><td class="td_heading">Repairing Item Quantity Left</td><td>'+data.leftStock+'</td></tr><tr><td class="td_heading">Repairing Item Price</td><td>'+data.perItemPrice+'</td></tr><tr><td class="td_heading">Items Mini Check</td><td>'+data.ritems_mini_check+'</td></tr><tr><td class="td_heading">Box Number</td><td>'+data.ritems_boxnumber+'</td></tr></table><div class="row"><h4>More Details About '+data.ritem_name+'</h4><p class="accessory_details">'+data.ritem_details+'</p></div>';
                                            $("#modalLabel").empty().html("View "+data.ritem_name+" Details");
                                              $("#modalDataMapping").empty().append(table);
                                              $("#custom-width-modal").modal('show'); 
                                      } 
                                }  //end success function here

                         });  //end ajax call  
                        // return false; 
                });

                  ///show the customer_info button 
          $(document).on('change','#choosen_customer',function(){
                var cus_id = $(this).find(':selected').val();
                $(".customer_info").attr("href","customer_profile.php?customer_id="+cus_id.trim());
                $(".customer_info").show();
                $('#saleTable').show();
               $("#btnDIV").show();
          });

          ///for price and quanitty combination formulas
          $(document).on('keyup change','.dependentVariables',function(e){
              if($(this).val().trim()==0){
                    $(this).val("");
              }else{
                       var rowNum = extract_numer($(this).attr('id')); 
                         var price = $("#price_item"+rowNum).val().trim();
                         var quanitty = $("#item_quantity"+rowNum).val().trim();
                            if(price.length>0  && quanitty.length>0 ){
                                    var str = price * quanitty;
                                    $("#total_amount"+rowNum).val(str);
                            }else if(price.length==0 && quanitty.length>0){
                                 $("#total_amount"+rowNum).val("");
                            }else if(price.length>0 &&  quanitty.length==0 ){
                               $("#total_amount"+rowNum).val("");
                            }
              }//end else here 
          }); 


                //for adding row making full dynamic

                $(document).on('click','.addFieldSale',function(){
                    var rowNum =  extract_numer($(this).attr('id')); 
                    //first to check the fields are filled or not
                    if($("#price_item"+rowNum).val().length==0 || $("#item_quantity"+rowNum).val().length==0){
                      $("#error_msg").empty().append("<div class='text-center alert alert-danger'>Fill the others fields in "+rowNum+" row</div>");
                    }else{
                       $("#error_msg").empty();
                    var nextRow = parseInt(rowNum)+1;
                     $("#tableBodySales").append('<tr id="salerow'+nextRow+'"><td><div class="form-group"><select name="sale_type[]" class="choose_saleType" id="sale_type'+nextRow+'"><option value="" selected disabled>Nothing Selected</option><option value="accessory">Accessory</option><option value="new_mobile">New Mobile</option><option value="used_mobile">Used Mobile</option><option value="repairing_items">Reparing Items</option></select></div></td><td><div class="form-group" id="general'+nextRow+'"></div></td><td><div class="form-group price_div" id="priceDiv'+nextRow+'"   style="display:none;"><input type="number" name="price_item[]" id="price_item'+nextRow+'"  required class=" dependentVariables " min="1"></div></td><td><div class="form-group quantity_div" id= "quantityDiv'+nextRow+'" style="display:none;" ><input type="number" name="item_quantity[]" id="item_quantity'+nextRow+'"  required class=" dependentVariables quantityChecker"  min="1"></div></td><td><div class="form-group quantity_div" id="totalAmount'+nextRow+'" style="display:none;"> <input type="text" name="total_amount" id="total_amount'+nextRow+'"  required class="" min="1" readonly></div></td><td><button class="btn btn-purple addFieldSale" id="addBTN'+nextRow+'"><i class="fa fa-plus"></i></button> <button class="btn btn-danger removeFieldSale" id="removeBTN'+nextRow+'"><i class="fa fa-times"></i></button></td>');                     
                       $(this).css('pointer-events','none').css('opacity','0.5'); 
                     }
                });

                //for removing the row
                $(document).on('click','.removeFieldSale',function(){
                        var rowNum =  extract_numer($(this).attr('id')); 
                        $("#salerow"+rowNum).fadeOut();
                });


                $(document).on('keyup change','.quantityChecker',function(){
                    var quantity_input_id = extract_numer($(this).attr('id'));
                    var max = parseInt($(this).attr('max'));
                    var typed_value = parseInt($(this).val());
                    var item_selected = $("#selection"+quantity_input_id).find(":selected").text();
                          if(typed_value  <  max || typed_value == max){
                          }else{
                                       $("#error_msg").empty().append("<div class='alert alert-danger'>"+item_selected+" quanitty in stock is less than "+typed_value+".</div>");
                                         $(this).val("");
                                          $("#total_amount"+quantity_input_id).val("");
                                          setTimeout(function(){
                                              $("#error_msg").empty();
                                          },2000);
                          }
                });


                //for the second table
                $(document).on('click','#getTotal',function(){
                         $("#second_table").show();
                      var rowCount = $('#tableBodySales tr').length ;
                      var totalAmount  = 0;
                                       for(var i =1; i <= rowCount ; i++){
                                              totalAmount = totalAmount + parseInt($("#total_amount"+i).val());
                                       }   //end for loop here  
                                       var calculated_row  =  '<tr id="calculatedRow"><td><input type="text" id="alltotal"   value="'+totalAmount+'" class="form-control" readonly></td><td><input type="text" id="all_paidAmount" class="form-control onlyNumbers" required></td><td><input type="text" id="allremainingAmount" class="form-control" readonly></td><td><select class="form-control" id="payment_status" style="display:none;"></select></td><td id="payment_actionBTN"></td></tr>';
                                       $("#secondTableBody").empty().append(calculated_row);
                });
                

                $(document).on('keyup change','#all_paidAmount',function(){
                      var totalAmount =   parseInt($("#alltotal").val());
                      var paid_amount  = extract_numer($(this).val());

                      if(paid_amount < totalAmount  || paid_amount == totalAmount ){
                                 $("#allremainingAmount").val(totalAmount  - paid_amount);
                      }else{
                          $("#error_msg").empty().append("<div class='alert alert-danger'>The paid amount must be equal to or less than the total calculated amount.</div>");
                          $("#allremainingAmount").val("");
                                $("#payment_status").empty();
                          $(this).val("");
                                    setTimeout(function(){
                                              $("#error_msg").empty();
                                          },2000);
                      }
                });

                $(document).on('keyup','#all_paidAmount',function(){
                      $("#payment_status").show();
                      var allremainingAmount  = $("#allremainingAmount").val();
                      if(allremainingAmount!=0){
                          $("#payment_status").empty().append('<option value = "payment_with_schdule" id="paymentWITHSCH">Payment With Schdule</option>');
                           // $("#alPAIDOPTON").hide();
                              $("#schduleRow").show();
                            $("#payment_actionBTN").empty();
                           // $("#paymentWITHSCH").show();
                              append_paymentschduleRow(1);    //for appending the first row
                      }else{
                         $("#payment_status").empty().append('<option value = "all_paid" id="alPAIDOPTON">All Paid</option>');
                            // $("#paymentWITHSCH").hide();
                            // $("#alPAIDOPTON").show();
                               $("#schduleRow").hide();
                             $("#payment_actionBTN").empty().append('<button class="btn btn-primary" id="saveRecord" name="saveSaleRecord" type="submit"><i class="fa fa-save"></i></button>');
                            append_paymentschduleRow(2);  //for removing the first row
                      }
                      // $("#payment_status option[value='none']").change();
                }); 

                // $(document).on('click','#setSchduleforCustomer',function(){
                //          $("#schduleRow").show();
                // });


                // $(document).on('change','#payment_status',function(){
                //       var payment_status = $(this).find(':selected').val();
                //       if(payment_status=="all_paid" ){

                //           if($("#allremainingAmount").val() != 0 ){
                //              $("#error_msg").empty().append("<div class='alert alert-danger'>For all paid operation the remaining amount value must be zero.</div>");
                //                      $("#all_paidAmount").focus();
                //                        setTimeout(function(){
                //                               $("#error_msg").empty();
                //                           },5000);
                              
                //           }else{
                //                         $("#payment_actionBTN").empty().append('<button class="btn btn-primary" id="saveRecord"><i class="fa fa-book"></i></button>');
                //               }
                //       } else if(payment_status == "payment_with_schdule"){
                //                 $("#payment_actionBTN").empty().append('<button class="btn btn-primary" id="setSchduleforCustomer"><i class="md md-event"></i></button>');
                //       }


                // });




                //////////////for payment schdule table and rows here is dynamic code
                $(document).on('click',".addPaymentSch",function(e){

                      var rowNum = parseInt(extract_numer($(this).attr('id'))) +1;
                    
                      var prev_row  = rowNum-1;
                        var currentRow = extract_numer($(this).attr('id'));
                    
                    if($("#choosen_time"+currentRow).val().length ==  0 ){
                        $("#choosen_time"+currentRow).focus();
                        $("#error_msg2").empty().append("<div class='alert alert-warning'>Please enter the time.</div>");
                          setTimeout(function(){
                                  $("#error_msg2").empty();
                            },5000);  
                    }else if($("#choosen_date"+currentRow).val().length == 0){
                            $("#choosen_date"+currentRow).focus();
                        $("#error_msg2").empty().append("<div class='alert alert-warning'>Please enter the date.</div>");
                        setTimeout(function(){
                                  $("#error_msg2").empty();
                            },5000);  
                    }else if($("#choosenAmount"+currentRow).val().length==0){
                           $("#choosenAmount"+currentRow).focus();
                        $("#error_msg2").empty().append("<div class='alert alert-warning'>Please enter the amount which has been schduled on this day.</div>");
                        setTimeout(function(){
                                  $("#error_msg2").empty();
                            },5000);  
                    }else{
                            $("#addPaymentSchduleBTN"+prev_row).remove();
                    $("#removePaymentSchduleBTN"+prev_row).remove();
                      $("#stepsTableBody").append('<tr id="paymentSchduleRow'+rowNum+'"><td><div class="form-group bootstrap-timepicker" ><input type="date"  id="choosen_date'+rowNum+'" name="choosen_date[]" placeholder="mm/dd/yyyy"  class="form-control" required ></div></td><td><div class="form-group bootstrap-timepicker" ><input type="time"   id="choosen_time'+rowNum+'" name="choosen_time[]"   class="form-control" style="" required /></div></td><td> <div class="form-group"><input type="number" name="choosen_amount[]" id="choosenAmount'+rowNum+'"class="form-control choosenAmounter onlyNumbers" min="1"></div> </td><td><div class="form-group"><input id="leftAmount'+rowNum+'" class="form-control" readonly></div></td><td id = "row'+rowNum+'_tdlast'+rowNum+'"><button class="btn btn-purple addPaymentSch" id="addPaymentSchduleBTN'+rowNum+'"><i class="fa fa-plus"></i></button> <button class="btn btn-danger removePaymentSch" id="removePaymentSchduleBTN'+rowNum+'"><i class="fa fa-times"></i></button></td></tr>  ');
                    }
                      
                  
                    
                      return false;
                });

                ////////////delete payment schdule row
                $(document).on('click','.removePaymentSch',function(e){
                    var id = extract_numer($(this).attr('id'));
                    $("#paymentSchduleRow"+id).remove();
                         return false;
                });

                $(document).on('keyup change','.choosenAmounter',function(){
                       var allremainingAmount = 0 ;
                      var enteredValue  =parseInt($(this).val());
                      var rowNum = parseInt(extract_numer($(this).attr('id')));
                      // alert(rowNum);
                      var prev_row = rowNum-1;
                      if(rowNum == 1){
                                 allremainingAmount = parseInt($("#allremainingAmount").val());
                      }else if(rowNum > 1){
                               allremainingAmount = parseInt($("#leftAmount"+prev_row).val());
                      }
                      // console.log("allremainingAmount="+allremainingAmount);
                      // console.log("enteredValue="+enteredValue);
                      if(enteredValue > allremainingAmount){
                           // console.log("entered value is greater than remaining");
                            $("#error_msg2").empty().append("<div class='alert alert-danger'>Enter value must be less then or equal to the total remaining amount</div>");
                             
                            setTimeout(function(){
                                  $("#error_msg2").empty();
                            },5000);  
                             $(this).val("");
                            $("#leftAmount"+rowNum).val("");

                      }else{
                                                      //  console.log("entered value is lesser than remaining");
                              var diff = allremainingAmount -  enteredValue; 
                                      
                                    if(diff==0){
                                        $("#addPaymentSchduleBTN"+rowNum).hide();
                                        //  $("#payment_actionBTN").empty().append('<button class="btn btn-primary" id="saveRecord" name="saveSaleRecord" type="submit"><i class="fa fa-save"></i></button>');
                                          $("#saveRecord").remove();

                                        $("#row"+rowNum+"_tdlast"+rowNum).append(' <button class="btn btn-primary" id="saveRecord" name="saveSaleRecord" type="submit"><i class="fa fa-save"></i></button>');
                                        $("#removePaymentSchduleBTN"+rowNum).remove();
                                          $("#leftAmount"+rowNum).val(diff);

                                    }else if(diff>0){
                                       $("#saveRecord").remove();
                                      $("#addPaymentSchduleBTN"+rowNum).show();
                                      $("#leftAmount"+rowNum).val(diff);

                                    } else{
                                         $("#leftAmount"+rowNum).val("");
                                           $(this).val("");
                                               $("#error_msg2").empty().append("<div class='alert alert-danger'>Enter value must be less then or equal to the left amount</div>");
                                                 
                                                setTimeout(function(){
                                                      $("#error_msg2").empty();
                                                },5000);
                                    }

                                   // console.log("DIFF is "+diff);
                                      
                      }
                      //   console.log(" row "+rowNum); 
                });


                /////////submiting the form
                // $(document).on('submit','#sale_form',function(e){
                //     console.log($(this).serialize());
                //     return false;
                // }) ;







            $(document).on('keyup','.onlyNumbers',function(e){
                        if (/\D/g.test(this.value))
                        {
                          // Filter non-digits from input value.
                          this.value = this.value.replace(/\D/g, '');
                        }
                });




              function append_paymentschduleRow(a){
                        if(a==1)
                               $("#stepsTableBody").empty().append('<tr id="paymentSchduleRow1"><td><div class="form-group bootstrap-timepicker" ><input type="date"   name="choosen_date[]" id="choosen_date1" class="form-control" required></div></td><td><div class="form-group bootstrap-timepicker" ><input type="time"   name="choosen_time[]"  id="choosen_time1" class="form-control " style=""  required/></div></td><td><div class="form-group"><input type="number" name="choosen_amount[]" id="choosenAmount1"class="form-control choosenAmounter onlyNumbers" min="1"></div></td><td><div class="form-group"><input id="leftAmount1" class="form-control" readonly></div></td><td id="row1_tdlast1"><button class="btn btn-purple addPaymentSch" id="addPaymentSchduleBTN1"><i class="fa fa-plus"></i></button></td></tr>  ');
                          else
                              $("#stepsTableBody").empty();
              }


              function extract_numer(str){
                return str.replace(/[^0-9]/g,'');
              }



                function reset_inputs(rowNum){
                    $("#item_quantity"+rowNum).val("");
                    $("#price_item"+rowNum).val("");
                    $("#total_amount"+rowNum).val("");
                }


            //       jQuery(".choosen_items").select2({
            //         width:'100%'
            // });

            $(document).on('keyup change','.choosen_items',function(){
                var searchTerm = $(this).val().trim();
                var rowNum = extract_numer($(this).attr('id'));
                if(searchTerm.length>0){
                      var category = $("#sale_type"+rowNum).find(':selected').val();
                      
                                 //$('.product_info').show();
                                //ajax call 
                                $.ajax({
                                      url:"actions/fetch.php",
                                      data:{
                                        searchTerm:searchTerm,
                                        category:category,
                                        searchItem:1,
                                      },
                                      method:'post',
                                      dataType:'json',
                                      success:function(response){
                                           var len = response.length;
                                              $("#SearchedItem"+rowNum).empty();
                                           if(len==0){
                                                  $("#SearchedItem"+rowNum).append("<li value='' disabled style='pointer-events:none;    background-color: #111312;'>"+searchTerm+" Not Found</li>");
                                           }else{ 


                                                    for( var i = 0; i<len; i++){
                                                          var item_id = response[i]['id'];
                                                          var name = response[i]['name'];
                                                          $("#SearchedItem"+rowNum).append("<li value='"+item_id+"'>"+name+"</li>");
                                                    }  //end for loop here

                                                     // $("#SearchedItem"+rowNum+" li").bind("click",function(){
                                                     //             setText(this,rowNum);
                                                     //   });



                                                     // $(document).on('click','#SearchedItem'+rowNum,function(){
                                                     //           setText(this,rowNum);
                                                     // })


                                           }//end else here
                                         
                                      },

                                }); 


                                //end ajax call
                               

                }else{
                        $("#SearchedItem"+rowNum).empty();
                }
            });

            //for mapping text on the input field

            $(document).on('click','.all_items li',function(){
                var parentID = extract_numer($(this).closest('ul').attr('id'));
                $("#selection"+parentID).val($(this).text());
                $("#selectedProduct"+parentID).val($(this).val());
                 $(".product_info").show();
                $(".product_info").attr("id",$(this).val());
                $("#SearchedItem"+parentID).empty();
                $("#priceDiv"+parentID).show();
                $("#quantityDiv"+parentID).show();
                $("#totalAmount"+parentID).show();

                var selected_product  = $(this).val();
                var sale_type = $("#sale_type"+parentID).find(':selected').val();
                  $.ajax({
                                url:'actions/fetch.php',
                                method:'post',
                                data:{
                                      page:'salepage',
                                      product_info:1,
                                      item_id:selected_product,
                                      sale_type :sale_type,
                                },
                                dataType:'json',
                                success:function(data){
                                    $(".product_info").trigger( "click" );
                                  if(sale_type=="accessory"){
                                      $("#item_quantity"+parentID).attr("max",parseInt(data.leftStock));
                                  }else if(sale_type=="new_mobile"){
                                       $("#item_quantity"+parentID).attr("max",parseInt(data.leftStock)); 
                                     //  $(".product_info").trigger( "click" );
                                  }else if(sale_type == "used_mobile"){
                                       $("#item_quantity"+parentID).attr("max",parseInt(data.mobile_quantity)); 
                                      
                                  }  else if(sale_type == "repairing_items"){
                                      $("#item_quantity"+parentID).attr("max",parseInt(data.leftStock));
                                  } 
                                }  //end success function here
                         });  //end ajax call  







            });

            $(document).on('click','.products_list',function(){
                  var sale_type = $(this).attr('id');
                  $.ajax({
                      url:'actions/fetch.php',
                      data:{
                          fetchProductslists:1,
                          sale_type:sale_type,
                      },
                      dataType:'json',
                      method:'post',
                      success:function(data){

                        if(sale_type=="repairing_items"){
                                $("#modalLabel").empty().append('All Repairing Items');
                              if(data.length>0){

                                  var table_head = '<table class="table table-bordered"><thead><th>Item Name</th><th>Item Price</th><th>Left Stock</th><th>Mini Check</th><th>Box Number</th></thead><tbody>';
                                    var row = '';
                                    for(var i=0;i<data.length;i++){
                                        var r1 = '<tr><td>'+data[i].ritem_name+'</td>';
                                        var r2 = '<td>'+data[i].perItemPrice+'</td>';
                                        var r3 = '<td>'+data[i].leftStock+'</td>';
                                         var r5 = '<td>'+data[i].ritems_mini_check+'</td></tr>';
                                          var r4 = '<td>'+data[i].ritems_boxnumber+'</td>';
                                        row = row+r1+r2+r3+r4+r5;
                                    }
                                  var full_table = table_head+row+'</tbody></table>';     
                                  $("#modalDataMapping").empty().append(full_table);
                                   $("#custom-width-modal").modal('show');
                              }else{
                                    $("#modalDataMapping").empty().append('<p style="color:red;">There is no reparing items.</p>');
                                     $("#custom-width-modal").show('modal');
                              }

                        }else if(sale_type=="used_mobile"){
                          // console.log(data);
                           $("#modalLabel").empty().append('All Used Mobiles');
                             if(data.length>0){
                                  var table_head = '<table class="table table-bordered"><thead><th>Mobile Name</th><th>Mobile Price</th><th>Purchasing Date</th><th>Warrantee</th><th>Location ID</th><th>Actions</th></thead><tbody>';
                                   var row = '';
                                    for(var i=0;i<data.length;i++){
                                        var r1 = '<tr><td>'+data[i].mobile_name+'</td>';
                                        var r2 = '<td>'+data[i].mobile_price+'</td>';
                                        var r3 = '<td>'+data[i].pruchase_date+'</td>';
                                        if(data[i].purchased_mob_waranty_flag==0)
                                             var r4 = '<td>No Warrantee</td>';
                                           else{
                                               var r4 = '<td>'+data[i].purchased_mob_waranty+'</td>';
                                           }
                                            var r5 = '<td>'+data[i].location_id+'</td>';
                                             var r6 = '<td><a title="View Mobile Details?" href="purchased_mobile_detail.php?used_mob_id='+data[i].purchased_mob_id+'" class="btn btn-info"><i class="fa fa-eye"></i></a></td></tr>';
                                        row = row+r1+r2+r3+r4+r5+r6;
                                    }//end fo rloop here
                                     var full_table = table_head+row+'</tbody></table>';     
                                       $("#modalDataMapping").empty().append(full_table);
                                       $("#custom-width-modal").modal('show');
                             }else{
                                 $("#modalDataMapping").empty().append('<p style="color:red;">There is no used mobiles in stock.</p>');
                                     $("#custom-width-modal").show('modal');
                             }
                        }else if(sale_type=="new_mobile"){
                             $("#modalLabel").empty().append('All New Mobiles');
                              if(data.length>0){
                                   var table_head = '<table class="table table-bordered"><thead><th>Mobile Name</th><th>Mobile Price</th><th>Left Stock</th><th>Mini Check</th></thead><tbody>';
                                   var row = '';
                                    for(var i=0;i<data.length;i++){
                                        var r1 = '<tr><td>'+data[i].mob_name+'</td>';
                                        var r2 = '<td>'+data[i].perItemPrice+'</td>';
                                        var r3 = '<td>'+data[i].leftStock+'</td>';
                                          var r4 = '<td>'+data[i].mob_mini_check+'</td>';
                                        row = row+r1+r2+r3+r4;
                                    }
                                  var full_table = table_head+row+'</tbody></table>';     
                                  $("#modalDataMapping").empty().append(full_table);
                                   $("#custom-width-modal").modal('show');
                              }else{
                                    $("#modalDataMapping").empty().append('<p style="color:red;">There is no new mobiles.</p>');
                                     $("#custom-width-modal").show('modal');
                              }
                        }else if(sale_type=="accessory"){
                              $("#modalLabel").empty().append('All Mobile Accessories');
                              if(data.length>0){
                                   var table_head = '<table class="table table-bordered"><thead><th>Acc Name</th><th>Acc Price</th><th>Left Stock</th><th>Mini Check</th></thead><tbody>';
                                   var row = '';
                                    for(var i=0;i<data.length;i++){
                                        var r1 = '<tr><td>'+data[i].acc_name+'</td>';
                                        var r2 = '<td>'+data[i].perItemPrice+'</td>';
                                        var r3 = '<td>'+data[i].leftStock+'</td>';
                                          var r4 = '<td>'+data[i].acc_mini_check+'</td>';
                                        row = row+r1+r2+r3+r4;
                                    }
                                  var full_table = table_head+row+'</tbody></table>';     
                                  $("#modalDataMapping").empty().append(full_table);
                                   $("#custom-width-modal").modal('show');
                              }else{
                                    $("#modalDataMapping").empty().append('<p style="color:red;">There is no mobile accessories.</p>');
                                     $("#custom-width-modal").show('modal');
                              }
                        }
                      }
                  });

            });

            // function setText(element,rowNum){

            //        var value = $(element).text();
            //         var id = $(element).val();
            //         $("#selection"+rowNum).val(value); 
            //         $("#general"+rowNum).append();
            //         $("#SearchedItem"+rowNum).empty();
            // }

    });//end ready function here  