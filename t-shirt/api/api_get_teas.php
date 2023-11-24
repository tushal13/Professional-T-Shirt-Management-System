<?php

header("Access-Control-Allow-Methods: GET/POST");
header("Content-Type: application/json");

include("../config/config.php");


    $config = new Config();

    $res = array();


if($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == "POST") {


        if($_POST['admin_username'] == $config->admin_username && $_POST['admin_paw'] == $config->admin_paw){
            $data = $config->get_all_teas();

            $all_item = array();

            while($rescord = mysqli_fetch_assoc($data)) {

                array_push($all_item, $rescord);

            }

            $res['data'] = $all_item;
        }

} else {

    $res['msg'] = "Only Get method is allowed...";

}

echo json_encode($res);

?>