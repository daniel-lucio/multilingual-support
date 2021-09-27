<?php

namespace okayinc;
use okayinc;

class language{

        private $data;
        private $default;

        function __construct($language, $default = 'en'){
                $this->data = $config = include $language.'.php';
                $this->default = $config = require $default.'.php';
        }

        public function get($i){
                $answer = '';
                if ((is_array($this->data)) && (array_key_exists($i, $this->data))){
                        $answer = $this->data[$i];
                }
                elseif ((is_array($this->default)) && (array_key_exists($i, $this->default))){
                        $answer = $this->default[$i];
                }
                return $answer;
        }
}
