jQuery(document).ready(function ($) {
	$(".wbn-ovrly-hamburger").click(function () {
		$("#wbn-ovrly-menu").fadeIn(500);
	});

	$(".wbn-ovrly-closeButton").click(function () {
		$("#wbn-ovrly-menu").fadeOut(500);
	});
})