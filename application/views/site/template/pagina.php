<?php //include('system/ia.php'); ?>

<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('site/template/pagina_header',array('header_complemento'=>$header_complemento)); ?>	

	<body id="page-top" class="index">

    		<!-- Navigation -->
		<?php $this->load->view('site/template/pagina_complemento'); ?>	

		<?php $this->load->view($view_objetivo,$data); ?>

		<?php $this->load->view('site/template/pagina_javascript',array('javascript_complemento'=>$javascript_complemento)); ?>
	    
	</body>
</html>
