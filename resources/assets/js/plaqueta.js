$(document).ready(function(){
	$("#menuM").click(function(){
		$(".nav").toggle("fast");
	});

	$("#aparecer").click(function(){
		$(".lightBox").fadeIn("fast");
		$(".lightBoxBg").fadeIn("fast");
	});

	$(".lightBoxBg").click(function(){
		$(this).fadeOut("fast");
		$(".lightBox").fadeOut("fast");
	});

	$("#btnSumir").click(function(){
		$(".lightBox").fadeOut("fast");
		$(".lightBoxBg").fadeOut("fast");
	});
});

function mudarAmar(){
	document.getElementById("plaq").style.background = "url('img/plaquetas/plaqamarela.png') no-repeat center";
	document.getElementById("amarela").style.border = "2px solid #333";
	document.getElementById("vermelho").style.border = "2px solid #fff";
	document.getElementById("roxo").style.border = "2px solid #fff";
	document.getElementById("azul").style.border = "2px solid #fff";
	document.getElementById("verde").style.border = "2px solid #fff";
}
function mudarVerm(plaq){
	document.getElementById("plaq").style.background = "url('img/plaquetas/plaqverm.png') no-repeat center";
	document.getElementById("amarela").style.border = "2px solid #fff";
	document.getElementById("vermelho").style.border = "2px solid #333";
	document.getElementById("roxo").style.border = "2px solid #fff";
	document.getElementById("azul").style.border = "2px solid #fff";
	document.getElementById("verde").style.border = "2px solid #fff";
}
function mudarRoxo(){
	document.getElementById("plaq").style.background = "url('img/plaquetas/plaqroxa.png') no-repeat center";
	document.getElementById("amarela").style.border = "2px solid #fff";
	document.getElementById("vermelho").style.border = "2px solid #fff";
	document.getElementById("roxo").style.border = "2px solid #333";
	document.getElementById("azul").style.border = "2px solid #fff";
	document.getElementById("verde").style.border = "2px solid #fff";
}
function mudarAzul(){
	document.getElementById("plaq").style.background = "url('img/plaquetas/plaqazul.png') no-repeat center";
	document.getElementById("amarela").style.border = "2px solid #fff";
	document.getElementById("vermelho").style.border = "2px solid #fff";
	document.getElementById("roxo").style.border = "2px solid #fff";
	document.getElementById("azul").style.border = "2px solid #333";
	document.getElementById("verde").style.border = "2px solid #fff";
}
function mudarVerde(){
	document.getElementById("plaq").style.background = "url('img/plaquetas/plaqverde.png') no-repeat center";
	document.getElementById("amarela").style.border = "2px solid #fff";
	document.getElementById("vermelho").style.border = "2px solid #fff";
	document.getElementById("roxo").style.border = "2px solid #fff";
	document.getElementById("azul").style.border = "2px solid #fff";
	document.getElementById("verde").style.border = "2px solid #333";
}

$(function(){
	var cat = $('#categ');
	var nav = $('#hMenu');
	$(window).scroll(function(){
		if($(this).scrollTop() > 180){
			nav.addClass("fixar");
		}else{
			nav.removeClass("fixar");
		}
	});
	$(window).scroll(function(){
		if($(this).scrollTop() > 164){
			cat.addClass("fixar");
		}else{
			cat.removeClass("fixar");
		}
	});
});
