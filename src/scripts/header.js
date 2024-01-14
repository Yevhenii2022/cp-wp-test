const menu = document.querySelector(".header__nav");
const menuButton = document.querySelector(".burger");
let lastScrollPosition = 0;

menuButton.addEventListener("click", function () {
	this.classList.toggle("active");
	menu.classList.toggle("open");
	document.body.classList.toggle("modal-open");
	menu.addEventListener("click", closeByBgdClick);
});
function closeByBgdClick(e) {
	if (e.target === menu) {
		menu.classList.remove("open");
		menuButton.classList.remove("active");
		document.body.classList.remove("modal-open");
	}
}


//підменю сертифікати
$(document).ready(() => {
	$("#toggleButton").click(() => {
	  $("#container").slideToggle(() => {
		const containerVisible = $("#container").is(":visible");
		const arrowIcon = $("#toggleIcon");
  
		if (containerVisible) {
		  // Якщо контейнер видимий, встановити поворот для SVG
		  arrowIcon.css("transform", "rotate(0deg)");
		} else {
		  // Якщо контейнер прихований, скинути поворот для SVG
		  arrowIcon.css("transform", "rotate(180deg)");
		}
	  });
	});
  });
  

let lastScrollTop = 0;

window.addEventListener('scroll', function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    let header = document.querySelector('.header');

    if (scrollTop > lastScrollTop) {
		
		header.classList.add('hidden');
	} else {
		
		header.classList.remove('hidden');
	}

    if (scrollTop === 0) {
       
        header.classList.remove('scrolled');
    } else {
       
        header.classList.add('scrolled');
    }

    lastScrollTop = scrollTop;
});
