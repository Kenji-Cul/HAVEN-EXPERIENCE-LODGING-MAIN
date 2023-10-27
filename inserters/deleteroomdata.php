<?php 
include_once "../projectdetails.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $unique = $_POST['unique'];
        $user = new User;
        $createroom = $user->deleteRoom(check_input($unique));
        echo $createroom;
        

    if(isset($errormsg)){
        echo $errormsg;
    }

   
}

function check_input($data){
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>