<?php

    header("Access-Control-Allow-Methods: DELETE/POST");
    header("Content-Type: application/json");

    include("../config/config.php");

    $config = new Config();

    $res = array();

    if($_SERVER['REQUEST_METHOD'] == "DELETE" || $_SERVER['REQUEST_METHOD'] == "POST") {

        $str = file_get_contents("php://input");
        
        $res2 = array();

        parse_str($str,$res2);

        $id = $res2['id'];
        if($_POST['admin_username'] == $config->admin_username && $_POST['admin_paw'] == $config->admin_paw){
                $result = $config->delete_teas($id);
            

                if($result) {

                    $res['msg'] = "Successfully t-shirt deleted...";

                } else {
                    
                    $res['msg'] = "Failed to delete item...";

                }
        }
    } else {

        $res['msg'] = "Only DELETE method is allowed...";
        
    } 

    echo json_encode($res);

?>