<?php
    class Controller{
        static private $_db;

        public function __construct(){
            self::$_db = $this->setDb();
        }
        
        // initialize connexion to database
        private function setDb(){
            try{
                return new PDO('mysql:host=localhost;port=3308;dbname=bill_generator_db', 'root', '', 
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch (Exception $e){
                die('Error : ' . $e->getMessage());
            }
        }

        // save bill
        public function saveBill($data){
            $sql = "INSERT INTO 
                bills(seller_name, seller_phone, sell_condition, sell_modality, sell_expiration_date, 
                client_name, client_entreprise, client_address, client_country, client_phone, sells, created_at) 
                VALUES(:seller_name, :seller_phone, :sell_condition, :sell_modality, :sell_expiration_date, 
                :client_name, :client_entreprise, :client_address, :client_country, :client_phone, :sells, NOW())";

            try{
                $qs = self::$_db->prepare($sql);
                
                $qs->execute([
                    'seller_name'=> $data['seller_name'],
                    'seller_phone' => $data['seller_phone'],
                    'sell_condition' => $data['sell_condition'],
                    'sell_modality' => $data['sell_modality'],
                    'sell_expiration_date' => $data['sell_expiration_date'],
                    'client_name' => $data['client_name'],
                    'client_entreprise' => $data['client_entreprise'],
                    'client_address' => $data['client_address'],
                    'client_country' => $data['client_country'],
                    'client_phone' => $data['client_phone'],
                    'sells' => $data['sells']
                    
                ]);

                return true;
            }
            catch(Exeption $e){
                return false;
            }
        }
        
        // count number of bill
        static public function count(){
            $sql = "SELECT COUNT(id) AS bills_length FROM bills";

            $qs = self::$_db->query($sql);
            $data = $qs->fetch();
            $qs->closeCursor();

            return $data['bills_length'];
        }
        
        static public function getBills(){
            $bills = array();

            $qs = self::$_db->query('SELECT * FROM bills');
            while($data = $qs->fetch()){
                $bills[] = $data;
            }
            $qs->closeCursor();

            return $bills;
        }
    }

    