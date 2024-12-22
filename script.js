// Sri Krishna

window.addEventListener("DOMContentLoaded", (event) =>
{

const menuBtn = document.querySelector('.menuBtn');
const closeBtn = document.querySelector('.closeBtn');
const navigationBarPhn = document.querySelector('.navigationBarPhn');

menuBtn.addEventListener('click',show);

function show(){
    navigationBarPhn.style.display = 'block';
}

closeBtn.addEventListener('click',hide);

function hide(){
    navigationBarPhn.style.display = 'none';
}

});

// Sri Krishna