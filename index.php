<!DOCTYPE html>
<html>
<head>
	<title>Client - WS</title>
</head>
<style type="text/css">
	
	header h1 {

		text-align: center;
	}

	section form select {
		width: 20%;
	}

	section form button {

		width: 120px;
	}

	.resultado {
		text-align: center;
		font-family: "Times";
		font-size: 35px;
		font-weight: bold;
	}

</style>
<body>

	<header>
		<h1>Teste client ws para calcular IMC</h1>
	</header>

	<section>

		<form action="http://localhost/cliente-ws-php/service/soap.php" method="POST">
			<fieldset>
				<label>Peso</label>
				<input type="text" name="peso" />
			</fieldset>
			<br>
			<fieldset>
				<label>Altura</label>
				<input type="text" name="altura" />
			</fieldset>
			<br>
			<fieldset>
				<label>Escolha o sexo:</label>
			</fieldset>>
			<select name="opcao">
				<option value="M">Masculino</option>
				<option value="F">Feminino</option>
			</select>
			<button type="submit">Calcular</button>
		</form>
		
	</section>

	<div class="resultado">
		<?php 
			if (isset($_GET['sexo']) && $_GET['sexo'] == 'M') {
				
				echo "Resultado para o sexo Masculino";

			}else if(isset($_GET['sexo']) && $_GET['sexo'] == 'F') {
				
				echo "Resultado para o sexo Feminino";
			}
		?>
	</div>
	<div class="resultado">
		<?php 
			if (isset($_GET['result'])) {
				
				echo $_GET['result'];
			}
		?>
	</div>

</body>
</html>