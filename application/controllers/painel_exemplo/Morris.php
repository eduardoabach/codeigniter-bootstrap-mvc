<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Morris extends PE_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index(){
		$params = array();
		$params['header'] = MODULENAME.'/morris/header';
		$params['javascript'] = MODULENAME.'/morris/javascript';
		$this->render('morris/home',$params);
	}
}
