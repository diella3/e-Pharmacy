function validate()
{
    var username = document.registration.username;
    var password = document.registration.password;
    var confirmpassword = document.registration.confirmpassword;
    var firstname = document.registration.firstname;
    var lastname = document.registration.lastname;
    var address = document.registration.address;
    var zip = document.registration.zip;
    var email = document.registration.email;
    var genderm = document.registration.mgender;
    var genderf = document.registration.fgender;
    var gendero = document.registration.ogender; 
 
    if(username_validation(username,8,16) == true
    && password_validation(password,8,25) == true
    && confirmpassword_validation(confirmpassword,password) == true
    && firstname_validation(firstname) == true
    && lastname_validation(lastname) == true
    && address_validation(address) == true
    && zip_validation(zip) == true
    && email_validation(email) == true
    && gender_validation(genderm,genderf, gendero) == true){
        alert("Your registration was succsessful! You will be redirected to the main page.");
        window.location = ".home-page/Home.html"
    }
    return false;
} 
function username_validation(username,min,max)
{
    var username_length = username.value.length;
    if (username_length == 0){
        alert("The username field should not be empty");
        username.focus();
        return false;
    }
    if(username_length >= max || username_length < min){
        alert("Username's length should be between "+min+" to "+max);
        username.focus();
        return false;
    }
    return true;
}
function password_validation(password,min,max)
{
    var password_length = password.value.length;
    if (password_length == 0){
        alert("The password field should not be empty");
        password.focus();
        return false;
    }
    if(password_length >= max || password_length < min){
        alert("Passwords's length should be between "+min+" to "+max);
        password.focus();
        return false;
    }
    return true;
}
function confirmpassword_validation(confirmpassword,password)
{
    if (confirmpassword.value == password.value){
        return true;
    }
    else
    {
        alert("Passwords don't match");
        password.focus();
        return false;
    }
}
function firstname_validation(firstname){ 
    var letters = /^[A-Za-z]+$/;
    if(firstname.value.match(letters))
    {
        return true;
    }
    else{
        alert("First name must have alphabetical characters only.");
        firstname.focus();
        return false;
    }
}
function lastname_validation(lastname)
{ 
    var letters = /^[A-Za-z]+$/;
    if(lastname.value.match(letters)){
        return true;
    }
    else{
        alert("Last name must have alphabetical characters only.");
        lastname.focus();
        return false;
    }
}
function address_validation(address)
{
    var letters = /^[0-9a-zA-Z]+$/;
    if(address.value.match(letters))
    {
        return true;
    }
    else
    {
        alert("Address is invalid. Please retype it.");
        address.focus();
        return false;
    }
}
function zip_validation(zip)
{ 
    var numbers = /^[0-9]+$/;
    if(zip.value.match(numbers))
    {
        return true;
    }
    else
    {
        alert("Zip code must be numerical characters only.");
        zip.focus();
        return false;
    }
}
function email_validation(email)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email.value.match(mailformat))
    {
        return true;
    }
    else
    {
        alert("Email is invalid. Please retype it.");
        email.focus();
        return false;
    }
}
function gender_validation(genderm,genderf, gendero)
{
    x=0;
    if(genderm.checked){
        x++;
    }
    if(genderf.checked){
        x++; 
    }
    if(gendero.checked){
        x++; 
    }
    if(x==0)
    {
        alert("Please check your gender.");
        genderm.focus();
        return false;
    }
    else{
        return true;
    }
}
    
 