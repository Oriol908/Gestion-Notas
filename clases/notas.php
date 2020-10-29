<?php

    abstract class Notas{
        protected $ID_notas; 
        protected $nombre_asignatura;
        protected $nota;
        protected $ID_alumnos;
               
        function __construct($ID_notas,$nombre_asignatura,$nota){
            $this->ID_notas=$ID_notas;
            $this->nombre_asignatura=$nombre_asignatura;
            $this->nota=$nota;
        }

        /**
         * Get the value of ID_notas
         */ 
        public function getID_notas()
        {
                return $this->ID_notas;
        }

        /**
         * Set the value of ID_notas
         *
         * @return  self
         */ 
        public function setID_notas($ID_notas)
        {
                $this->ID_notas = $ID_notas;

                return $this;
        }

        /**
         * Get the value of nombre_asignatura
         */ 
        public function getNombre_asignatura()
        {
                return $this->nombre_asignatura;
        }

        /**
         * Set the value of nombre_asignatura
         *
         * @return  self
         */ 
        public function setNombre_asignatura($nombre_asignatura)
        {
                $this->nombre_asignatura = $nombre_asignatura;

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
         * Get the value of ID_alumnos
         */ 
        public function getID_alumnos()
        {
                return $this->ID_alumnos;
        }

        /**
         * Set the value of ID_alumnos
         *
         * @return  self
         */ 
        public function setID_alumnos($ID_alumnos)
        {
                $this->ID_alumnos = $ID_alumnos;

                return $this;
        }
}
?>