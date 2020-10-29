<?php

    abstract class Persona{
        protected $email;
        protected $passwd;
        protected $ID;        

        function __construct($email,$passwd){
            $this->email=$email;
            $this->passwd=$passwd;
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

        public function __destruct() {
        }
}
?>