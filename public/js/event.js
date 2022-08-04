$(document).ready(function(){

    $('.select2').select2();

$("#account_types").hide();
$("#account_details").hide();

$(document).on('change', '#bank', function(ev) {
        $selected_bank=($(this).children("option:selected").val());
        $("#selected_bank").val($selected_bank)
        $("#account_types").show();
    });

    var savingAccount = "<label for='saving_account'>Saving Account Holder Name</label><input type='text' class='form-control' id='saving_account' name='saving_account' placeholder='Saving Account Holder Name'>";
         var creditAccount="<label for='credit_account'>Credit Account Holder Name</label><input type='text' class='form-control' id='credit_account' name='credit_account' placeholder='Credit Account Holder Name'>";
         var currentAccount="<label for='current_account'>current Account Holder Name</label><input type='text' class='form-control' id='current_account' name='current_account' placeholder='current Account Holder Name'>";

        var addIcons="<button type='button' class='btn mt-2' id='add-btn'><img src='/assets/images/plus.png'class='w-h-2float-right'> </button>&nbsp;&nbsp;&nbsp;&nbsp;"
        var deleteIcons="<button type='button'  class='btn' id='remove-btn'><img src='/assets/images/delete.png'  class='float-right'></button>";
        var dynamicHtml ='';

    $(document).on('change', '#account_type', function(ev) {
       
        $("#account_details").show();
        $("div.dynamic-fields").html('');
        $selected_type=($(this).children("option:selected").val());
        $("#selected_type").val($selected_type)
        if($selected_type==1){
            var dynamicHtml=savingAccount+addIcons+deleteIcons;
            $(document).on('click', '#add-btn', function(ev) {
             
                $("#saving_sources").append("<div class='saving mt-2'><label for='saving_source'>Saving Sources</label> <input type='text' class='form-control' name='saving_source' placeholder='Sources for saving'></div>");
            });
            $(document).on('click', '#remove-btn', function(ev) {
                $("#saving_sources .saving:last").remove();
            });
           
        }
        else if($selected_type==3){
            var dynamicHtml=creditAccount+addIcons+deleteIcons;
            $(document).on('click', '#add-btn', function(ev) {
                
                $("#credit_sources").append("<div class='mt-2' id='credit'><label for='credit_source'>Credit Sources</label> <input type='text' class='form-control' name='credit_source' placeholder='Sources for credit'></div>");
            });
            $(document).on('click', '#remove-btn', function(ev) {
                $("#credit_sources #credit:last").remove();
            });
        }
        else {
            var dynamicHtml=currentAccount;
        }
        $("div.dynamic-fields").html(dynamicHtml);
    });

    $("#current_holder").hide();
    $("#old_holder").hide();

    $(document).on('click', '#transfer', function(ev) {
            $("#current_holder").show();
            $("#old_holder").show();
        });
        $(document).on('click', '#cancel', function(ev) {
        $("#current_holder").show();
        $("#old_holder").hide();
    });
});
    