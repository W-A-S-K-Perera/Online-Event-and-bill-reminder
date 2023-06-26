// Navigation bar

const navToggler = document.querySelector(".nav-toggler");
navToggler.addEventListener("click", navToggle);

function navToggle() {
   navToggler.classList.toggle("active");
   const nav = document.querySelector(".nav");
   nav.classList.toggle("open");
   if(nav.classList.contains("open")){
       nav.style.maxHeight = nav.scrollHeight + "px";
   }
   else{
       nav.removeAttribute("style");
   }
}



// Ckech the re-entered password

function checkPassword() {
	if (document.getElementById("pwd").value!=document.getElementById("cnfrmpwd").value)
	{
		alert ("Password is incorrect");
		return false;
	}
	else {
		alert ("Success.");
		return true;
	}
}



// Enable the register button 

function enableButton() {
	if (document.getElementById("checkBox").checked){
		document.getElementById ("submitBtn").disabled = false;
	}
	else {
		document.getElementById ("submitBtn").disabled = true;
	}
}