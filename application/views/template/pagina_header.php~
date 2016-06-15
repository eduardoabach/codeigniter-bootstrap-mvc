<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>TheisenBach Sistemas</title>

	<link href="../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="../assets/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
	
	<?php
		
		//carregar padrão do módulo atual		
		$this->load->view(MODULENAME.'/template/header');

		if($header_complemento){
			if(is_array($header_complemento)){
				foreach($header_complemento as $headerCompl){				
					$this->load->view($headerCompl);
				}
			}else{
				$this->load->view($header_complemento);
			}
		}
	?>
	
	<link href="../assets/css/painel.css" rel="stylesheet">
</head>
