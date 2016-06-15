<?php

use PrimitiveObjects\File;

class MY_Input extends CI_Input{

   function _sanitize_globals()
   {
      $this->allow_get_array = true;
      parent::_sanitize_globals();
   }

   public function postHTML($key)
   {
      return $_POST[$key];
   }

   public function files($key = null)
   {
      $files = $_FILES;

      if (!$files) {
         return null;
      }

      if (!is_null($key)) {
         if (!isset($files[$key])) {
            return null;
         }

         $file = $files[$key];

         if (!is_array($file['name'])) {
            $data = new File($file);
         } else {
            $data = array();

            foreach ($file['name'] AS $key => $value) {
               $data[] = new File(array(
                  'name'     => $value,
                  'type'     => $file['type'][$key],
                  'tmp_name' => $file['tmp_name'][$key],
                  'error'    => $file['error'][$key],
                  'size'     => $file['size'][$key]
               ));
            }
         }
      } else {
         $data = array();

         foreach ($files AS $name => $file) {
            if (!is_array($file['name'])) {
               $data[$name] = new File($file);
            } else {
               foreach ($file['name'] AS $key => $value) {
                  $data[$name][] = new File(array(
                     'name'     => $value,
                     'type'     => $file['type'][$key],
                     'tmp_name' => $file['tmp_name'][$key],
                     'error'    => $file['error'][$key],
                     'size'     => $file['size'][$key]
                  ));
               }
            }
         }
      }

      return $data;
   }

   public function sessionToken()
   {
      return isset($_SERVER['HTTP_X_SESSION_TOKEN']) ? $_SERVER['HTTP_X_SESSION_TOKEN'] : null;
   }

   public function csrfToken()
   {
      return isset($_SERVER['HTTP_X_CSRF_TOKEN']) ? $_SERVER['HTTP_X_CSRF_TOKEN'] : ($this->post('_token') ? $this->post('_token') : null);
   }

   public function isPostRequest()
   {
      return strtolower($_SERVER['REQUEST_METHOD']) == 'post';
   }

   public function isAjaxRequest()
   {
      return (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
   }

   public function isJsonRequest ()
   {
      return $this->isAjaxRequest() && preg_match('/application\/json/', strtolower($_SERVER['HTTP_ACCEPT']));
   }
}
