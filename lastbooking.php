<?php 
include "projectdetails.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="css/index.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    
a{
  text-decoration: none;
}
.input-div{
  top: 5em;
}

.div-input{
    height: 400px;
}

.form__div img{
    width: 17em;
    height: 15em;
    border-radius: 8px;
    position: absolute;
    top: 4em;
    right: 20%;
    object-fit: cover;
}

.datecontainer,.datecontainer2,#locations,#locations2,#locations3,#locations4,#locations5{
  z-index: 3000;
}



.product-content,.icon-content,.content-2{
  width: 100%;
  background-color: #CBB6A7;
  padding: 15px 0;
}

.product-div .icon-content{
    position: absolute;
    bottom: 34px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1em;
    flex-direction: row;
    width: 100%;
    border-radius: 0px 0px 8px 8px;
}

.product-div .content-2{
    position: absolute;
    bottom: 0px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1em;
    flex-direction: row;
    width: 100%;
    border-radius: 0px 0px 8px 8px;
}

.content-2 p{
  color: #fff;
}

.icon-content i{
  color: #fff;
}

.icon-content .icon-child{
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 5px;
}

.icon-child p{
  color: #fff;
}



      
body{
    overflow-x:hidden;
    height: 250vh;
}
        .head-container{
            padding-top: 20px;
            background-color: #f5f5f5;
            padding-bottom: 10px;
        }

        ul .home-link a{
    color: #000!important;
    font-weight: 600;
}

        .header ul li a{
    text-decoration: none;
    color: #A39286;
}

.header ul li a:hover{
    color: #000!important;
    font-weight: 600;
    transition: cubic-bezier(0.57,-0.09, 0.36, 1)!important;
}

/* About Div Styling */
.aboutus{
    height: 446px;
    width: 100%;
    background-color: #ebbab4;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.aboutus .aboutp{
    color: #221615;
text-align: center;
font-size: 57px;
font-style: normal;
font-weight: 700;
line-height: 52.8px;
text-transform: capitalize;
}

.aboutus .left-image-div{
   display: flex;
   gap: 2em;
   position: relative;
   height: 14em;
}

.left-image-div img{
  width: 80px;
  height: 80px;
}

/* .left-image-div .pos1{
  position: absolute;
  bottom: 9px;
} */

.left-image-div .pos2{
  position: absolute;
  right: 9px;
  bottom: 10px;
}

.left-image-div .pos3{
  position: absolute;
  bottom: 9px;
}

.left-image-div .pos4{
  position: absolute;
  right: 9px;
  bottom: 10px;
}

.left-image-div .img-con{
  position: absolute;
  bottom: 9px;
  background-color: #fff;
  width: 93px;
  height: 90px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 5px;
  box-shadow: 0px 5px 16px 6px rgba(50, 71, 92, 0.02), 0px 15px 19px 2px rgba(50, 71, 92, 0.04), 0px 7px 19px 5px rgba(50, 71, 92, 0.06);
}

/* Second About Us Styling */
.second-aboutus{
    height: 500px;
    width: 100%;
    background-color: #f5f5f5;
    display: flex;
    align-items: center;
    justify-content: space-around;
    position: relative;
}

.second-aboutus .seconddiv img{
    width: 25em;
    height: 25em;
    object-fit: cover;
}

.second-aboutus .firstdiv{
  width: 50%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 2em;
}

.firstdiv .p1{
  color: #191A1D;
font-size: 57px;
font-style: normal;
font-weight: 700;
line-height: 53px;
text-transform: capitalize;
text-align: left;
}

.firstdiv .p2{
  color: #7A6D64;
font-size: 20px;
font-style: normal;
font-weight: 400;
line-height: 31.7px; 
text-align: left;
}

/* Third About Us Styling */
.third-aboutus{
  height: 500px;
    width: 100%;
    background-color: #167e56;
    display: flex;
    align-items: center;
    justify-content: space-around;
    position: relative;
}

.third-aboutus p{
  width: 50%;
  color: #FFF;
font-size: 24px;
font-style: normal;
font-weight: 400;
line-height: 25.2px;
}


/* Booking Container Styling */
.booking-container{
    width: 90%;
    display: flex;
    align-items: top;
    justify-content: center;
    gap: 2em;
    position: relative;
}

.booking-container-2{
    width: 80%;
    margin-bottom: 2em;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2em 0;
    box-shadow: 0px 5px 16px 6px rgba(50, 71, 92, 0.02), 0px 15px 19px 2px rgba(50, 71, 92, 0.04), 0px 7px 19px 5px rgba(50, 71, 92, 0.06);
    border-radius: 8px;
    padding-left: 2em;
    padding-right: 2em;
}


.booking-container-2 p{
    color: var(--light-text-primary, rgba(50, 71, 92, 0.87));
font-feature-settings: 'clig' off, 'liga' off;
font-family: Nunito Sans;
font-size: 20px;
font-style: normal;
font-weight: 600;
line-height: 32px; /* 160% */
letter-spacing: 0.15px;
}

.booking-container-2 button{
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 18px 12px;
  width: 8em;
  border-radius: 6px;
  background-color: #AA706A;
  border: none;
  color: #fff;
  font-size: 14px;
  text-transform: uppercase;
  box-shadow: 0px 1px 4px 2px rgba(50, 71, 92, 0.02), 0px 2px 6px 1px rgba(50, 71, 92, 0.04), 0px 1px 6px 2px rgba(50, 71, 92, 0.06);
}

.booking-container .booking-container-div{
    width: 50%;
}

.booking-container-div-2{
    width: 30%;
    height: 412px;
    border-radius: 8px;
background: var(--light-background-paper, #FFF);

/* Light/Elevation/6 */
box-shadow: 0px 2px 6px 4px rgba(50, 71, 92, 0.02), 0px 4px 9px 1px rgba(50, 71, 92, 0.04), 0px 2px 9px 0px rgba(50, 71, 92, 0.06);
}

.booking-container-div-2 .booking-p{
    width: 100%;
    border-bottom: 1px solid #32475c;
    border-radius: 8px 8px 0px 0px;
    padding: 25px 0;
    text-align: center;
    color: var(--light-text-primary, rgba(50, 71, 92, 0.87));
font-feature-settings: 'clig' off, 'liga' off;
font-size: 20px;
font-style: normal;
font-weight: 600;
line-height: 32px; /* 160% */
letter-spacing: 0.15px;
}

.booking-container-div-2 .booking-flex{
  display: flex;
  align-items: center;
  justify-content: space-around;
  padding: 3px 0;
}

.booking-container-div-2 .booking-flex-2{
  display: flex;
  align-items: center;
  justify-content: space-around;
  padding: 20px 0;
  margin-top: 1em;
  border-top: 1px solid #32475C;
}

.booking-flex p{
  color: var(--light-text-secondary, rgba(50, 71, 92, 0.60));
font-feature-settings: 'clig' off, 'liga' off;
font-size: 12px;
font-style: normal;
font-weight: 300;
line-height: 14px; /* 116.667% */
letter-spacing: 0.4px;
}

.booking-flex-2 p{
  color: var(--light-text-secondary, rgba(50, 71, 92, 0.60));
font-feature-settings: 'clig' off, 'liga' off;
font-size: 12px;
font-style: normal;
font-weight: 300;
line-height: 14px; /* 116.667% */
letter-spacing: 0.4px;
}

.booking-container-div-2 .booking-p-2{
    width: 100%;
    border-radius: 8px 8px 0px 0px;
    padding: 25px 0;
    text-align: center;
    color: var(--light-text-primary, rgba(50, 71, 92, 0.87));
font-feature-settings: 'clig' off, 'liga' off;
font-size: 20px;
font-style: normal;
font-weight: 600;
line-height: 32px; /* 160% */
letter-spacing: 0.15px;
}

.booking-container-div .booking-child-1{
    display:flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 20px;
    padding: 19px 15px;
    border-radius: 8px;
    box-shadow: 0px 1px 4px 2px rgba(50, 71, 92, 0.02), 0px 2px 6px 1px rgba(50, 71, 92, 0.04), 0px 1px 6px 2px rgba(50, 71, 92, 0.06);
}

.booking-container-div .booking-child-2{
    padding: 19px 15px;
    border-radius: 8px;
    box-shadow: 0px 1px 4px 2px rgba(50, 71, 92, 0.02), 0px 2px 6px 1px rgba(50, 71, 92, 0.04), 0px 1px 6px 2px rgba(50, 71, 92, 0.06);
    margin-top: 3em;
}



.booking-child-1 p, .booking-child-2 p{
color: var(--light-text-primary, rgba(50, 71, 92, 0.87));
font-feature-settings: 'clig' off, 'liga' off;
font-size: 20px;
font-style: normal;
font-weight: 600;
line-height: 32px; /* 160% */
letter-spacing: 0.15px;
text-align: left;
width: 100%;
}
.booking-child-1 form{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.booking-child-1 form input{
    display: flex;
width: 414px;
flex-direction: column;
align-items: flex-start;
gap: 3px;
border-radius: 6px;
padding: 14px;
border: 1px solid #32475C;
}

.booking-child-1 form button{
    display: flex;
  align-items: center;
  justify-content: center;
  padding: 18px 12px;
  width: 12em;
  border-radius: 6px;
  background-color: #AA706A;
  border: none;
  color: #fff;
  font-size: 14px;
  text-transform: uppercase;
  box-shadow: 0px 1px 4px 2px rgba(50, 71, 92, 0.02), 0px 2px 6px 1px rgba(50, 71, 92, 0.04), 0px 1px 6px 2px rgba(50, 71, 92, 0.06);
}

.booking-child-2 form button{
    display: flex;
  align-items: center;
  justify-content: center;
  padding: 18px 12px;
  width: 12em;
  border-radius: 6px;
  background-color: #AA706A;
  border: none;
  color: #fff;
  font-size: 14px;
  text-transform: uppercase;
  box-shadow: 0px 1px 4px 2px rgba(50, 71, 92, 0.02), 0px 2px 6px 1px rgba(50, 71, 92, 0.04), 0px 1px 6px 2px rgba(50, 71, 92, 0.06);
}
.booking-child-2 form input{
    display: flex;
width: 80%;
flex-direction: column;
align-items: flex-start;
gap: 3px;
border-radius: 6px;
padding: 14px;
border: 1px solid #32475C;
}

.booking-child-2 .button-flex{
    width: 94%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2em 0;
    padding-left: 1em;
    padding-right: 1em;
}

.booking-child-2 .first-button{
    display: flex;
  align-items: center;
  justify-content: center;
  padding: 18px 5px;
  width: 9em;
  border-radius: 6px;
  background-color: #fff;
  border: 1px solid #32475C;
  color: #AA706A;
  font-size: 14px;
  text-transform: uppercase;
  box-shadow: 0px 1px 4px 2px rgba(50, 71, 92, 0.02), 0px 2px 6px 1px rgba(50, 71, 92, 0.04), 0px 1px 6px 2px rgba(50, 71, 92, 0.06);
}

.error{
  width: 70%;
  display: none;
  align-items: center;
  justify-content: center;
  border-radius: 10px;
  margin: 0 auto;
  padding: 5px 0;
  background-color: red;
  color: #fff;
  box-shadow: 0px 1px 4px 2px rgba(50, 71, 92, 0.02), 0px 2px 6px 1px rgba(50, 71, 92, 0.04), 0px 1px 6px 2px rgba(50, 71, 92, 0.06);
}

.booking-child-2 .form--div{
    position: relative;
    margin-top: 2em;
}

.booking-child-2 .form--div label{
  font-size: 12px;
  position: absolute;
  top: -8px;
  left: 12px;
  background-color: #fff;
  padding: 0 2px;
}

/* Mobile Screen Styling */
@media only screen and (max-width: 800px){
  /* Header Styling */
.header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 0;
    padding: 0 20px;
}

.header ul{
  z-index: 4000;
}

/* About Div Styling */
.aboutus{
    height: 300px;
    width: 100%;
    background-color: #ebbab4;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.aboutus .aboutp{
    color: #221615;
text-align: center;
font-size: 40px;
font-style: normal;
font-weight: 700;
line-height: 52.8px;
text-transform: capitalize;
}

.aboutus .left-image-div{
  display: none;
}



.firstdiv .p1{
  color: #191A1D;
font-size: 40px;
font-style: normal;
font-weight: 700;
line-height: 53px;
text-transform: capitalize;
width: 180%;
text-align: left;
}



.firstdiv .p2{
  color: #7A6D64;
font-size: 15px;
font-style: normal;
font-weight: 400;
line-height: 31.7px; 
text-align: left;
width: 180%;
}

.third-aboutus p{
  width: 50%;
  color: #FFF;
font-size: 15px;
font-style: normal;
font-weight: 400;
line-height: 25.2px;
width: 100%;
padding: 1em;
}

/* Second About Us Styling */
.second-aboutus{
    height: 700px;
    width: 100%;
    background-color: #f5f5f5;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-direction: column;
    position: relative;
    padding-top: 3em;
}

.second-aboutus .seconddiv img{
    width: 15em;
    height: 15em;
    object-fit: cover;
}

.div-input{
    height: 710px;
}

.form__div img{
    width: 17em;
    height: 15em;
    border-radius: 8px;
    position: absolute;
    top: 22em;
    left: 2%;
    object-fit: cover;
}


.booking-container-2{
    width: 80%;
    margin-bottom: 2em;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2em 0;
    box-shadow: 0px 5px 16px 6px rgba(50, 71, 92, 0.02), 0px 15px 19px 2px rgba(50, 71, 92, 0.04), 0px 7px 19px 5px rgba(50, 71, 92, 0.06);
    border-radius: 8px;
    padding-left: 2em;
    padding-right: 2em;
}


.booking-container-2 p{
    color: var(--light-text-primary, rgba(50, 71, 92, 0.87));
font-feature-settings: 'clig' off, 'liga' off;
font-family: Nunito Sans;
font-size: 14px;
font-style: normal;
font-weight: 600;
line-height: 32px; /* 160% */
letter-spacing: 0.15px;
}

.booking-container-2 button{
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 14px 10px;
  width: 8em;
  border-radius: 6px;
  background-color: #AA706A;
  border: none;
  color: #fff;
  font-size: 14px;
  text-transform: uppercase;
  box-shadow: 0px 1px 4px 2px rgba(50, 71, 92, 0.02), 0px 2px 6px 1px rgba(50, 71, 92, 0.04), 0px 1px 6px 2px rgba(50, 71, 92, 0.06);
}


/* Booking Container Styling */
.booking-container{
    width: 90%;
    display: flex;
    align-items: top;
    justify-content: center;
    flex-direction: column;
    gap: 2em;
    position: relative;
}

.booking-container .booking-container-div{
    width: 97%;
}

.booking-child-1 form input{
    display: flex;
width: 200px;
flex-direction: column;
align-items: flex-start;
gap: 3px;
border-radius: 6px;
padding: 14px;
border: 1px solid #32475C;
}

.booking-child-1 form button{
    display: flex;
  align-items: center;
  justify-content: center;
  padding: 12px 12px;
  width: 10em;
  border-radius: 6px;
  background-color: #AA706A;
  border: none;
  color: #fff;
  font-size: 10px;
  text-transform: uppercase;
  box-shadow: 0px 1px 4px 2px rgba(50, 71, 92, 0.02), 0px 2px 6px 1px rgba(50, 71, 92, 0.04), 0px 1px 6px 2px rgba(50, 71, 92, 0.06);
}

.booking-container-div-2{
    width: 90%;
    height: 412px;
    border-radius: 8px;
background: var(--light-background-paper, #FFF);

/* Light/Elevation/6 */
box-shadow: 0px 2px 6px 4px rgba(50, 71, 92, 0.02), 0px 4px 9px 1px rgba(50, 71, 92, 0.04), 0px 2px 9px 0px rgba(50, 71, 92, 0.06);
}

}

    </style>
</head>
<body>
    <!-- Header -->
  <div class="head-container">
    <div class="header">
      <a href="index.php"><div class="logo">
        <img src="images/haven_logo3.png" alt="">
      </div>
     </a>
     <img src="images/menu2.png" alt="" class="navmenu">
      <ul>
        <div class="mobilediv">
          <a href="index.php"><div class="logo">
            <img src="images/haven_logo3.png" alt="">
          </div>
          </a>
          <img src="images/close.png" alt="" class="navclose">
        </div>
        <li class="home-link"><a href="index.php">Home</a></li>
        <li ><a href="about.php">About</a></li>                                                                                                     
        <li><a href="partner.html">Partner with us</a></li>
        <li><a href="affiliates.html">Affiliates</a></li>
        <li><a href="accomodation.html">Accomodation</a></li>
        <li><a href="landlord.html">Landlord Services</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  </div>



 <!-- Main -->
 <div class="main">
 <?php 
       $room = new User;
       $allrooms = $room->selectRoomDetails($_GET['id']);

       if(!empty($allrooms)){
        foreach ($allrooms as $key => $value) {
      ?>
     <!-- Booking Header -->
     <div class="booking-container-2">
        <p><?php echo $value['room_name'];?></p>
        <!-- <a href="#"><button>Back</button></a> -->
     </div>

     <!-- Booking Details -->
     <div class="booking-container">
        <div class="booking-container-div">
            <!-- <div class="booking-child-1">
                <p>Voucher Code</p>
                <form action="">
                    <input type="text" name="vouchercode" id="" placeholder="Enter Voucher Code">
                    <button type="submit">confirm booking</button>
                </form>
            </div> -->
            <div class="booking-child-2">
                <p>Guest Details</p>
                <form action="" id="secondform">
                <input type="hidden" id="unique" name="uniquedate1" value="<?php $date = new DateTimeImmutable($value['check_in_date']);
                echo $date->format('l jS \o\f F Y '), "\n";
                //echo $value['check_in_date'];
              ?>" >
               <input type="hidden" id="unique1" name="uniquedate2" value="<?php  $date = new DateTimeImmutable($value['check_out_date']);
                 echo $date->format('l jS \o\f F Y '), "\n";
              ?>" >
               <input type="hidden" id="unique2" name="uniquenights" value="<?php $date1 = strtotime($value['check_in_date']);
                        $date2 = strtotime($value['check_out_date']);
                        $diff = $date2 - $date1;
                        $days = floor($diff / (60 * 60 * 24)) - 1;
                        echo $days;
              ?>" >
               <input type="hidden" id="unique3" name="uniqueguestno" value="<?php  echo $_GET['gno'];
              ?>" >
               <input type="hidden" id="unique6" name="uniqueroom" value="<?php echo $value['room_name'];
              ?>" >
               <input type="hidden" id="unique4" name="uniqueprice" value="<?php $pricepernight = $_GET['p'];
            if($pricepernight > 999 || $pricepernight > 9999 || $pricepernight > 99999 || $pricepernight > 999999 || $pricepernight > 999999){
              echo number_format($pricepernight);
            } else {
              echo round($pricepernight);
            }
              ?>" >
               <input type="hidden" id="unique5" name="unique" value="<?php $uniqueid = rand(); 
                echo $uniqueid;
              ?>" >
                    <div class="form--div">
                        <input type="text" name="title" id="" placeholder="Enter title">
                    <label for="">Title</label>
                    </div>

                    <div class="form--div">
                        <input type="text" name="firstname" id="" placeholder="Enter your first name">
                    <label for="">First Name</label>
                    </div>

                    <div class="form--div">
                        <input type="text" name="surname" id="" placeholder="Enter your surname">
                    <label for="">Surname</label>
                    </div>

                    <div class="form--div">
                        <input type="text" name="email" id="" placeholder="Enter your email">
                    <label for="">Email</label>
                    </div>

                    <div class="form--div">
                        <input type="number" name="telephone" id="" placeholder="Enter your telephone">
                    <label for="">Telephone</label>
                    </div>

                    <div class="form--div">
                        <input type="number" name="mobile" id="" placeholder="Enter your mobile">
                    <label for="">Mobile</label>
                    </div>

                    <div class="form--div">
                        <input type="text" name="address" id="" placeholder="Enter your addrress">
                    <label for="">Address</label>
                    </div>

                    <div class="form--div">
                        <input type="text" name="city" id="" placeholder="Enter your city">
                    <label for="">City</label>
                    </div>

                    <div class="form--div">
                        <input type="text" name="postcode" id="" placeholder="Enter your postcode">
                    <label for="">Postcode</label>
                    </div>

                    <div class="form--div">
                        <input type="text" name="residence" id="" placeholder="Enter your country of residence">
                    <label for="">Country of Residence</label>
                    </div>

                    <div class="form--div">
                        <input type="text" name="arrivaltime" id="" placeholder="Enter your arrival time">
                    <label for="">Arrival Time</label>
                    </div>

                    <div class="form--div">
                        <input type="text" name="comments" id="" placeholder="Enter your comments">
                    <label for="">Comments</label>
                    </div>

                    <div class="button-flex">
                        <button class="first-button">back</button>
                    <button type="submit" id="submit">confirm booking</button>
                    </div>

                    <div class="error">
                      Please input all fields
                    </div>
                </form>
            </div>
    </div>

    <div class="booking-container-div-2">
            <p class="booking-p">Your Booking Details</p>
        <div>
       
            <p class="booking-p-2"><?php echo $value['room_name'];?></p>
            
            <div class="booking-flex">
                <p>Check In</p>
                <p><?php 
                $date = new DateTimeImmutable($value['check_in_date']);
                echo $date->format('l jS \o\f F Y '), "\n";
                //echo $value['check_in_date'];?></p>
            </div>
            <div class="booking-flex">
                <p>Check Out</p>
                <p><?php 
                 $date = new DateTimeImmutable($value['check_out_date']);
                 echo $date->format('l jS \o\f F Y '), "\n";
                //echo $value['check_out_date'];?></p>
            </div>
        </div>
        <?php }}?>
        <div class="booking-flex-2">
            <p>Nights</p>
            <p><?php 
                        $date1 = strtotime($value['check_in_date']);
                        $date2 = strtotime($value['check_out_date']);
                        $diff = $date2 - $date1;
                        $days = floor($diff / (60 * 60 * 24)) - 1;
                        echo $days;
                        ?></p>
        </div>
        <div class="booking-flex-2">
            <p>Guests</p>
            <p><?php echo $_GET['gno'];
            ?></p>
        </div>
        <div class="booking-flex-2">
            <p>Grand Total</p>
            <p>£<?php $pricepernight = $_GET['p'];
            if($pricepernight > 999 || $pricepernight > 9999 || $pricepernight > 99999 || $pricepernight > 999999 || $pricepernight > 999999){
              echo number_format($pricepernight);
            } else {
              echo round($pricepernight);
            }
            ?></p>
        </div>
    </div>
     </div>
  </div>

 
   <!-- Footer -->
   <div class="footer">
     <div class="footerdiv-1">
       <img src="images/Haven_logo2.png" alt="">
       <p>Copyright Ascend Designs</p>
     </div>
      
     <div class="footerdiv-2">
       <p class="head-1">Get in Touch</p>
 
       <div>
         <img src="images/location.png" alt="">
         <p>15 Garden Close Dutse,
           Abuja</p>
       </div>
 
       <div>
         <img src="images/email.png" alt="">
         <p>info@mwtkcommunity.org</p>
       </div>
 
       <div>
         <img src="images/call.png" alt="">
         <p>+234 813 935 9882
           +234 903 088 4776</p>
       </div>
     </div>
 
     <div class="footerdiv-3">
      <p class="head-2">Pages</p>
     <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="partner.html">Become a Partner</a></li>
      <li><a href="affiliates.html">Affiliates</a></li>
      <li><a href="accomodation.html">Accomodation</a></li>
     </ul>
    </div>

    <div class="footerdiv-4">
      <p class="head-3">Pages</p>
      <ul>
        <li><a href="landlord.html">Landlord</a></li>
        <li><a href="landlord.html">Services</a></li>
        <li><a href="contact.html">Contact</a></li>
       </ul>
       <div class="round-div">
         <a href=""><div class="round">FB</div></a>
         <a href=""><div class="round">IG</div></a>
         <a href=""><div class="round">TW</div></a>
       </div>
    </div>
   </div>

   <script>
   if(window.innerWidth < 1000){
    let menu = document.querySelector('.header .navmenu');
  let close = document.querySelector('.header .navclose');
  let dropdown = document.querySelector('.header ul');

  menu.onclick = () =>{
      dropdown.style = `
       top: 0;
      `;
  }

  close.onclick = () =>{
      dropdown.style = `
      top: -100%;
      `;
  }
  }

 
  let downinput = document.querySelector('#locationinput');
  let downinput2 = document.querySelector('#locationinput2');
  let numinput = document.querySelector('#numinput');
  let numinput2 = document.querySelector('#numinput2');
  let locationone = document.querySelector('#locations');
  let locationtwo = document.querySelector('#locations2');
  let locationthree = document.querySelector('#locations3');
  let locationfour = document.querySelector('#locations4');
  let checkinput =  document.querySelector('.form__div #checkinput');
  let checkinput2 =  document.querySelector('.form__div #checkinput2');
  let submit =  document.querySelector('#secondform #submit');
  let form =  document.querySelector('#secondform');
  let allinputs = form.querySelectorAll('#secondform input');
  let uniqueinput = form.querySelector('#secondform #unique5');
  let error = document.querySelector('.error');
  let backbutton =  document.querySelector('.button-flex .first-button');
  let datecontainer = document.querySelector('.datecontainer');
  let datecontainer2 = document.querySelector('.datecontainer2');
  
  form.onsubmit = (e) => {
    e.preventDefault();
    checkNullInputs();
    insertGuestDetails();
  }

  function checkNullInputs(){
       allinputs.forEach((element) => {
        element.oninput = () => {
            if(element.value == ""){
         element.style.borderColor = "red";
       } else {
        element.style.borderColor = "black";
       }
        }
        //console.log(element);
       if(element.value == ""){
         element.style.borderColor = "red";
       } else {
        element.style.borderColor = "black";
       }
   })
  }


  function insertGuestDetails(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST","inserters/uploadguestdetails.php",true);
    xhr.onload = () => {
      if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200) {
          let data = xhr.response;
           if(data === "success"){
            //console.log("uploaded");
            error.style.display = "flex";
            error.style.backgroundColor = "green";
            error.textContent = "Details submitted";
            <?php 
       $allrooms = $room->selectRoomDetails($_GET['id']);

       if(!empty($allrooms)){
        foreach ($allrooms as $key => $value) {
      ?>
            location.href=`guestdetails.php?u=${uniqueinput.value}&unique=<?php echo $value['unique_id']?>&runi=uagfjagfaj`;
            <?php }}?>
            allinputs.forEach((element) => { 
              element.value = "";
            })
           } else {
               console.log(data);
               error.style.display = "flex";
               error.textContent = data;
           }
        }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
  }
  
  backbutton.addEventListener('click',function(e){
   location.href="accomodationinfo.php?id=<?php echo $value['unique_id']?>&name=ijflsjanfgnka";
  })

//   window.addEventListener('click', function(e){   
//   if (downinput.contains(e.target)  || downinput2.contains(e.target) || numinput.contains(e.target) ||  numinput2.contains(e.target) || checkinput.contains(e.target) || checkinput2.contains(e.target)){
//     // Clicked in box
//   } else{
//     locationone.style.display = "none";
//     locationtwo.style.display = "none";
//     locationthree.style.display = "none";
//     locationfour.style.display = "none";
//     datecontainer.style.display = "none";
//     datecontainer2.style.display = "none";
//   }
// });
    
  


 


 

  // submit.addEventListener('click',function(){
  //   location.href = "lastbooking.html";
  // });
  

  

 

   let optionclick3 = document.getElementsByName('category2');
  
   //console.log(document.querySelector('.form__div #locationinput').value)
   
   optionclick3.forEach((element) => {
    element.onclick= () =>{
      document.querySelector('#locationinput2').value
                        = element.value;
      locationthree.style.display = "none";
    }
   })

   let optionclick4 = document.getElementsByName('number2');
  
  //console.log(document.querySelector('.form__div #locationinput').value)
  
  optionclick4.forEach((element) => {
   element.onclick= () =>{
     document.querySelector('#locationinput').value
                       = element.value;
     locationone.style.display = "none";
   }
  })


  let optionclick5 = document.getElementsByName('numbers');
  //console.log(optionclick5);
  
  //console.log(document.querySelector('.form__div #locationinput').value)
  
  optionclick5.forEach((element) => {
   element.onclick= () =>{
     document.querySelector('#numinput2').value
                       = element.value;
     locationfour.style.display = "none";
   }
  })





   let optionclick2 = document.getElementsByName('number');
   //console.log(document.querySelector('.form__div #locationinput').value)
   
   optionclick2.forEach((element) => {
    element.onclick= () =>{
      document.querySelector('#numinput').value
                        = element.value;
        locationtwo.style.display = "none";
    }
   })
  

   //The Date Programming
   const date = new Date();

   const renderCalendar = () => {
    date.setDate(1);
   const monthDays = document.querySelector('.days');
   const lastDay = new Date(date.getFullYear(),date.getMonth() + 1,0).getDate();
   const prevLastDay = new Date(date.getFullYear(),date.getMonth() + 1,0).getDate();
   const firstDayIndex = date.getDay();
   const lastDayIndex = new Date(date.getFullYear(),date.getMonth() + 1,0).getDay();

   const nextDays = 7 - lastDayIndex - 1;
   const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
   ];

   document.querySelector('.date h1').innerHTML = months[date.getMonth()];
   document.querySelector('.date p').innerHTML = new Date().toDateString();
   let days = "";

   for(let x = firstDayIndex; x >0; x--){
    days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
   }
   
   for(let i =1; i<=lastDay; i++){
    if(i === new Date().getDate() && date.getMonth() === new Date().getMonth()){
      days+=`<div class="today present-date">${i}</div>`; 
    }else {
      days+=`<div class="present-date">${i}</div>`;
    }


    monthDays.innerHTML = days;
     
   }

   for(let j = 1; j <= nextDays; j++){
    days += `<div class="next-date">${j}</div>`;
    monthDays.innerHTML = days;
   }
   //console.log(date);

   }


   const renderCalendar2 = () => {
    date.setDate(1);
   const monthDays2 = document.querySelector('.days2');
   const lastDay = new Date(date.getFullYear(),date.getMonth() + 1,0).getDate();
   const prevLastDay = new Date(date.getFullYear(),date.getMonth() + 1,0).getDate();
   const firstDayIndex = date.getDay();
   const lastDayIndex = new Date(date.getFullYear(),date.getMonth() + 1,0).getDay();

   const nextDays = 7 - lastDayIndex - 1;
   const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
   ];

   document.querySelector('.date2 h1').innerHTML = months[date.getMonth()];
   document.querySelector('.date2 p').innerHTML = new Date().toDateString();
   let days = "";

   for(let x = firstDayIndex; x >0; x--){
    days += `<div class="prev-date2">${prevLastDay - x + 1}</div>`;
   }
   
   for(let i =1; i<=lastDay; i++){
    if(i === new Date().getDate() && date.getMonth() === new Date().getMonth()){
      days+=`<div class="today2 present-date2">${i}</div>`; 
    }else {
      days+=`<div class="present-date2">${i}</div>`;
    }


    monthDays2.innerHTML = days;
     
   }

   for(let j = 1; j <= nextDays; j++){
    days += `<div class="next-date2">${j}</div>`;
    monthDays2.innerHTML = days;
   }
   //console.log(date);

   }



  // days = document.querySelectorAll('.present-date');
   //console.log(days)
  //  days.forEach((element) => {
  //    element.onclick = () => {
  //     alert('me');
  //    }
  //      });
  
   
  //  document.querySelector('.prev').addEventListener('click',()=>{
  //  date.setMonth(date.getMonth() -1)
  //  renderCalendar();
  //  })

  //  document.querySelector('.prev2').addEventListener('click',()=>{
  //  date.setMonth(date.getMonth() -1)
  //  renderCalendar2();
  //  })

  //  document.querySelector('.next').addEventListener('click',()=>{
  //   date.setMonth(date.getMonth()+ 1)
  //   renderCalendar();
  // })

  // document.querySelector('.next2').addEventListener('click',()=>{
  //   date.setMonth(date.getMonth()+ 1)
  //   renderCalendar2();
  // })

  // renderCalendar();
  // renderCalendar2();

  
  // checkinput.onclick = () =>{
  //   datecontainer.style.display = 'block';
  //   locationtwo.style.display = "none";
  //   locationone.style.display = "none";
  //   locationthree.style.display = "none";
  //   datecontainer2.style.display = "none";
  // }

  // checkinput2.onclick = () =>{
  //   datecontainer2.style.display = 'block';
  //   locationtwo.style.display = "none";
  //   locationone.style.display = "none";
  //   locationthree.style.display = "none";
  //   datecontainer.style.display = "none";
  // }

  </script>
</body>
</html>