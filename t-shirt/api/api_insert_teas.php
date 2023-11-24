<?php

header('Access-Control-Allow-Methods: POST');
header('Content-Type: application/json');

include('../config/config.php');


$config = new Config();

$res = array();

if($_SERVER['REQUEST_METHOD'] == 'POST') {


if ($_POST['admin_username'] == $config->admin_username && $_POST['admin_paw'] == $config->admin_paw){
    $t_shirt = $_POST['t_shirt'];
    $price = $_POST['price']; 
    $category = $_POST['category']; 

    $result = $config->insert_teas($t_shirt,$price, $category);

    if($result) {

        $res['msg'] = "Successfully t-shirt inserted...";
        http_response_code(201);

        } 
        else {

            $res['msg'] = "t-shirt not  inserted...";
        }

    }

} else {

    $res['msg'] = "Only POST method is allowed...";

}

echo json_encode($res);

?>