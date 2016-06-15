<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('template/pagina_header',array('header_complemento'=>$header_complemento)); ?>	
	<body>
		<div id="wrapper">
			<?php $this->load->view('template/pagina_complemento'); ?>
			<div id="page-wrapper">
				<div class="container-fluid">
					<?php $this->load->view($view_objetivo,$data); ?>	
				</div>
			</div>
		</div>
		<?php $this->load->view('template/pagina_javascript',array('javascript_complemento'=>$javascript_complemento)); ?>
	</body>
</html>
