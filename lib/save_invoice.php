<?php
    require 'controller.php';

    if(isset($_POST['seller_name']) AND !empty($_POST['seller_name'])){
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
            $data['sells'] = $_POST['sells'];
            

            // save serialized data
            $controller = new Controller();
            $controller->saveBill($data);   

            // redirect to home
            header('Location: ../index.php');
            
    }