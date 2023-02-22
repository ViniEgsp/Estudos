<?php 
    namespace App\Image;
    class Resize {
        
        /**
         * Imagem (GD) 
         * @var resource
         * */
        private $image;
        
        /**
         * Tipo de Imagem
         * @var string
         */
        private $type;
        
        /**
         * Método responsável por carregar os dados da classe
         * @param string $file
         */
        public function __construct($file){
            echo "<pre>";
            print_r($file);
            echo "</pre>"; exit;
        }
    }
?>