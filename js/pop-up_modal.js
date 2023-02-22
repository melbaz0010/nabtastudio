const open = document.getElementById('open');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');
const scroll = document.getElementById('scroll');

open.addEventListener('click',() => {
    modal_container.classList.add('show');
    document.getElementById("scroll").style.overflow = "hidden";
});

close.addEventListener('click',() => {
    modal_container.classList.remove('show');
    document.getElementById("scroll").style.overflow = "scroll";
});