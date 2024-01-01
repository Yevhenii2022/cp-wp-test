document.addEventListener("DOMContentLoaded", function () {
	const circles = document.querySelectorAll(".circle");

	circles.forEach(circle => {
		const popup = circle.querySelector(".popup");

		circle.addEventListener("mouseenter", () => {
			// Перевірка, чи popup поміщається вправо
			const rect = popup.getBoundingClientRect();
			if (window.innerWidth - rect.right < 0) {
				// Якщо не поміщається, змінюємо властивість left
				popup.style.left = "-175px";
			}

			// Перевірка для медіа-запиту
			if (window.innerWidth - rect.right < 0 && window.innerWidth <= 766) {
				popup.style.left = "-144px";
			}

			popup.classList.add("fadeIn");
		});

		circle.addEventListener("mouseleave", () => {
			popup.classList.remove("fadeIn");
		});
	});
});
