const logInForm = document.getElementById("logInForm");    
var errorDivLogIn = document.getElementsByClassName("errorDivLogIn");


logInForm.addEventListener("submit", event => {
    event.preventDefault();
    if (validateLogIn()) { 
        logInForm.submit();  // Only submit the form if validate() returns true (no errors)
    }
});

function validateLogIn(){

    let isValid = true;

    var mail = document.getElementById("logInEmail").value.trim();
    var pass = document.getElementById("logInPassword").value.trim();

    //Checks if input fields are null

if(mail === ''){   
    errorDivLogIn[0].innerHTML = "Please enter your email";
    isValid = false;
}
else{
    errorDivLogIn[0].innerHTML = "";
} 

if(pass === ''){    
    errorDivLogIn[1].innerHTML =  "Please enter your a password";
    isValid = false;
}
else if(pass.length<8){
    errorDivLogIn[1].innerHTML =  "Password must be atleast 8 characters";
    isValid = false;
}
else{
    errorDivLogIn[1].innerHTML = "";
} 

return isValid;

}
