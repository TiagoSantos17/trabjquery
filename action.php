<?php
	if(count($_POST) > 0){
		$db = new mysqli("localhost", "root", "usbw", "trab_projeto");
		$qr = $db->query("INSERT INTO comments(comment) VALUES ('{$_POST['mensagem']}')");
		echo "<fieldset id='toogle'>";
		echo "<p>";
		$row = $db->query("SELECT * FROM comments ORDER BY comment_id DESC LIMIT 1")->fetch_assoc();
		echo $row["comment"];
		echo "</p>";
		echo "</fieldset>";
	}
?>