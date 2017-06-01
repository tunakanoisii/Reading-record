$(function(){
	$("#modal_open").click(function(){

		$(this).blur();
		if($("#modal_overlay")[0]) return false;

		$("body").append('<div id="modal_overlay"></div>');
		$("#modal_overlay").fadeIn("slow");

		centeringModalSyncer();

		$("#modal_contents").fadeIn("slow");

		$("#modal_overlay, #modal_close").unbind().click(function(){
			$("#modal_contents").fadeOut("normal", function(){
					$("#modal_overlay").fadeOut("fast", function(){
				$("#modal_overlay").remove();
			});
					});
		});
	});

	$(window).resize(centeringModalSyncer);

//センタリングをする関数
function centeringModalSyncer(){
	var w = $(window).width();
	var h = $(window).height();

	var cw = $("#modal_contents").outerWidth();
	var ch = $("#modal_contents").outerHeight();

	var pxleft = ((w - cw)/2);
	var pxtop = ((h - ch)/2);

	$("#modal_contents").css({"left": pxleft + "px"});
	$("#modal_contents").css({"top": pxtop + "px"});

}
});