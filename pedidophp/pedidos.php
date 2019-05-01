<?php

	$conn = mysqli_connect("localhost", "admin", "admin4321");
	$db = mysql_select_db("parapedidos");

		$id = $_POST ['id'];
		$produtos = $_POST ['produtos'];
		$data = $_POST ['data'];
		$total = $_POST ['total']

	$sql = mysql_query("INSET INTO parapedidos (id, produtos, data, total) VALUES ('$id', '$produtos', '$data', '$total')");

		if ($sql == true) {
			
			echo "<meta http-equiv='refresh' content='0;
				 <script type='text/javascript'>alert('Pedido : $produto , cadastrado com sucesso!')</script>";
		} else {
			
		}
?> 
