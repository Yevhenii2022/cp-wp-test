document.addEventListener("DOMContentLoaded", function () {
	var titleElement = document.getElementById("principlesTitle");

	if (titleElement) {
		var originalText = titleElement.textContent;
		var modifiedText = originalText.substring(0, 14);
		var remainingText = originalText.substring(14);

		var modifiedHTML =
			'<span style="color: rgba(255, 255, 255, 0.45);">' + modifiedText + "</span>" + remainingText;

		titleElement.innerHTML = modifiedHTML;
	}
});

document.addEventListener("DOMContentLoaded", function () {
	var titleElement = document.getElementById("expectationTitle");

	if (titleElement) {
		var originalText = titleElement.textContent;
		var modifiedText =
			originalText.substring(0, 38) +
			'<span style="color: rgba(103, 107, 112, 0.31);">' +
			originalText.substring(38, 53) +
			"</span>" +
			originalText.substring(53);

		titleElement.innerHTML = modifiedText;
	}
});

document.addEventListener("DOMContentLoaded", function () {
	var titleElement = document.getElementById("partnerTitle");

	if (titleElement) {
		var originalText = titleElement.textContent;
		var modifiedText = originalText.substring(0, 7);
		var remainingText = originalText.substring(7);

		var modifiedHTML =
			'<span style="color: rgba(103, 107, 112, 0.31);">' + modifiedText + "</span>" + remainingText;

		titleElement.innerHTML = modifiedHTML;
	}
});
