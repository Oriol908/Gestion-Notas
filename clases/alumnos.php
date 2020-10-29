<?php

    abstract class Alumnos{
        protected $ID;
        protected $nombre;
        protected $apellido1;
        protected $apellido2;
        protected $grupo;
        protected $email;    
        protected $passwd;
    
        
        function __construct($email,$passwd){
            $this->email=$email;
            $this->passwd=$passwd;
        }

        /**
         * Get the value of ID
         */ 
        public function getID()
        {
                return $this->ID;
        }

        /**
         * Set the value of ID
         *
         * @return  self
         */ 
        public function setID($ID)
        {
                $this->ID = $ID;

                return $this;
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
         * Get the value of apellido1
         */ 
        public function getApellido1()
        {
                return $this->apellido1;
        }

        /**
         * Set the value of apellido1
         *
         * @return  self
         */ 
        public function setApellido1($apellido1)
        {
                $this->apellido1 = $apellido1;

                return $this;
        }

        /**
         * Get the value of apellido2
         */ 
        public function getApellido2()
        {
                return $this->apellido2;
        }

        /**
         * Set the value of apellido2
         *
         * @return  self
         */ 
        public function setApellido2($apellido2)
        {
                $this->apellido2 = $apellido2;

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
         * Get the value of passwd
         */ 
        public function getPasswd()
        {
                return $this->passwd;
        }

        /**
         * Set the value of passwd
         *
         * @return  self
         */ 
        public function setPasswd($passwd)
        {
                $this->passwd = $passwd;

                return $this;
        }
}
?>