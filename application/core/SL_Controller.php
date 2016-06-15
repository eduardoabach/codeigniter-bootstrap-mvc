<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SL_Controller extends SM_Controller{

        function __construct(){
                parent::__construct();
        }
		
	public function render($view,$data=array()){
		$params = array();
		$params['view_objetivo'] = $this->get_modulename().'/'.$view;
		$params['data'] = (isset($data['data'])) ? $data['data'] : array();
		$params['header_complemento'] = (isset($data['header'])) ? $data['header'] : '';
		$params['javascript_complemento'] = (isset($data['javascript'])) ? $data['javascript'] : '';
		$this->load->view('template/pagina',$params);
	}

}

