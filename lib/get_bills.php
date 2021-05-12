<?php 
    require 'controller.php';

    new Controller();

    echo json_encode(Controller::getBills());
?>