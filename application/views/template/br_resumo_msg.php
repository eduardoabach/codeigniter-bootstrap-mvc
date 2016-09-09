<?php
	if(count($list)){ 
		foreach($list as $it){ 
			//print_r($it);
			//die('atr');
?>
<li>
	<a href="#">
		<div>
			<strong><?=$it['remet']?></strong>
			<span class="pull-right text-muted">
				<em><?=$it['data']?></em>
			</span>
		</div>
		<div><?=$it['msg']?></div>
	</a>
</li>
<?php 
		}
	}
?>