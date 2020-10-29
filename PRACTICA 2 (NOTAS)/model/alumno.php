<?php
    include "Persona.php";
    class Alumno extends Persona{
        private $nombre;
        private $apellidoPat;
        private $apellidoMat;
        private $grupo;
        private $email;
        private $pass;

        function __construct(){
            }
          

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of apellidoPat
         */ 
        public function getApellidoPat()
        {
                return $this->apellidoPat;
        }

        /**
         * Set the value of apellidoPat
         *
         * @return  self
         */ 
        public function setApellidoPat($apellidoPat)
        {
                $this->apellidoPat = $apellidoPat;

                return $this;
        }

        /**
         * Get the value of apellidoMat
         */ 
        public function getApellidoMat()
        {
                return $this->apellidoMat;
        }

        /**
         * Set the value of apellidoMat
         *
         * @return  self
         */ 
        public function setApellidoMat($apellidoMat)
        {
                $this->apellidoMat = $apellidoMat;

                return $this;
        }

        /**
         * Get the value of grupo
         */ 
        public function getGrupo()
        {
                return $this->grupo;
        }

        /**
         * Set the value of grupo
         *
         * @return  self
         */ 
        public function setGrupo($grupo)
        {
                $this->grupo = $grupo;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of pass
         */ 
        public function getPass()
        {
                return $this->pass;
        }

        /**
         * Set the value of pass
         *
         * @return  self
         */ 
        public function setPass($pass)
        {
                $this->pass = $pass;

                return $this;
        }
    }
?>