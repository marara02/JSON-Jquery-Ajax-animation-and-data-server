<?php
$errorMSG = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["country"])) {
        $errorMSG = "<li>Country is required</li>";
    } else {
        $name = $_REQUEST["country"];
    }
    if(empty($errorMSG)){
        $msg = "What is the capital of"." ".$name."?";
        echo json_encode(['code'=>200, 'msg'=>$msg]);
        exit;
    }
    echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
}
?>