<?php
    namespace Kernel;

    class View{
        private string $filename;
        private $params;
        public function __construct($filename, $params=[]){
            $this -> filename = $filename;
            $this -> params = $params;
        }
        
        public function display(){
            foreach($this->params as $key => $value){
                $$key = $value;

                //$key = pays, $$key= $pays
            }
            include('../app/Views/'.$this->filename);
        }
    }
?>