<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flot extends PE_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index(){
		$params = array();
		//$params['header'] = 'painel_exemplo/home/header';
		$params['javascript'] = MODULENAME.'/flot/javascript';
		$this->render('flot/home',$params);
	}
}
