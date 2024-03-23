function myfunction(){
    var x =document.getElementById("pass");

    if(x.type === "password"){
        x.type = "text";
    }
    else{
        x.type = "password";
    }
}

function validate(){
    var password = document.getElementById("pass");
    var username = document.getElementById("username");
    if(password.value == 12345678){
        alert("Login Succesfull");
        window.location.replace("html.html");
        return false;
    }
        else{
            alert("Login failed");
        }
}