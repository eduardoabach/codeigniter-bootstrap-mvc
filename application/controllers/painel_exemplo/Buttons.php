<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buttons extends PE_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index(){
		$params = array();
		$params['header'] = MODULENAME.'/buttons/header';
		$this->render('buttons/home',$params);
	}
}
