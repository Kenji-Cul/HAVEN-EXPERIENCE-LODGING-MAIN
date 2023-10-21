<?php 
include_once "../projectdetails.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $roomname = $_POST['roomname'];
    $roomlocation = $_POST['roomlocation'];
    $description = $_POST['description'];
    $featureone = $_POST['featureone'];
    $featuretwo = $_POST['featuretwo'];
    $featurethree = $_POST['featurethree'];
    $featurefour = $_POST['featurefour'];
    $featurefive = $_POST['featurefive'];
    $featuresix = $_POST['featuresix'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $bedroomno = $_POST['bedroomno'];
    $bathroomno = $_POST['bathroomno'];
    $guestno = $_POST['guestno'];
    $pricepernight = $_POST['pricepernight'];
    $roomimage = $_FILES['roomimage']['name'];
    $roomimage1 = $_FILES['roomimage1']['name'];
    $roomimage2 = $_FILES['roomimage2']['name'];
    $roomimage3 = $_FILES['roomimage3']['name'];
    $roomimage4 = $_FILES['roomimage4']['name'];
    $roomimage5 = $_FILES['roomimage5']['name'];
    $roomimage6 = $_FILES['roomimage6']['name'];


    if(empty($roomname) || empty($roomlocation) || empty($bedroomno) || empty($bathroomno) || empty($guestno) || empty($pricepernight)){
        $errormsg = "Please input all fields";
    } else if(empty($roomimage) || empty($roomimage1) || empty($roomimage2) || empty($roomimage3) || empty($roomimage4) || empty($roomimage5) || empty($roomimage6)){
        $errormsg = "Please select your file";
    } else {
        $user = new User;
        $createroom = $user->createRoom(check_input($roomname),check_input($roomlocation),check_input($bedroomno),check_input($bathroomno),check_input($guestno),check_input($pricepernight),check_input($description),
    check_input($featureone),check_input($featuretwo),check_input($featurethree),check_input($featurefour),check_input($featurefive),check_input($featuresix),check_input($checkin),check_input($checkout));
        echo $createroom;
        
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