<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ST_Controller extends SL_Controller{

        function __construct(){
                parent::__construct();
        }
	
	public function render($view,$data=array()){
		$moduleName = $this->get_modulename();

		$params = array();
		$params['view_objetivo'] = $moduleName.'/'.$view;
		$params['data'] = (isset($data['data'])) ? $data['data'] : array();
		$params['header_complemento'] = (isset($data['header'])) ? $data['header'] : '';
		$params['javascript_complemento'] = (isset($data['javascript'])) ? $data['javascript'] : '';
		$this->load->view($moduleName.'/template/pagina',$params);
	}


}

