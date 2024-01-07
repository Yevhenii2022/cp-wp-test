$(document).ready(function () {
	// Hide all acc-body elements initially
	$(".acc2-body").hide();

	$(".toggle-btn2").on("click", function () {
		var accordionItem = $(this).closest(".acc2-item");
		var accordionContent = accordionItem.find(".acc2-body");
		var toggleBtn = $(this);

		accordionContent.slideToggle(1000, function () {
			toggleBtn.text(accordionContent.is(":visible") ? "-" : "+");
		});

		// Закриваємо інші блоки
		accordionItem.siblings().find(".acc2-body").slideUp(1000);
		accordionItem.siblings().find(".toggle-btn2").text("+");
	});
});
