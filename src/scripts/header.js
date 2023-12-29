const menu = document.querySelector(".header__nav");
const menuButton = document.querySelector(".burger");

menuButton.addEventListener("click", function () {
	
	menu.classList.toggle("open");
	document.body.classList.toggle("modal-open");
	menu.addEventListener("click", closeByBgdClick);
});
function closeByBgdClick(e) {
	if (e.target === menu) {
		menu.classList.remove("open");
		
		document.body.classList.remove("modal-open");
	}
}
