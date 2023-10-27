<?php 
include_once "../projectdetails.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $title = $_POST['title'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postcode = $_POST['postcode'];
    $residence = $_POST['residence'];
    $arrivaltime = $_POST['arrivaltime'];
    $comments = $_POST['comments'];
    $unique = $_POST['unique'];
    $uniquedate1 = $_POST['uniquedate1'];
    $uniquedate2 = $_POST['uniquedate2'];
    $uniquenights = $_POST['uniquenights'];
    $uniqueguestno = $_POST['uniqueguestno'];
    $uniqueprice = $_POST['uniqueprice'];
    $uniqueroom = $_POST['uniqueroom'];

    $name = $firstname. " ". $surname;


    if(empty($title) || empty($firstname) || empty($surname) || empty($email) || empty($telephone) || empty($mobile) || empty($address) || empty($city)
    || empty($postcode) || empty($residence) || empty($arrivaltime) || empty($comments) || empty($unique) || empty($uniquedate1) || empty($uniquedate2) || empty($uniquenights) || empty($uniqueguestno) || empty($uniqueprice) || empty($uniqueroom)){
        $errormsg = "Please input all fields";
    }  else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errormsg = "Invalid email format";
    }
    
    else {
        $user = new User;
        $emailuser = $user->selectGuestEmail(check_input($email));
        if(!empty($emailuser)){
            $errormsg = "Email Address Already exists";
        } else {
            $createroom = $user->createGuests(check_input($title),check_input($firstname),check_input($surname),check_input($email),check_input($telephone),check_input($mobile),check_input($address),
            check_input($city),check_input($postcode),check_input($residence),check_input($arrivaltime),check_input($comments),check_input($unique),check_input($uniquedate1),check_input($uniquedate2),check_input($uniquenights),check_input($uniqueguestno),check_input($uniqueprice),check_input($uniqueroom));
            header("Location: ../sendguestemail.php?name=$name&room=$uniqueroom&email=$email");
               if(isset($_GET['message'])){
                echo $_GET['message'];
               }
        }
    
    }

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