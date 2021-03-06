<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('autoload_class_multiple_directory')){
    function autoload_class_multiple_directory($class){
        $array_paths = array(
             APPPATH.'core/',
             APPPATH.'interfaces/'
        );

        // traduz os namespaces para caminhos do fs
        $class = str_replace('\\','/',$class);

        if(is_file(APPPATH.$class.'.php')) {
            include(APPPATH.$class.'.php');
            return;
        }

        foreach($array_paths as $path){
            $file = $path.$class.'.php';
            if(is_file($file)){
                include_once $file;
                return;
            }
        }
    }
}

if(!function_exists('autoload_class_custom')){
    function autoload_class_custom($class){
	$array_paths = array(
	     APPPATH.'core/',
	     APPPATH.'libraries/'
	);

	foreach($array_paths as $path){
		$pastaVerificar = dir($path);
		while($arquivoVerificar = $pastaVerificar->read()){
			if(strpos($arquivoVerificar,'_Controler.php') && strpos($arquivoVerificar,'~') === false){
				require_once($path.$arquivoVerificar);
				//echo $path.$arquivoVerificar."<br />";
			}
	
		}
		$pastaVerificar->close();
	}
    }
}

spl_autoload_register('autoload_class_multiple_directory');

/* End of file autoload_real.php */

