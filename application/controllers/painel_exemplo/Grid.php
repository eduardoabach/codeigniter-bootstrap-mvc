<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grid extends PE_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index(){
		$params = array();
		//$params['header'] = 'painel_exemplo/home/header';
		//$params['javascript'] = 'painel_exemplo/home/javascript';
		$this->render('grid/home',$params);
	}
}
