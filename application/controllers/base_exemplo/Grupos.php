<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupos extends BS_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index(){
		$this->render('grupos/home');
	}
}
