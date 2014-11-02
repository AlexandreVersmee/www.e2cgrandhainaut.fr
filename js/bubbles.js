$(function() {
						$(document).ready(function()
			{
				var is_smartphone = $("#quizz_title").is(":visible");

				if (is_smartphone) 
				{
					var position_quizz = $("#quizz_title").offset();
					var width_quizz = $("#quizz_title").width();
					var height_quizz = $("#quizz_title").height();

					var position_vitrine = $("#vitrine_title").offset();
					var width_vitrine = $("#vitrine_title").width();
					var height_vitrine = $("#vitrine_title").height();
					
					$("body").append("<div id='quizz_info_bulle'></div>");
					$("#quizz_info_bulle").css("display","none").fadeIn(3000).css("background", "url(images/bulles_quizz.png) no-repeat").css("top", ((height_quizz + position_quizz.top) / 2) + "px").css("left", (width_quizz + position_quizz.left) + "px").css("position","absolute").css("width","305px").css("height","97px").delay("3100").fadeOut(3000);

				
					$("body").append("<div id='vitrine_info_bulle'></div>");
					$("#vitrine_info_bulle").css("display","none").delay("8600").fadeIn(3000).css("background", "url(images/bulles_vitrine.png) no-repeat").css("top", ((height_vitrine + position_vitrine.top) / 2) + "px").css("left", (width_vitrine + position_vitrine.left) + "px").css("position","absolute").css("width","337px").css("height","97px").delay("4000").fadeOut(3000);
				}
			});
		});