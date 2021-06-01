function showSidebar(){
    $('.sidebar').toggleClass('hide-sidebar');
}
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

function deleteUser(id){
    $.ajax({    
        type: "GET",
        url: "../controller/deleteUser.php", 
        data:{userid:id},            
        dataType: "html",                  
        success: function(data){   
            // $('#msg').html(data);
            // console.log(data);
            location.reload();
        }
    });
}

function editUser(id){
    console.log(id)
    let user = {
        name: $(`#name${id}`).val(),
        email: $(`#email${id}`).val(),
        password: $(`#password${id}`).val(),
        phone: $(`#phone${id}`).val(),
        age: $(`#age${id}`).val(),
        address: $(`#address${id}`).val(),
        fullname: $(`#fullname${id}`).val(),
        gender: $(`#gender${id}`).val(),
        birth: $(`#birth${id}`).val(),
        job: $(`#job${id}`).val(),
    }
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

function deleteLoiViPham(id){
    $.ajax({    
        type: "GET",
        url: "../controller/deleteLoi.php", 
        data:{userid:id},            
        dataType: "html",                  
        success: function(data){   
            // $('#msg').html(data);
            console.log(data);
            location.reload();
        }
    });
}

function editLoiViPham(id){
    // console.log(id)
    let violation = {
        bienso: $(`#bienso${id}`).val(),
        loivipham: $(`#loi${id}`).val(),
        diadiem: $(`#diadiem${id}`).val(),
        thoigian: $(`#time${id}`).val(),
        hinhthuc: $(`#hinhthuc${id}`).val(),
        mucphat: $(`#mucphat${id}`).val(),
        trangthai: $(`#status${id}`).val()
    }
    let  dataJson= JSON.stringify(violation);
    // console.log(violation);
    let check = true;
    for(let i in violation){
        if(violation[i]===''){
            check = false;
        }
    }
    if(check){
        $.ajax({    
            type: "GET",
            url: "../controller/updateLoi.php", 
            data:{userid: id, data_update: dataJson },            
            success: function(data){   
                console.log(data);
                location.reload();
            }
        });
    }
    
}

function addLoiViPham(){
    let violation = {
        bienso: $(`#bienso`).val(),
        loivipham: $(`#loi`).val(),
        diadiem: $(`#diadiem`).val(),
        thoigian: $(`#time`).val(),
        hinhthuc: $(`#hinhthuc`).val(),
        mucphat: $(`#mucphat`).val(),
        trangthai: $(`#status`).val()
    }
    let  dataJson= JSON.stringify(violation);
    let check = true;
    console.log(dataJson);
    for(let i in violation){
        if(violation[i]===''){
            check = false;
        }
    }
    if(check){
        $.ajax({    
            type: "POST",
            url: "../controller/addLoi.php", 
            data:{data_add: dataJson },            
            success: function(data){   
                console.log(data);
                location.reload();
            }
        });
    }
}

function deleteSupport(id){
    console.log(id)
    $.ajax({    
        type: "GET",
        url: "../controller/deleteSupport.php", 
        data:{supportid: id},            
        dataType: "html",                  
        success: function(data){   
            // $('#msg').html(data);
            console.log(data);
            location.reload();
        }
    });
}

function editSupport(id){
    let support = {
        name: $(`#support-name${id}`).val(),
        email: $(`#support-email${id}`).val(),
        phone: $(`#support-phone${id}`).val(),
        content: $(`#support-content${id}`).val(),
        status: $(`#support-status${id}`).val(),
    }
    console.log(support);
    let  dataJson= JSON.stringify(support);
    let check = true;
    for(let i in support){
        if(support[i]===''){
            check = false;
        }
    }
    if(check){
        $.ajax({    
            type: "GET",
            url: "../controller/updateSupport.php", 
            data:{support_id: id, data_update: dataJson },            
            success: function(data){   
                console.log(data);
                location.reload();
            }
        });
    }
}
