<?php

    header("Access-Control-Allow-Methods: PUT/POST");
    header("Content-Type: application/json");

    include("../config/config.php");

    $config = new Config();

    $res = array();

    

    if($_SERVER['REQUEST_METHOD'] == "PUT" || $_SERVER['REQUEST_METHOD'] == "POST" ) {

        $data = file_get_contents("php://input");

        $record = array();

        parse_str($data,$record);

        $id = $record['id'];
        $t_shirt = $record['t_shirt'];
        $price = $record['price'];
        $category = $record['category'];

            if($_POST['admin_username'] == $config->admin_username && $_POST['admin_paw'] == $config->admin_paw){

                $result = $config->update_teas($id,$t_shirt,$price,$category);

                if($result) {

                    $res['msg'] = "Successfully t-shirt updated...";

                } else {

                    $res['msg'] = "Not updated tshirt...";

                }

        }
    } else {

        $res['msg'] = "Only PUT or PATCH methods are allowed...";

    }

    echo json_encode($res);

?>