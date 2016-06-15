<?php

if (!defined('BASEPATH'))
   exit('No direct script access allowed');

if (!function_exists('inf_ip')):
function inf_ip($ip=''){
	if($ip == "")
		$ip = $_SERVER['REMOTE_ADDR'];
	$info = file('http://api.hostip.info/rough.php?ip='.$ip);

	$return = array();
	$return['ip'] = $ip;
	$return['pais'] = substr($info[0], 9);
	$return['cidade'] = substr($info[2], 6);
	$return['navegador'] = get_navegador();

	return $return;
}
endif;

if (!function_exists('get_navegador')):
function get_navegador(){
	$list = array();
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
	  $list['versao'] = $matched[1];
	  $list['navegador'] = 'IE';
	} elseif (preg_match( '|Opera/([0-9].[0-9]{1,2})|',$useragent,$matched)) {
	  $list['versao'] = $matched[1];
	  $list['navegador'] = 'Opera';
	} elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
	  $list['versao'] = $matched[1];
	  $list['navegador'] = 'Firefox';
	} elseif(preg_match('|Chrome/([0-9\.]+)|',$useragent,$matched)) {
	  $list['versao'] =$matched[1];
	  $list['navegador'] = 'Chrome';
	} elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {
	  $list['versao'] =$matched[1];
	  $list['navegador'] = 'Safari';
	} elseif(preg_match('|Flock/([0-9\.]+)|',$useragent,$matched)) {
	  $list['versao'] =$matched[1];
	  $list['navegador'] = 'Flock';
	} else {
	  $list['versao'] = 0;
	  $list['navegador'] = 'Outro';
	}
	return $list;
}
endif;

if (!function_exists('get_so')):
function get_so(){
	$uAgent = $_SERVER['HTTP_USER_AGENT'];
	$so = 'Desconhecido';

	if (preg_match('/linux/i', $uAgent)) {
		 $so = 'Linux';
	}
	elseif (preg_match('/macintosh|mac os x/i', $uAgent)) {
		 $so = 'Mac';
	}
	elseif (preg_match('/windows|win32/i', $uAgent)) {
		 $so = 'Windows';
	}
	return $so;
}
endif;

if (!function_exists('get_idioma')):
function get_idioma() {
	$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
	return $idioma;
}
endif;

if (!function_exists('get_engine_navegacao')):
function get_engine_navegacao(){
	$navigator_user_agent = ' ' . strtolower($_SERVER['HTTP_USER_AGENT']);
	$engine = '';

	if (strpos($navigator_user_agent, "trident")) {
		$engine['nome'] = 'TRIDENT';
		$engine['versao'] = floatval(substr($navigator_user_agent, strpos($navigator_user_agent, "trident/") + 8, 3));
	} elseif (strpos($navigator_user_agent, "webkit")) {
		$engine['nome'] = 'WEBKIT';
		$engine['versao'] = floatval(substr($navigator_user_agent, strpos($navigator_user_agent, "webkit/") + 7, 8));
	} elseif (strpos($navigator_user_agent, "presto")) {
		$engine['nome'] = 'PRESTO';
		$engine['versao'] = floatval(substr($navigator_user_agent, strpos($navigator_user_agent, "presto/") + 6, 7));
	} elseif (strpos($navigator_user_agent, "gecko")) {
		$engine['nome'] = 'GECKO';
		$engine['versao'] = floatval(substr($navigator_user_agent, strpos($navigator_user_agent, "gecko/") + 6, 9));
	} elseif (strpos($navigator_user_agent, "robot"))
		$engine['nome'] = 'ROBOTS';
	elseif (strpos($navigator_user_agent, "spider"))
		$engine['nome'] = 'ROBOTS';
	elseif (strpos($navigator_user_agent, "bot"))
		$engine['nome'] = 'ROBOTS';
	elseif (strpos($navigator_user_agent, "crawl"))
		$engine['nome'] = 'ROBOTS';
	elseif (strpos($navigator_user_agent, "search"))
		$engine['nome'] = 'ROBOTS';
	elseif (strpos($navigator_user_agent, "w3c_validator"))
		$engine['nome'] = 'VALIDATOR';
	elseif (strpos($navigator_user_agent, "jigsaw"))
		$engine['nome'] = 'VALIDATOR';
	return $engine;
}
endif;

if (!function_exists('seg_entre_datas')):
function seg_entre_datas($d) {
	$ts = time() - strtotime($d);
	return $ts;
}
endif;

if (!function_exists('dias_entre_datas')):
function dias_entre_datas($d) {
	$ts = seg_entre_datas($d);
	$val = round($ts / 86400, 0);
	return $val;
}
endif;

if (!function_exists('horas_entre_datas')):
function horas_entre_datas($d) {
	$ts = seg_entre_datas($d);
	$val = round($ts / 3600, 0);
	return $val;
}
endif;

if (!function_exists('minutos_entre_datas')):
function minutos_entre_datas($d) {
	$ts = seg_entre_datas($d);
	$val = round($ts / 60, 0);
	return $val;
}
endif;

if (!function_exists('tempo_entre_datas')):
function tempo_entre_datas($d) {
	$ts = seg_entre_datas($d);
	$unidade = '';

	if ($ts > 31536000) {
		$val = round($ts / 31536000, 0);
		$unidade = ($val > 1) ? 'anos' : 'ano';
	} else if ($ts > 2419200) {
		$val = round($ts / 2419200, 0);
		$unidade = ($val > 1) ? 'meses' : 'mês';
	} else if ($ts > 604800) {
		$val = round($ts / 604800, 0);
		$unidade = ($val > 1) ? 'semanas' : 'semana';
	} else if ($ts > 86400) {
		$val = round($ts / 86400, 0);
		$unidade = ($val > 1) ? 'dias' : 'dia';
	} else if ($ts > 3600) {
		$val = round($ts / 3600, 0);
		$unidade = ($val > 1) ? 'horas' : 'hora';
	} else if ($ts > 60) {
		$val = round($ts / 60, 0);
		$unidade = ($val > 1) ? 'minutos' : 'minuto';
	} else {
		$val = $ts;
		$unidade = ($val > 1) ? 'segundos' : 'segundo';
	}
	return $val . ' ' . $unidade;
}
endif;

?>
