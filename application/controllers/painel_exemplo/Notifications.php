<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifications extends PE_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index(){
		$params = array();
		$params['javascript'] = MODULENAME.'/notifications/javascript';
		$this->render('notifications/home',$params);
	}
}
