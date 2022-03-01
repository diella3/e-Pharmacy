var attempt = 3;
function validate(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if(username == "" && password == "") {
        alert("Enter your username and password");
        return false;
    }
    return false;
}
