<?php
try{
    session_start();
    if($_SERVER["REQUEST_METHOD"] === "GET"){
        if(isset($_SESSION["date"])){
            $starSign = unserialize($_SESSION["date"]);
            echo json_encode($starSign);
            exit;
        }else {
            throw new Exception("Nothing is saved...");
            exit;
        }
    }else {
        throw new Exception("Not a valid request...");
        exit;
    }
}catch(Exception $error){
    echo json_encode(false);
}
?>