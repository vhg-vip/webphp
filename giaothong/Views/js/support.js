
function resetForm(){
    $('#name').val('');
    $('#phone').val('');
    $('#email').val('');
    $('#content').val('');
}
function sendFormSupport(){
    let support = {
        name: $('#name').val(),
        email: $('#email').val(),
        phone: $('#phone').val(),
        content: $('#content').val()
    }
    let  dataJson= JSON.stringify(support);
    console.log(dataJson);
    $.ajax({    
        type: "POST",
        url: "../controller/sendSupport.php", 
        data:{data_add: dataJson },            
        success: function(data){   
            console.log(data);
            // location.reload();
            if(data === 'ok'){
                $('#notificationModal').modal('show');
            }
        }
    });
}
