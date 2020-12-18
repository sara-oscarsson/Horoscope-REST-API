<?php
try{
    session_start();
    if($_SERVER["REQUEST_METHOD"] === "DELETE"){
        if(isset($_SESSION["date"])){
            unset($_SESSION["date"]);
            echo json_encode(true);
        }else {
            throw new Exception("There is nothing to delete...");
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