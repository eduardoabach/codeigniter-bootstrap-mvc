<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FI_Controller extends SL_Controller{

        function __construct(){
                parent::__construct();
        }

	public function render($view,$data=array()){
		$paramsModulo = array();
		//$paramsModulo['header'] = array('painel_exemplo/template/header');
		//$paramsModulo['javascript'] = array('painel_exemplo/template/javascript');

		if(!is_array($data)) $data = array($data);
            	parent::render($view, array_merge_recursive($paramsModulo,$data) );
	}

}

