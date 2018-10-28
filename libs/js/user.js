//Variables
var addUser = document.getElementById('btn-signup');
var formNewUser = document.getElementById('formNewUser');
var action = formNewUser.getAttribute('action');


//Events
addUser.addEventListener('click',function(e){
    e.preventDefault();
    createUser();
});

//Create User
function createUser(){
    var formData = new FormData(formNewUser);
    for([key,value] of formData.entries()){
        console.log(key + ": " + value);
    }
    var xhr = new XMLHttpRequest();
    xhr.open('POST',action,true);
    xhr.setRequestHeader('X-Requested-With','XMLHttpRequest');
    xhr.onreadystatechange = function(){
        //CHECAR
        if(xhr.readyState == 4 && xhr.status == 200){
            var result = xhr.responseText;
            var status = xhr.status;
            console.log("Response" + result);
            var json = JSON.parse(result);
            console.log(json);
            alert("Account created successfuly! " + status);
        }else{
            console.log(JSON.parse(status));
            alert("An error has been ocurred status: "+ status);
            //return;
        }
    }
    xhr.send(formData);
    history.back();
}


