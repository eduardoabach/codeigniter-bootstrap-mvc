<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends PE_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index(){
		$params = array();
		$params['header'] = MODULENAME.'/home/header';
		$params['javascript'] = MODULENAME.'/home/javascript';
		$this->render('home/home',$params);
	}
}
