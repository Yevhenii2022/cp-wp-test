$(document).ready(function () {
	$("#toggleAccordion").on("click", function () {
		$("#accordeon").slideToggle(2000);
		var buttonText = $(this).text();
		$(this).text(buttonText === "Читати більше" ? "Сховати" : "Читати більше");
	});

	$(".toggle-btn").on("click", function () {
		var accordionItem = $(this).closest(".acc-item");
		var accordionContent = accordionItem.find(".acc-body");
		var toggleBtn = $(this);

		accordionContent.slideToggle(1000, function () {
			toggleBtn.text(accordionContent.is(":visible") ? "-" : "+");
		});

		// Закриваємо інші блоки
		accordionItem.siblings().find(".acc-body").slideUp(1000);
		accordionItem.siblings().find(".toggle-btn").text("+");
	});
});
