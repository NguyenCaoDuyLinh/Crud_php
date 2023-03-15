const header = document.querySelector("header");
window.addEventListener("scroll",function(){
	header.classList.toggle("sticky", window.scrollY > 80)
});
let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');
menu.onclick=() =>{
	menu.classList.toggle('bx-x');
	navlist.classList.toggle('open');
};
window.onscroll=() =>{
	menu.classList.remove('bx-x');
	navlist.classList.remove('open');
};
const sr= ScrollReveal({
	origin: 'top',
	distance: '80px',
	duration: 2500,	
	reset: false
})
const icon = document.querySelector('.bx-search');
const search = document.querySelector('.search');
icon.onclick = function(){
	search.classList.toggle('active');
}
let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
	arrow[i].addEventListener("click", (e)=>{
	let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
	arrowParent.classList.toggle("showMenu");
	});
}
sr.reveal ('.home-text',{delay:300});
sr.reveal ('.home-img',{delay:400});
sr.reveal ('.container',{delay:300});
sr.reveal ('.middle-text',{});
sr.reveal ('.row-btn,.shop-content',{delay:300});
