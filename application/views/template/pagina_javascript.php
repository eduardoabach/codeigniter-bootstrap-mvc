<script src="../assets/js/jquery-2.2.0.min.js"></script>
<script src="../assets/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/metisMenu/dist/metisMenu.min.js"></script>

<?php
	//carregar padrão do módulo atual		
	$this->load->view(MODULENAME.'/template/javascript');

	if($javascript_complemento){
		if(is_array($javascript_complemento)){
			foreach($javascript_complemento as $jsCompl){				
				$this->load->view($jsCompl);
			}
		}else{
			$this->load->view($javascript_complemento);
		}
	}
?>

<script src="../assets/js/painel.js"></script>
