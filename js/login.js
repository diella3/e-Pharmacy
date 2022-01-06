var attempt = 3;
function validate(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "admin" && password == "admin"){
        alert ("Login successfully");
        window.location = "../Home.html";
        return false;
    }
    else if(username == null && password == null){
        alert ("Enter your username and password");
        return false;
    }
    else{
        attempt --;
        alert("Your username and password was incorrect, you have "+ attempt+ " attempts left");
        if( attempt == 0){
            document.getElementById("username").disabled = true;
            document.getElementById("password").disabled = true;
            document.getElementById("submit").disabled = true;
        return false;
        }    
    }
    /**/
    return false;
}
