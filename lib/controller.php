<?
    class Controller{
        private $_db;

        public function __construct(){
            $this->_db = setDb();
        }

        private function setDb(){
            return 'connexion à la base des données';
        }
    }