<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculo_Parcelamento_SAC extends FI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index(){
		

		$this->render('calculo_parcelamento_sac/home',array('data'));
	}
}
