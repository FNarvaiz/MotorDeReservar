<?php
class Fechas
    {
            //ATRIBUTOS
        public $_id;
        public $_nombre;
        public $_desde;
        public $_hasta;
        
        //CONSTRUCTORES
        function __construct()
        {
        }
        public function __destruct() {
        //    echo 'Destroying: ', $this->_nombre, PHP_EOL;
        }
        

        //METODOS
public function GetNombre()
        {
            return $this->_nombre;
        }
        public function Setnombre($obj)
        {
            $this->_nombre = $obj;
        }

        public function GetId()
        {
            return $this->_id;
        }
        public function SetProvincia($obj)
        {
            $this->_provincia= $obj;
        }
        public function GetProvincia(){
            return $this->_provincia;
        }
        
        public function SetId($obj)
        {
            $this->_id = $obj;
        }
        
    }

?>