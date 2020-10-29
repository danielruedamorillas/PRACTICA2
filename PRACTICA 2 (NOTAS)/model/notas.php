<?php
    include "Persona.php";
    class Notas extends Persona{
        private $Id;
        private $asignatura;
        private $nota;
        private $Id_alu;

        function __construct(){
            }
          

        /**
         * Get the value of Id
         */ 
        public function getId()
        {
                return $this->Id;
        }

        /**
         * Set the value of Id
         *
         * @return  self
         */ 
        public function setId($Id)
        {
                $this->Id = $Id;

                return $this;
        }

        /**
         * Get the value of asignatura
         */ 
        public function getAsignatura()
        {
                return $this->asignatura;
        }

        /**
         * Set the value of asignatura
         *
         * @return  self
         */ 
        public function setAsignatura($asignatura)
        {
                $this->asignatura = $asignatura;

                return $this;
        }

        /**
         * Get the value of nota
         */ 
        public function getNota()
        {
                return $this->nota;
        }

        /**
         * Set the value of nota
         *
         * @return  self
         */ 
        public function setNota($nota)
        {
                $this->nota = $nota;

                return $this;
        }

        /**
         * Get the value of Id_alu
         */ 
        public function getId_alu()
        {
                return $this->Id_alu;
        }

        /**
         * Set the value of Id_alu
         *
         * @return  self
         */ 
        public function setId_alu($Id_alu)
        {
                $this->Id_alu = $Id_alu;

                return $this;
        }
    }
?>