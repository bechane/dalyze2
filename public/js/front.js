$(function () {
	//Hide palce holder on focus

	$("[ placeholder ]")
		.focus(function () {
			$(this).attr("data-text", $(this).attr("placeholder"));
			$(this).attr("placeholder", "");
		})
		.blur(function () {
			$(this).attr("placeholder", $(this).attr("data-text"));
		});
	//confirm delete member
	$(".confirm").click(function () {
		return confirm("are u sure to delete this person");
	});
});

//
//
//
//
//switch between login
$(".login-page h1 span").click(function () {
	$(this).addClass("selected").siblings().removeClass("selected");
	$("login-page form").hide();
	$("." + $(this).data("class")).show(200);
});
document.querySelector(".img-btn").addEventListener("click", function () {
	document.querySelector(".cont").classList.toggle("s-signup");
});

//
//
//
//

$(".live-name").keyup(function () {
	$(".live-priview .caption h3").text($(this).val());
});

$(".live-desc").keyup(function () {
	$(".live-priview .caption p").text($(this).val());
});
$(".live-price").keyup(function () {
	$(".live-priview .price-tag ").text("$ " + $(this).val());
});
