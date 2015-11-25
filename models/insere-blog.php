<?php
class Blog{
    public $titulo, $data, $texto;
    
    public function __construct($titulo, $data, $texto){
        $this->titulo = $titulo;
        $this->data = $data;
        $this->texto = $texto;
    }    
}
 