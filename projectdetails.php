<?php 


/**
 * Author: Teibo Gideon
 * Program: HAVEN EXPERIENCE LODGING
 * Date: 14 October 2023
 */

 include "signconstant.php";

 class User{
    var $dbcon;

    function __construct(){
        $this->dbcon = new MySqli(DB_SERVERNAME,DB_USERNAME,DB_PASSWORD,DB_NAME);
        if($this->dbcon->connect_error){
            die('Connection Failed: '.$this->dbcon->connect_error);
        } else {
            //echo "Connected Successfully";
        }
    }


    function createRoom($roomname,$roomlocation,$noofbedrooms,$bathroomno,$noofguests,$pricepernight,$description,
    $featureone,$featuretwo,$featurethree,$featurefour,$featurefive,$featuresix,$checkin,$checkout){
       if(isset($_FILES['roomimage']) || isset($_FILES['roomimage1']) || isset($_FILES['roomimage2']) || isset($_FILES['roomimage3']) 
       || isset($_FILES['roomimage4']) || isset($_FILES['roomimage5']) || isset($_FILES['roomimage6'])){
          $filename = $_FILES['roomimage']['name'];
          $filename1 = $_FILES['roomimage1']['name'];
          $filename2 = $_FILES['roomimage2']['name'];
          $filename3 = $_FILES['roomimage3']['name'];
          $filename4 = $_FILES['roomimage4']['name'];
          $filename5 = $_FILES['roomimage5']['name'];
          $filename6 = $_FILES['roomimage6']['name'];
          $filesize = $_FILES['roomimage']['size'];
          $filesize1 = $_FILES['roomimage1']['size'];
          $filesize2 = $_FILES['roomimage2']['size'];
          $filesize3 = $_FILES['roomimage3']['size'];
          $filesize4 = $_FILES['roomimage4']['size'];
          $filesize5 = $_FILES['roomimage5']['size'];
          $filesize6 = $_FILES['roomimage6']['size'];
          $filetype = $_FILES['roomimage']['type'];
          $filetype1 = $_FILES['roomimage1']['type'];
          $filetype2 = $_FILES['roomimage2']['type'];
          $filetype3 = $_FILES['roomimage3']['type'];
          $filetype4 = $_FILES['roomimage4']['type'];
          $filetype5 = $_FILES['roomimage5']['type'];
          $filetype6 = $_FILES['roomimage6']['type'];
          $file_error = $_FILES['roomimage']['error'];
          $file_error1 = $_FILES['roomimage1']['error'];
          $file_error2 = $_FILES['roomimage2']['error'];
          $file_error3 = $_FILES['roomimage3']['error'];
          $file_error4 = $_FILES['roomimage4']['error'];
          $file_error5 = $_FILES['roomimage5']['error'];
          $file_error6 = $_FILES['roomimage6']['error'];
          $filetmp = $_FILES['roomimage']['tmp_name'];
          $filetmp1 = $_FILES['roomimage1']['tmp_name'];
          $filetmp2 = $_FILES['roomimage2']['tmp_name'];
          $filetmp3 = $_FILES['roomimage3']['tmp_name'];
          $filetmp4 = $_FILES['roomimage4']['tmp_name'];
          $filetmp5 = $_FILES['roomimage5']['tmp_name'];
          $filetmp6 = $_FILES['roomimage6']['tmp_name'];

        //   validate images
        if($file_error > 0 || $file_error1 > 0 || $file_error2 > 0 || $file_error3 > 0 || $file_error4 > 0 || $file_error5 > 0 || $file_error6 > 0){
            $error = "You have not selected a file";
            return $error;
        }

        if($filesize > 2097152 || $filesize1 > 2097152 || $filesize2 > 2097152 || $filesize3 > 2097152 || $filesize4 > 2097152 || $filesize5 > 2097152 || $filesize6 > 2097152){
            $error = "Your file should be less than 2mb";
            return $error;
        }

        $extensions = array("gif","png","jpeg","svg","jpg");
        $file_ext = explode(".",$filename);
        $file_ext = end($file_ext);
        $file_ext1 = explode(".",$filename1);
        $file_ext1 = end($file_ext1);
        $file_ext2 = explode(".",$filename2);
        $file_ext2 = end($file_ext2);
        $file_ext3 = explode(".",$filename3);
        $file_ext3 = end($file_ext3);
        $file_ext4 = explode(".",$filename4);
        $file_ext4 = end($file_ext4);
        $file_ext5 = explode(".",$filename5);
        $file_ext5 = end($file_ext5);
        $file_ext6 = explode(".",$filename6);
        $file_ext6 = end($file_ext6);

        if(!in_array(strtolower($file_ext),$extensions)){
             $error = $file_ext." File format not supported";
             return $error;
    }

    if(!in_array(strtolower($file_ext1),$extensions)){
        $error = $file_ext1." File format not supported";
        return $error;
}

if(!in_array(strtolower($file_ext2),$extensions)){
    $error = $file_ext2." File format not supported";
    return $error;
}

if(!in_array(strtolower($file_ext3),$extensions)){
    $error = $file_ext3." File format not supported";
    return $error;
}

if(!in_array(strtolower($file_ext4),$extensions)){
    $error = $file_ext4." File format not supported";
    return $error;
}

if(!in_array(strtolower($file_ext5),$extensions)){
    $error = $file_ext5." File format not supported";
    return $error;
}

if(!in_array(strtolower($file_ext6),$extensions)){
    $error = $file_ext6." File format not supported";
    return $error;
}

// upload document
$newfilename = time().rand().".".$file_ext;
$newfilename1 = time().rand().".".$file_ext1;
$newfilename2 = time().rand().".".$file_ext2;
$newfilename3 = time().rand().".".$file_ext3;
$newfilename4 = time().rand().".".$file_ext4;
$newfilename5 = time().rand().".".$file_ext5;
$newfilename6 = time().rand().".".$file_ext6;

$destination_path = getcwd().DIRECTORY_SEPARATOR;
$target_path = $destination_path . '../roomimage/'. basename($newfilename);
$target_path1 = $destination_path . '../roomimage/'. basename($newfilename1);
$target_path2 = $destination_path . '../roomimage/'. basename($newfilename2);
$target_path3 = $destination_path . '../roomimage/'. basename($newfilename3);
$target_path4 = $destination_path . '../roomimage/'. basename($newfilename4);
$target_path5 = $destination_path . '../roomimage/'. basename($newfilename5);
$target_path6 = $destination_path . '../roomimage/'. basename($newfilename6);

if(move_uploaded_file($filetmp,$target_path) && move_uploaded_file($filetmp1,$target_path1) && move_uploaded_file($filetmp2,$target_path2) && move_uploaded_file($filetmp3,$target_path3)
&& move_uploaded_file($filetmp4,$target_path4) && move_uploaded_file($filetmp5,$target_path5) && move_uploaded_file($filetmp6,$target_path6)){
    $uniqueid = rand();
    $sql = "INSERT INTO rentroom(unique_id,room_name,room_location,no_of_bedrooms,no_of_guests,price_per_night,room_image,room_image1,room_image2,room_image3,room_image4,room_image5
    ,room_image6,no_of_baths,description,check_in_date,check_out_date,feature_one,feature_two,feature_three,feature_four,feature_five,feature_six) VALUES('{$uniqueid}','{$roomname}','{$roomlocation}','{$noofbedrooms}','{$noofguests}','{$pricepernight}','{$newfilename}','{$newfilename1}','{$newfilename2}'
    ,'{$newfilename3}','{$newfilename4}','{$newfilename5}','{$newfilename6}','{$bathroomno}','{$description}','{$checkin}','{$checkout}','{$featureone}','{$featuretwo}','{$featurethree}','{$featurefour}','{$featurefive}',
    '{$featuresix}')";
    $result = $this->dbcon->query($sql);
    if($this->dbcon->affected_rows == 1){
        echo "success";
    } else {
        //echo $this->dbcon->error;
    }
}
    }
    }



    function selectAllRooms(){
        $sql = "SELECT * FROM rentroom ORDER BY room_id DESC";
        $result = $this->dbcon->query($sql);
        $rows = array();
        if($this->dbcon->affected_rows > 0){
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        } else {
            return $rows;
        }
    }

    function selectRooms(){
        $sql = "SELECT * FROM rentroom ORDER BY room_id DESC LIMIT 7";
        $result = $this->dbcon->query($sql);
        $rows = array();
        if($this->dbcon->affected_rows > 0){
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        } else {
            return $rows;
        }
    }

    function selectRoomDetails($unique){
        $sql = "SELECT * FROM rentroom WHERE unique_id = '{$unique}'";
        $result = $this->dbcon->query($sql);
        $rows = array();
        if($this->dbcon->affected_rows > 0){
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        } else {
            return $rows;
        }
    }
 }

 
?>