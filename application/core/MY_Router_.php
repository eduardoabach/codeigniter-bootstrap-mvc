<?php

/*
 * Possibilita subfolders nos controllers
 */

Class MY_Router extends CI_Router{

   public $class;
   public $method;
   public $directory;
   public $params = array();

   function MY_Router(){
      parent::__construct();
   }

   function _validate_request($segments){
      $this->params = $segments;

      if (file_exists(APPPATH . 'controllers/' . $segments[0] . EXT)) {
         $this->params = array_slice($this->params, 2);

         if (count($segments) == 1) {
            $segments[1] = 'index';
         }

         return $segments;
      }

      if (is_dir(APPPATH . 'controllers/' . $segments[0])) {
         $this->directory = $segments[0];
         $segments        = array_slice($segments, 1);
         $this->params    = array_slice($this->params, 1);

         /* ----------- ADDED CODE ------------ */
         while (count($segments) > 0 && is_dir(APPPATH . 'controllers/' . $this->directory . '/' . $segments[0])) {
            $this->directory = $this->directory . '/' . $segments[0];
            $segments        = array_slice($segments, 1);
            $this->params    = array_slice($this->params, 1);
         }

         $this->directory = $this->directory . '/';
         /* ----------- END ------------ */

         if (count($segments) > 0) {
            if (!file_exists(APPPATH . 'controllers/' . $this->fetch_directory() . '/' . $segments[0] . EXT)) {
               show_404($this->fetch_directory() . $segments[0]);
            } else {
               $this->params = array_slice($this->params, 1);
            }

            if (count($this->params)) {
               $this->params = array_slice($this->params, 1);
            }
         } else {
            $this->set_class($this->default_controller);
            $this->set_method('index');

            if (!file_exists(APPPATH . 'controllers/' . $this->fetch_directory() . '/' . $this->default_controller . EXT)) {
               $this->directory = '';

               return array();
            }
         }

         return $segments;
      }

      show_404($segments[0]);
   }

   public function getParameters(){
      return $this->params;
   }

}
