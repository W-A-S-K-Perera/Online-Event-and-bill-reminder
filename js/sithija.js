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

let preveiwContainer = document.querySelector('.view-more');
let previewBox = preveiwContainer.querySelectorAll('.view');

document.querySelectorAll('.ge-container .ge-box .middle .btn').forEach(btn =>{
  btn.onclick = () =>{
    preveiwContainer.style.display = 'flex';
    let name = btn.getAttribute('data-name');
    previewBox.forEach(view =>{
      let target = view.getAttribute('data-target');
      if(name == target){
        view.classList.add('active');
      }
    });
  };
});

previewBox.forEach(close =>{
  close.querySelector('.fa-times').onclick = () =>{
    close.classList.remove('active');
    preveiwContainer.style.display = 'none';
  };
});



//image slider 
let imgBtn = document.querySelectorAll('.img-btn');

imgBtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.circles .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#img-slider1').src = src;
    });
});

let imgBtn1 = document.querySelectorAll('.img-btn1');
imgBtn1.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.circles .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#img-slider2').src = src;
    });
});

let imgBtn2 = document.querySelectorAll('.img-btn2');
imgBtn2.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.circles .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#img-slider3').src = src;
    });
});

let imgBtn3 = document.querySelectorAll('.img-btn3');
imgBtn3.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.circles .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#img-slider4').src = src;
    });
});

let imgBtn4 = document.querySelectorAll('.img-btn4');
imgBtn4.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.circles .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#img-slider5').src = src;
    });
});

let imgBtn5 = document.querySelectorAll('.img-btn5');
imgBtn5.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.circles .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#img-slider6').src = src;
    });
});







 