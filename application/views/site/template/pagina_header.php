<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Bach, Eduardo, desenvolvedor web, web developer, firefox os, aplicativos, php, jquery" />
	<meta name="description" content="Desenvolvedor de sitemas em browser, linguagens php, javascript, e aplicativos para plataforma Firefox OS." />
	<meta name="google-site-verification" content="Ri1I8QxcB6YNHuIw95si7TrecNQC0YluOEvF5IwpHcc" />
	<meta name="author" content="Eduardo Adriano Bach">

	<title>Eduardo Bach - Web Developer</title>


	<link href="../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<link href="../assets/site/geral.css" rel="stylesheet">

	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->	

	<?php
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
</head>
