<?php
    class Administrador{
        private $Id;
        private $email;
        private $pass;
        function __construct(){
               // $this->Id=$Id;
                //$this->email=$email;
                //$this->password=$password;
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