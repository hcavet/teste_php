<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastro de Produtos</title>	
	</head>
	<body>
		<h1>Cadastrar Produtos</h1>
		<form method="POST" action="processa.php">
			<label>SKU: </label>
			<input type="text" name="sku" placeholder="SKU do produto"><br><br>
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Insira o nome do produto"><br><br>
			<label>Descrição: </label>
			<input type="text" name="descricao" placeholder="Insira a descrição resumida do produto"><br><br>
			<label>Preço: </label>
			<input type="text" name="preco" placeholder="Insira o preço do produto"><br><br>
			<input type="submit" value="Enviar">
			<input type="reset" value="Apagar">
		</form>
	</body>
</html>