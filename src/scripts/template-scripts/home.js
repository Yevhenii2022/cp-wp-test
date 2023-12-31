document.addEventListener("DOMContentLoaded", function () {
	const circles = document.querySelectorAll(".circle");

	circles.forEach(circle => {
		const popup = circle.querySelector(".popup");

		circle.addEventListener("mouseenter", () => {
			popup.classList.add("fadeIn");
		});

		circle.addEventListener("mouseleave", () => {
			popup.classList.remove("fadeIn");
		});
	});
});
