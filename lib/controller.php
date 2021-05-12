<?
    class Controller{
        private $_db;

        public function __construct(){
            $this->_db = setDb();
        }
        
        // initialize connexion to database
        private function setDb(){
            try{
                return new PDO('mysql:host=localhost;dbname=bill_generator_db', 'root', '', 
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch (Exception $e){
                die('Error : ' . $e->getMessage());
            }
        }

        // save bill
        public function saveBill($data){
            try{
                $qs = $this->_db->prepare("INSERT INTO bills(seller_name, seller_phone, sell_condition, sell_modality, sell_expiration_date, 
                client_name, client_entreprise, client_address, client_country, client_phone, sells, created_at) 
                VALUES(:seller_name, :seller_phone, :sell_condition, :sell_modality, :sell_expiration_date, :client_name, 
                :client_entreprise, :client_address, :client_country, :client_phone, :sells, NOW()");
                
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
        
    }

    if(isset($_POST[''])){
        
    }