$(document).ready(function(){

	var effect = "drop";
	var options = {};

	$("#perguntas1").hide();
	$("#perguntas2").hide();
	$("#continuar").hide();
	$("h3").hide();
	$("#myProgress").hide();

	$("#inicio").click(function(){
		$("#inicio").hide();
		$("#myProgress").show();

	    var elem = document.getElementById("myBar"); 
	    var width = 1;
	    var id = setInterval(frame, 50);
	    function frame() {
	        if (width >= 100) {
	            clearInterval(id);
	            $("#myProgress").hide();
	        	$("#perguntas1").fadeIn(500); 
	        } else {
	            width++; 
	            elem.style.width = width + '%'; 
	        }
	    }
	});	

	$(function() {
	  	$("#selectable").selectable({
	    	selected: function(event, ui) {
		      	if ($(ui.selected).is('#s4')){
		        	$(ui.selected).css('background', 'green');
		      	}else{
		      		$(ui.selected).css('background', 'orange');
		      	}
	    	}
	  	});
	});

	$("#p1").click(function(){
		$("#r1").toggle(effect, options, 500);
	});
	$("#p2").click(function(){
		$("#r2").toggle(effect, options, 500);
	});
	$("#p3").click(function(){		
		$("#r3").toggle(effect, options, 500);
		$("#continuar").fadeIn(500);
	});
	$("#continuar").click(function(){
		$("#perguntas2").fadeIn(500);
	});
	$("#carro").click(function(){
		alert("Errado! Tenta Outra Vez!");
		$("#carro").fadeTo(1000, 0.1);
	});
	$("#mota").click(function(){
		alert("Errado! Tenta Outra Vez!");
		$("#mota").fadeTo(1000, 0.1);
	});
	$("#aviao").click(function(){
		alert("Errado! Tenta Outra Vez!");
		$("#aviao").fadeTo(1000, 0.1);
	});
	$("#bicicleta").click(function(){		
		$("#aviao").fadeTo(1500, 0.1);
		$("#mota").fadeTo(1500, 0.1);
		$("#carro").fadeTo(1500, 0.1);
		$("#ri1").slideDown(1500);
	});

	$("#rugby").click(function(){
		alert("Errado! Tenta Outra Vez!");
		$("#rugby").fadeTo(1500, 0.1);
	});
	$("#basquetbol").click(function(){
		alert("Errado! Tenta Outra Vez!");
		$("#basquetbol").fadeTo(1500, 0.1);
	});
	$("#tenis").click(function(){
		alert("Errado! Tenta Outra Vez!");
		$("#tenis").fadeTo(1500, 0.1);
	});
	$("#futebol").click(function(){		
		$("#rugby").fadeTo(1500, 0.1);
		$("#basquetbol").fadeTo(1500, 0.1);
		$("#tenis").fadeTo(1500, 0.1);
		$("#ri2").slideDown(1500);
	});
	$(function(){
		$("form#form-msg").submit(function(){
			$.ajax({
				type:"POST",
				url: "action.php",
				data:{
					mensagem: $("textarea[name=mensagem]").val()
				}
			}).done(function(e){
				$("div.comments").append(e);
			});
			return false;
		});
	})
});
