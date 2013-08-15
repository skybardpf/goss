$(document).ready(function(){
    var doc_number = $('#IdentityDocument_number');
    var doc_type = $('#IdentityDocument_type_id');

    doc_number.change(change_number);
    doc_type.change(change_number);

    function change_number(){
        var type = doc_type.val();
        var number = doc_number.val();
        if (type != '' && number != ''){
            get_consumer_data(type, number);
        }
    }

    function get_consumer_data(type, number){
        Loading.show();
        $.ajax({
            type: 'GET',
            dataType: "json",
            url: '/ticket/_get_consumer_data/',
            data: {
                type: type,
                number: number
            }
        })
        .done(function(data, success) {
            if (success == 'success'){
                if (!data.success){
                    alert(data.error);
                } else if(data.result){
                    $('#Consumer_surname').val(data.result.surname);
                    $('#Consumer_name').val(data.result.name);
                    $('#Consumer_patronymic').val(data.result.patronymic);
                    $('#Consumer_mobile').val(data.result.mobile);
                }
            }
        })
        .fail(function() {
        })
        .always(function(){
            Loading.hide();
        });
    }
});