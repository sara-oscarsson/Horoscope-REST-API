<?php
try{
    session_start();
    if($_SERVER["REQUEST_METHOD"] === "POST"){
      if(isset($_POST["date"])){
        if(!isset($_SESSION["date"])){
          $_SESSION["date"] = serialize($_POST["date"]); 
          echo json_encode(true);
          exit;
        }else{
          throw new Exception("A date is already saved...");
          exit;
        }           
      }else{
        throw new Exception("No date was found in the body...");
        exit;
      }
    }else{
        throw new Exception("Not a valid request-method...");    
        exit;
    }
}catch(Exception $error) {
  echo json_encode(false);
  exit;
}
?>