<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Super Quiz super</title>
	<script src="jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>	
	<script src="trab_efeitos1.js"></script>
</head>
<body style="background-color:#fff; font-family:comic sans MS";>
<style type="text/css">
	#myProgress {style:width: 80%; align:center; margin-left: 134px;}
	#feedback { font-size: 1.4em;}
	#selectable .ui-selecting {background: #FECA40;}
	#selectable .ui-selected {background: #F39814; color: white;}
	#selectable {list-style-type: none; margin: 0; padding: 0; width: 60%;}
	#selectable li {margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px;}
</style>
<div>
	<h1 align="center" id="titulo" style="font-family: cooper black"><font size="20">Super Quiz</font></h1>
</div>
<br>
<div>
	<h1 align="center" id="inicio">Clica para começar!</h1>	
</div>
<div id="myProgress" style="width: 80%" align="center">
	<div id="myBar" align="center"></div>
</div>
<br>
<div id="perguntas1">
	<div>
		<h2>Responde às seguintes perguntas:</h2>
	</div>	
	<br>
	<div>
		<h2 id="p1">1. Existe um país na America do Sul que fala holandês. Qual o nome desse país?</h2>
		<h3 id="r1" style="background-color:#33ff33;">Resposta Correta: Suriname</h3>
	</div>
	<br>
	<div>
		<h2 id="p2">2. Depois do inglês, qual a língua mais estudada no mundo?</h2>
		<h3 id="r2"  style="background-color:#33ff33;">Resposta Correta: Francês</h3>
	</div>
	<br>
	<div>
		<h2 id="p3">3. Qual o país com o maior número de línguas vivas?</h2>
		<h3 id="r3"  style="background-color:#33ff33;">Resposta Correta: Indonésia</h3>
	</div>
	<br>
</div>

<div id="continuar">
<h1 align="center">Clica para continuar!</h1>
</div>
<br>
<div id="perguntas2">
	<div>
		<h2>Escole a imagem correta:</h2>
	</div>
	<br>
	<div>
		<h2 id="pi1">1. Qual destas imagens mostra uma bicicleta?</h2>
		<img src="../imagens/carro.jpg" style="width:250px;height:250px;" id="carro" class="img1">
		<img src="../imagens/bicicleta.jpg" style="width:250px;height:250px;" id="bicicleta" class="img1">
		<img src="../imagens/motinha.jpg" style="width:250px;height:250px;" id="mota" class="img1">
		<img src="../imagens/aviao.jpg" style="width:250px;height:250px;" id="aviao" class="img1">
		<br>
		<h3 id="ri1" style="background-color:#33ff33;" align="center">Resposta Correta</h3>		
	</div>
	<br>
	<div>
		<h2 id="pi2">2. Qual destas imagens mostra uma bola de futebol?</h2>
		<img src="../imagens/rugby.jpg" style="width:250px;height:250px;" id="rugby" class="img2">
		<img src="../imagens/basquetbol.jpg" style="width:250px;height:250px;" id="basquetbol" class="img2">
		<img src="../imagens/futebol.jpg" style="width:250px;height:250px;" id="futebol" class="img2">
		<img src="../imagens/tenis.jpg" style="width:250px;height:250px;" id="tenis" class="img2">
		<br>
		<h3 id="ri2" style="background-color:#33ff33;" align="center">Resposta Correta</h3>		
	</div>
	<br>
	<div>
		<h2 id="pi2">3. Qual o navegador português que descobriu o Brasil?</h2>
		<ol id="selectable">
		  <li class="ui-widget-content" id="s1">Dom João VI</li>
		  <li class="ui-widget-content" id="s2">Vasco da Gama</li>
		  <li class="ui-widget-content" id="s3">Cristovão Colombo</li>
		  <li class="ui-widget-content" id="s4">Pedro Álvares Cabral</li>
		  <li class="ui-widget-content" id="s5">Dom Afonso Henriques</li>
		</ol>
	</div>
	<br>
	<br>
	<br>
	<strong><b>Comentários:</b></strong>
	<div class="comments">
		<?php
			$db = new mysqli("localhost", "root", "usbw", "trab_projeto");
			$qr = $db->query("SELECT * FROM comments");

			while ($row = $qr->fetch_assoc()):
				echo "<fieldset>";
				echo sprintf("<p>%s</p>", $row["comment"]);
				echo "</fieldset>";
			endwhile;
		?>		
	</div>
	<div class="cadastro">
		<form action="" id="form-msg" method="post" enctype="multipart/form-data">
			<fieldset>
				<p>
					<span><b>Escreva aqui o seu comentário:</b></span><br>
					<textarea name="mensagem" style="margin: 0px; width: 511px; height: 119px;"></textarea>
				</p>
				<input type="submit" value="Enviar">
			</fieldset>
		</form>		
	</div>
</div>
</body>
</html>
