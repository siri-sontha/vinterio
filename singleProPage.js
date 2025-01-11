window.addEventListener("DOMContentLoaded", (event) =>
	{
	
	
	// Sri Krishna
	
	var proImg = document.querySelector('#proImg');
	var a = document.getElementById("imgOne");
	var b = document.getElementById("imgTwo");
	var c = document.getElementById("imgThree");
	
	a.addEventListener('click',changeOne);
	b.addEventListener('click',changeTwo);
	c.addEventListener('click',changeThree);
	
	 function changeOne(){
		proImg.src = a.src;
	 }
	
	 function changeTwo(){
		proImg.src = b.src;
	}
	
	function changeThree(){
		proImg.src = c.src;
	}
	
	
	// ------ End of Function for Changing the image in products.html file ------
	
	// Sri Krishna
	
	});