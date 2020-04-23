<?php 

try {

	$client = new SoapClient("http://localhost:8080/calculaimc?wsdl");

	
	if (isset($_POST['opcao']) and @$_POST['opcao'] == 'M') {

		$params = array("getImc" =>  
			array("peso" => $_POST['peso'],
				"altura" => $_POST['altura']
			)
		);

		$paramSexo = array("getSexo" =>
			array("sexo" => $_POST['opcao']

			)
		);

		$result = $client->__soapCall("getImc",$params);
		$sexo = $client->__soapCall("getSexo",$paramSexo);

		header("Location: http://localhost/cliente-ws-php?result=".$result->return."&sexo=".$sexo->return);

	}elseif (isset($_POST['opcao']) and @$_POST['opcao'] == 'F') {

		$params = array("getImc" =>  
			array("peso" => $_POST['peso'],
				"altura" => $_POST['altura']
			)
		);

		$paramSexo = array("getSexo" =>
			array("sexo" => $_POST['opcao']

			)
		);

		$result = $client->__soapCall("getImc",$params);
		$sexo = $client->__soapCall("getSexo",$paramSexo);


		header("Location: http://localhost/cliente-ws-php?result=".$result->return."&sexo=".$sexo->return);
	
	}


}catch(Exception $e){

	echo $e->getMessage();
}


?>