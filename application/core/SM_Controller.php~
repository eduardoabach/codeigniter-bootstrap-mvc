<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SM_Controller extends CI_Controller{

	protected $auto_load_system_scripts;
	protected $auto_load_system_styles;
	private $sys_modules;

        function __construct(){
		parent::__construct();
		//seta o nome do modulo em questão
		$this->_set_modulename();
        }
	
	protected function _set_modulename(){
		$ignorar = array('gerador');
		$modulename = rtrim($this->router->directory, '/');
		$modulename = explode('/', $modulename);
		$modulename = $modulename[0];
		$modulename = isset($modulename) && !in_array($modulename, $ignorar) ? $modulename : 'default';
		define('MODULENAME', $modulename);
	}

	public final function get_modulename(){
		if (!defined('MODULENAME')):
			$this->_set_modulename();
		endif;
		return MODULENAME;
	}

        /**
         * Retorna a data de expiração do software, caso não encontre retorna false.
         * @return date / false
         * @author Eduardo Bach
         */
        public function data_expitacao_software(){
                $sql = "select s.dataexpiracao from solucoesglobais.softwarescliente s where s.idsoftware = 11 limit 1";
                $return = $this->db->query($sql);
                $dataList = $return->result();

                if(count($dataList)>0){
                        foreach($dataList as $row){
                                return $row->dataexpiracao;
                        }
                } else{
                        return false;
                }
        }


	/**
	* Seta no autoload de script e estilos as informações setadas no config em application/config/sistema.php
	* que será carregadas na inicialização do sistema
	*
	* @return void
	*/
	private function set_scripts_auto_load(){
		$this->config->load('sistema');
		$this->auto_load_system_scripts = $this->config->item('js_load');
		$this->auto_load_system_styles  = $this->config->item('css_load');
	}


	/**
	* Método utilizado no acesso ao módulo principal
	* Monta o menu do sistema, header e footer
	*
	* @param type $template
	* @param type $data
	* @param type $option
	*/
	public function render_complex($template = null, $data = array(), $option = array()){
		$isAjax = $this->input->isAjaxRequest();
		$user   = $this->get_user_logado();

		if (!$isAjax) {
			if ((isset($option) && !isset($option['noheader']))) {
				$header = array(
					'favicon' => $this->loadFavicon(),
					'title'   => $this->loadTitle(),
					'styles'  => $this->loadStyles()
				);
				$this->load->view('include/header', $header);
			}
		}

		if (!$isAjax) {
			if ((isset($option) && !isset($option['nomenu']))) {
				$last_access = timestamp_to_br($user->ultimo_acesso);

				if (method_exists($this, 'set_module_menu')):
					$this->load->library('menu_generate');

					$module_menu = $this->set_module_menu();
					$jasper_menu = menuRelatoriosJasper($this->get_module_id());
					$module_menu = array_merge($module_menu, $jasper_menu);

					$this->menu_generate->set_menu($module_menu);
					$module_menu = $this->menu_generate->generate();
				else:
					$module_menu = $this->load->view('include/modules_menu/' . $this->get_modulename(), array(), true);
				endif;

				//carrega as mensagens do usuário
				$naoli_mensagens = $this->usermessage->unreadCount($user->codigo);
				$naoli_avisos    = $this->systemmessage->unreadCount($user->codigo);

				$data_menu_bar = array(
					'usuario'         => $user->login,
					'funcao'          => utf8_encode($user->funcao),
					'ultimo_acesso'   => $last_access,
					'module_menu'     => $module_menu,
					'naoli_mensagens' => ($naoli_mensagens > 0) ? $naoli_mensagens : '',
					'naoli_avisos'    => ($naoli_avisos > 0) ? $naoli_avisos : ''
				);
				$this->load->view('include/menubar', $data_menu_bar);
			}
		}

		if (!is_null($template)) {
			$this->load->view($this->get_modulename() . '/' . $template, $data);
		}

		if (!$isAjax) {
 			if ((isset($option) && !isset($option['nofooter']))) {
				$footer = array(
					'scripts'    => $this->loadScripts(),
					'bar_footer' => array()
				);

            			$footer['bar_footer'][] = sprintf('<strong>%s</strong>', $user->nomecompleto);

			    	if ($this->isSuportLogin() OR $this->isDevelopment()) {
			       		$footer['bar_footer'][] = 'Base:' . $this->db->hostname . " / " . $this->db->database;
			    	}
				
			    	if (strlen($this->cliente_dados->parceiro_dados_suporte)) {
		    			$footer['bar_footer'][] = $this->cliente_dados->parceiro_dados_suporte;
				}

				$module_id = $this->getModuleId();

				$footer['module_id']  = $module_id ?: 0;
				$footer['module_url'] = rtrim(base_url($this->get_modulename()), '/') . '/';
				$footer['username']   = $this->get_user_logado('login');
				$footer['userid']     = $this->get_user_logado('codigo');
				$footer['modulename'] = $this->get_modulename();

				$this->load->view('include/footer', $footer);
 			}
		}
	}
}

