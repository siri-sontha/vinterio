const form = document.getElementById("form");    
var errorDiv = document.getElementsByClassName("errorDiv");


form.addEventListener("submit", event => {
    event.preventDefault();
    if (validateSignUp()) {  // Only submit the form if validate() returns true (no errors)
        form.submit();  // Manually submit the form
    }
});

function validateSignUp(){

    let isValid = true;

    var username = document.getElementById("signUpName").value.trim();
    var email = document.getElementById("signUpEmail").value.trim();
    var phno = document.getElementById("signUpPhNo").value.trim();
    var pswd = document.getElementById("signUpPassword").value.trim();

    //Checks if input fields are null
if(username === ''){   
    errorDiv[0].innerHTML =   "Please enter your name";
    isValid = false;
}
else if(username.length>30){
    errorDiv[0].innerHTML =   "Name cannot be longer than 30 characters";
    isValid = false;
}
else{
    errorDiv[0].innerHTML = "";
} 

if(email === ''){   
    errorDiv[1].innerHTML = "Please enter your email";
    isValid = false;
}
else{
    errorDiv[1].innerHTML = "";
} 

if(phno === ''){   
    errorDiv[2].innerHTML =  "Please enter a phone number";
    isValid = false;
}
else if(phno.length!=10){
    errorDiv[2].innerHTML =  "Enter a valid phone number";
    isValid = false;
}
else{
    errorDiv[2].innerHTML = "";
} 

if(pswd === ''){    
    errorDiv[3].innerHTML =  "Please set a password";
    isValid = false;
}
else if(pswd.length<8){
    errorDiv[3].innerHTML =  "Password must be atleast 8 characters";
    isValid = false;
}
else{
    errorDiv[3].innerHTML = "";
} 

return isValid;

}
