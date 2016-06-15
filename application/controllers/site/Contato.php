<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends ST_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index(){
		$this->render('contato/home');
	}
}
