<?php
	
	function getMsgUser($remet, $dataEnvio, $msg){
		return array('remet'=>$remet, 'data'=>$dataEnvio, 'msg'=>$msg);
	}

	$dataAt = date('d/m/Y');
	$list = array(
		getMsgUser('John Smith', $dataAt, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...'),
		getMsgUser('John Smith', $dataAt, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...'),
		getMsgUser('John Smith', $dataAt, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...'),
	);
?>

<a class="dropdown-toggle" data-toggle="dropdown" href="#">
	<i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
</a>
<ul class="dropdown-menu dropdown-messages">
	<?php $this->load->view('template/br_resumo_msg',array('list'=>$list)); ?>
</ul>