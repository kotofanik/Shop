$(document).scroll (function () {
    if($(document).scrollTop() > $('header').height() + 10)
        $('nav').addClass('fixed');
    else
        $('nav').removeClass('fixed')
});




    function addItem(form) {

       //var msg   = $('#addItem').serialize();
       // form = form+'';
       
        var msg   = "good_id="+form;

        $.ajax({
            type: 'POST',
            url: 'controller/addItem.php',
            data: msg,
            success: function(data) {
                $('#results').html(data);
            },
            error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });
        location.reload();
    }


function deleteItem(form) {

    // var msg   = $('#addItem').serialize();
    var msg   = "good_id="+form;

    $.ajax({
        type: 'POST',
        url: 'controller/deleteItem.php',
        data: msg,
        success: function(data) {
            //alert($('#results').html(data));
        },
        error:  function(xhr, str){
            alert('Возникла ошибка: ' + xhr.responseCode);
        }
    });
    location.reload();
}


function addOrder() {

     var msg   = $('#createOrder').serialize();


    $.ajax({
        type: 'POST',
        url: 'controller/addOrder.php',
        data: msg,
        success: function(data) {
            //alert(data);
        },
        error:  function(xhr, str){
            alert('Возникла ошибка: ' + xhr.responseCode);
        }
    });
    location = 'http://localhost/eb/arthur';
}

$(function($){
    $("#phone").mask("+375 99 999 99 99");
});


function authorization() {

    var msg   = $('#authorization').serialize();


    $.ajax({
        type: 'POST',
        url: '../controller/authorization.php',
        data: msg,
        success: function(data) {

            location.reload();

        },
        error:  function(xhr, str){
            alert('Вы ввели неверные данные');
        }
    });
   // location.reload();
   // location.reload();
}


function addGoods() {

    var msg   = $('#addGoods').serialize();


    $.ajax({
        type: 'POST',
        url: '../controller/addGoods.php',
        data: msg,
        success: function(data) {
            alert(data);

        },
        error:  function(xhr, str){
            alert('Возникла ошибка: ' + xhr.responseCode);
        }
    });
    //location.reload();
}



function writeMeSubmit(form){

    var formData = new FormData();


    jQuery.each($('#photo')[0].files, function(i, file) {
        formData.append('photo', file);
    });

    //присоединяем остальные поля
    
    formData.append('model', $('input#model').val());
    formData.append('release_date', $('input#release_date').val());
    formData.append('diagonal', $('input#diagonal').val());
    formData.append('scr_resol', $('input#scr_resol').val());
    formData.append('processor', $('input#processor').val());
    formData.append('ram', $('input#ram').val());
    formData.append('type_disk', $('input#type_disk').val());
    formData.append('capacity', $('input#capacity').val());
    formData.append('cost', $('input#cost').val());
    formData.append('video', $('input#video').val());


    //отправляем через ajax
    $.ajax({
        url: "../controller/addGoods.php",
        type: "POST",
        dataType : "json",
        cache: false,
        contentType: false,
        processData: false,
        data: formData, //указываем что отправляем
        success: function(data){

        }
    });

    return false;
}