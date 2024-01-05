var swiper1 = new Swiper(".mySwiper", {
	slidesPerView: 4,
});

var swiper2 = new Swiper(".mySwiper2", {
	slidesPerView: 1,
	effect: "fade",
	fadeEffect: {
		crossFade: true,
	},
	navigation: {
		nextEl: ".custom-next-icon",
		prevEl: ".custom-prev-icon",
	},
	thumbs: {
		swiper: swiper1,
	},
});

var swiper3 = new Swiper(".mySwiper3", {
	spaceBetween: 40,
	slidesPerView: 1,
	effect: "fade",
	fadeEffect: {
		crossFade: true,
	},
});

//relating first and third sliders
const swipeAllSliders = index => {
	swiper1.slideTo(index);
	swiper2.slideTo(index);
	swiper3.slideTo(index);
};

swiper1.on("slideChange", () => swipeAllSliders(swiper1.activeIndex));
swiper2.on("slideChange", () => swipeAllSliders(swiper2.activeIndex));

//parallax
function onEntry(entry) {
	entry.forEach(change => {
		if (change.isIntersecting) {
			change.target.classList.add("element-show");
		}
	});
}

let observer = new IntersectionObserver(onEntry);
let elements = document.querySelectorAll(".element-animation");
for (let elm of elements) {
	observer.observe(elm);
}
