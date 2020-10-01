console.clear();
console.log(
	"%c Hello! ",
	"color:#8c0;font-size:40px;font-weight:300;background:#000;"
);

// particle effect
document.addEventListener(
	"DOMContentLoaded",
	function() {
		daisyjs(document.getElementById("home"), {
			dotColor: "#bbb",
			lineColor: "#999",
		});
	},
	false
);

// Footer - Copyright
var d = new Date().getFullYear();
document.getElementById("copyright").innerHTML = d;

// mobile nav animation
$(document).ready(function() {
	$("#menu_open").click(function() {
		$(".mob_menu").show();
		$(".nav_back").slideDown();
		$(".mob_menu ul").show("slow");
	});
	$("#menu_close").click(function() {
		$(".mobnav ul").hide("slow");
		$(".nav_back").slideUp();
		$(".mob_menu").slideUp();
	});
	$(".mob_menu ul li a").click(function() {
		$(".mobnav ul").hide("slow");
		$(".nav_back").slideUp();
		$(".mob_menu").fadeOut();
	});
});

// scrollbar
var scrollbar = document.getElementById("scrollbar");
window.onscroll = function() {
	var progress =
		(window.pageYOffset /
			(document.body.scrollHeight - window.innerHeight)) *
		100;
	scrollbar.style.height = progress + "%";
};
// scrollbar end

// owl carousel
$(".owl-carousel").owlCarousel({
	loop: true,
	nav: false,
	dots: false,
	autoplay: true,
	autoplayTimeout: 2000,
	autoplayHoverPause: true,
	responsive: {
		0: {
			items: 3,
		},
		600: {
			items: 5,
		},
		1000: {
			items: 8,
		},
	},
});
// owl carousel end

// slick slider
$(document).ready(function() {
	$(".slick").slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: true,
		autoplay: true,
		autoplaySpeed: 2000,
	});
});
// end
