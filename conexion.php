<?php

    class conexion{

        private $con;

        public function __construct(){

            $this->con = new mysqli('localhost', 'root', '', 'miniMarket');

        }

        public function getUsers(){
            $query = $this->con->query('SELECT * FROM usuarios');

            $retorno = [];

            $i =0;

            while ($fila = $query->fetch_assoc()){
                $retorno [$i] =$fila;
                $i++;                
            }
            return $retorno;
        }
        public function getCategorias(){
            $query = $this->con->query('SELECT * FROM categoria');

            $retorno = [];

            $i =0;

            while ($fila = $query->fetch_assoc()){
                $retorno [$i] =$fila;
                $i++;                
            }
            return $retorno;
        }
        public function getProductos(){
            $query = $this->con->query('SELECT * FROM producto');

            $retorno = [];

            $i =0;

            while ($fila = $query->fetch_assoc()){
                $retorno [$i] =$fila;
                $i++;                
            }
            return $retorno;
        }
        public function getProductosPorCategoria($idCategoria){
            $query = $this->con->query('SELECT * FROM producto WHERE id_categoria = '.$idCategoria);

            $retorno = [];

            $i =0;

            while ($fila = $query->fetch_assoc()){
                $retorno [$i] =$fila;
                $i++;                
            }
            return $retorno;
        }

    }

?>