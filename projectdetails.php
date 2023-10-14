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


    function createRoom($uniqueid,$roomname,$roomlocation,$noofbedrooms,$noofguests,$pricepernight,$roomimage,$roomimage1,$roomimage2,$roomimage3,$roomimage4,$roomimage5,$roomimage6){

    }
 }

 
?>