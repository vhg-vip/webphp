function isEmail(email) {
    if(email == '') return true;
    let regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
function isPhoneNumber(phone){
    if(phone == '') return true;
    if(phone.length > 10) return false;
    else{
        let regex =  /([0-9]{10})/;
        return regex.test(phone);
    }
}

function updateProfile(id){
    console.log(id);
    let user = {
        name: $(`#name`).val(),
        email: $(`#email`).val(),
        password: $(`#password`).val(),
        phone: $(`#phone`).val(),
        age: $(`#age`).val(),
        address: $(`#address`).val(),
        fullname: $(`#fullname`).val(),
        gender: $(`#gender`).val(),
        birth: $(`#birth`).val(),
        job: $(`#job`).val(),
    }
    // console.log(user);
    if(!isEmail(user.email)){
        $('.error').html('Email chưa đúng');
    } 
    else if(!isPhoneNumber(user.phone)){
        $('.error').html('Số điện thoại chưa đúng')
    }
    else{
        var  userJson= JSON.stringify(user);
        $.ajax({    
            type: "GET",
            url: "../controller/updateUser.php", 
            data:{userid: id, user_update: userJson},            
            success: function(data){   
                console.log(data);
                location.reload();
            }
        });
    }
}

function changePassword(id){
    
    console.log(id);
    var p = $('#password').val();
    var old = $('#old-password').val(), newpw = $('#new-password').val(), cf_newpw = $('#comfirm-new-password').val();
    if(old !== p){
        $('#msg').html('Mật khẩu không đúng');
    }
    else if(newpw !== cf_newpw){
        $('#msg').html('Mật khẩu không khớp');
    }
    else{
        $.ajax({    
            type: "GET",
            url: "../controller/changePassword.php", 
            data:{userid: id, new_password: newpw },            
            success: function(data){   
                console.log(data);
                location.reload();
            }
        });
        
    }
}
