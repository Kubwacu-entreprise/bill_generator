<?php
    class Controller{
        private $_db;

        public function __construct(){
            $this->_db = $this->setDb();
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
                client_name, client_entreprise, client_address, client_country, client_phone, created_at) 
                VALUES(:seller_name, :seller_phone, :sell_condition, :sell_modality, :sell_expiration_date, 
                :client_name, :client_entreprise, :client_address, :client_country, :client_phone, NOW())";

            try{
                $qs = $this->_db->prepare($sql);
                
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
                    
                ]);

                return true;
            }
            catch(Exeption $e){
                return false;
            }
        }
        
        // count number of bill
        static public function count(){
           $qs = $this->_db->exec("SELECT * FROM bills");
          return $qs->count();

        }
        
    }

    if(isset($_POST['seller_name'])){
        // serialize data from form
        $data = array();
        $data['seller_name'] = $_POST['seller_name'];
        $data['seller_phone'] = $_POST['seller_phone'];
        $data['sell_condition'] = $_POST['sell_condition'];
        $data['sell_modality'] = $_POST['sell_modality'];
        $data['sell_expiration_date'] = $_POST['sell_expiration_date'];
        $data['client_name'] = $_POST['client_name'];
        $data['client_entreprise'] = $_POST['client_entreprise'];
        $data['client_address'] = $_POST['client_address'];
        $data['client_country'] = $_POST['client_country'];
        $data['client_phone'] = $_POST['client_phone'];
        

        // save serialized data
        $controller = new Controller();
        $controller->saveBill($data);
        
        // redirect home
        
    }