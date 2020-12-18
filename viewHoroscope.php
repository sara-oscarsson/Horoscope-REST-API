<?php
require("calculateHoroscope.php");
try{
    session_start();
    if($_SERVER["REQUEST_METHOD"] === "GET"){
        if(isset($_SESSION["date"])){
            $month_and_day = unserialize($_SESSION["date"]);
            $starSign = splitNumbers($month_and_day);
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