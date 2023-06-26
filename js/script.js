
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

var slide = document.getElementById("slider");
var btn1 = document.getElementById("btn1");
var btn2 = document.getElementById("btn2");
var btn3 = document.getElementById("btn3");
var btn4 = document.getElementById("btn4");

btn1.onclick = function(){
    slide.style.transform = "translateX(0px)";
}
btn2.onclick = function(){
    slide.style.transform = "translateX(-100%)";
}
btn3.onclick = function(){
    slide.style.transform = "translateX(-200%)";
}
btn4.onclick = function(){
    slide.style.transform = "translateX(-300%)";
}