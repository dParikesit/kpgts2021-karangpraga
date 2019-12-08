$(".gallery").on("click", "img", function() {
	$(".modal-content img").hide();
	$("#" + this.id + "mod").show();
	$(".modal").addClass("is-active");  
});

$(".modal-close").click(function() {
	$(".modal").removeClass("is-active");
});