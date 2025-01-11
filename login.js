window.addEventListener("DOMContentLoaded", (event) =>
	{
	
	
	// Sri Krishna

	// ------ START of Function for loginOrSignupForm ------

	const noAccSignUpBtn = document.querySelector('#noAccSignUpBtn');
	const accLogInBtn = document.querySelector('#accLogInBtn');
	const signupForm = document.querySelector('.signupForm');
	const loginForm = document.querySelector('.loginForm');

	noAccSignUpBtn.addEventListener('click',signupFormDisplay);
	accLogInBtn.addEventListener('click',loginFormDisplay);


	function signupFormDisplay(){
		signupForm.style.display = 'flex';
		loginForm.style.display = 'none';	
	}

	function loginFormDisplay(){
		loginForm.style.display = 'flex';
		signupForm.style.display = 'none';		
	}

	// ------ End of Function for loginOrSignupForm ------
	
	// Sri Krishna
	
	});