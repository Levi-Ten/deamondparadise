// $(document).ready(function() {
//     $("body").css("display", "none");

//     $("body").fadeIn(2000);

// 	$("a.transition").click(function(event){
// 		event.preventDefault();
// 		linkLocation = this.href;
// 		$("body").fadeOut(1000, redirectPage);
// 	});

// 	function redirectPage() {
// 		window.location = linkLocation;
// 	}
// });
const menuIcon = document.querySelector('.menu_burger');

const navbar = document.querySelector('.sidebar');

menuIcon.addEventListener('click', ()=> {
navbar.classList.toggle('change');
})

console.log('hello')
const wrapper = document.querySelector(".wrapper");
window.addEventListener("scroll", checkScroll);
document.addEventListener("DOMContentLoaded", checkScroll);
function checkScroll() {
    let scrollPos = window.scrollY;

    if(scrollPos > 300) {
        wrapper.classList.add('color');
    } 
    else{
        wrapper.classList.remove('color');
    }
    if(scrollPos > 2400) {
        wrapper.classList.add('color2');
    }
    else{
        wrapper.classList.remove('color2');
    }
}

console.log('hello')

// var slideIndex = 0;
// showSlides();

// function showSlides() {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("dot");
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";  
//   }
//   slideIndex++;
//   if (slideIndex > slides.length) {slideIndex = 1}    
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";  
//   dots[slideIndex-1].className += " active";
//   setTimeout(showSlides, 5000); // Change image every 2 seconds
// 
// =======================for admin==================================================
const currentLocation = location.href;
const menuItem = document.querySelectorAll('#sel');

const menuLength = menuItem.length
for(let i = 0; i < menuLength; i++) {
    if(menuItem[i].href === currentLocation){
        menuItem[i].className = "active"
    }
}

console.log('hello')

const tabsBtn = document.querySelectorAll(".btn");
const tabsItems = document.querySelectorAll(".block_desc");
tabsBtn.forEach(function(item) {
	item.addEventListener("click", function(){
		
		let currentBtn = item; 
		let tabId = currentBtn.getAttribute("data-tab");
		let currentTab = document.querySelector(tabId);

		tabsBtn.forEach(function(item){
			item.classList.remove('active');
		});

		tabsItems.forEach(function(item){
			item.classList.remove('active');
		});

		currentBtn.classList.add('active');
		currentTab.classList.add('active');
	});
});

// ---------------------------
window.onload = function(){
    document.getElementById('close').onclick = function(){
        this.parentNode.parentNode.parentNode
        .removeChild(this.parentNode.parentNode);
        return false;
    };
};



console.log('end')
