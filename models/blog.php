<?php
    abstract class Blog{
        public $titulo, $data, $texto;
        
        public function __construct($titulo, $data, $texto){
            $this->titulo = $titulo;
            $this->data = $data;
            $this->texto = $texto;
        }  
        
        abstract public function getCatId();
    }
    
    class Advocacia extends Blog{
        public function getCatId(){
            return 1;
        }

    
    class Administracao extends Blog{
        public function getCatId(){
            return 2;
        }
    }
    
    class Contabilidade extends Blog{
        public function getCatId(){
            return 3;  
        }
    }
    
    class Imobiliaria extends Blog{
        public function getCatId(){
            return 4;
        }
    }
    
    class Fabrica{
        public function createBlog($cat, $titulo, $data, $texto){
            if($cat === "Advocacia"){
                return new Advocacia($titulo, $data, $texto);
            }  
            if($cat === "Administracao"){
                return new Administracao($titulo, $data, $texto);
            }  
            if($cat === "Contabilidade"){
                return new Contabilidade($titulo, $data, $texto);
            }  
            if($cat === "Imobiliaria"){
                return new Imobiliaria($titulo, $data, $texto);
            }  
        }
    }