<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pedidos de produtos</title>
</head>
<body>
	<h1>Pedido de produtos</h1><br><br>

	<form method="POST" action="pedido.php"></form>
			<label>ID: </label>
			<input type="text" name="id" placeholder="Insira o ID do produto"><br><br>
			<label>Produtos: </label>
			<input type="text" name="produtos" placeholder="Insira o produto desejado"><br><br>
			<label>Data: </label>
			<input type="text" name="data" placeholder="Insira o preço do produto"><br><br>
			<label>Total: </label>
			<input type="text" name="total" placeholder="Quantidade de produtos"><br><br>
			<input type="submit" value="Enviar">
			<input type="reset" value="Apagar">

</body>
</html>
