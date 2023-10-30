<?php 
include "projectdetails.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Room</title>
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

.booking-child-2 .error{
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

.booking-child-1 button{
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

.booking-child-1 button a{
  color: #fff;
  text-decoration: none;
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

.successmodal{
  position: absolute;
  top: 95em;
 width: 30em;
  bottom: -10em;
  background: #fff;
  height: 40em;
  border-radius: 10px;
  display: none;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 5em;
  box-shadow: 0px 1px 4px 2px rgba(50, 71, 92, 0.02), 0px 2px 6px 1px rgba(50, 71, 92, 0.04), 0px 1px 6px 2px rgba(50, 71, 92, 0.06);
}

.successmodal p{
font-size: 30px;
font-style: normal;
font-weight: 400;
line-height: 31.7px;
}

.successmodal .modalclosediv{
  width: 90%;
   display: flex; 
   align-items: right;
   justify-content: center;
   position: absolute;
   top: 1em;
   cursor: grab;
}

.successmodal .modalclose{
  position: absolute;
  right: 0;
  font-size: 80px;
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

.successmodal{
  position: absolute;
  top: 90em;
 width: 20em;
  bottom: -10em;
  background: #fff;
  height: 40em;
  border-radius: 10px;
  display: none;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 5em;
  box-shadow: 0px 1px 4px 2px rgba(50, 71, 92, 0.02), 0px 2px 6px 1px rgba(50, 71, 92, 0.04), 0px 1px 6px 2px rgba(50, 71, 92, 0.06);
}

.successmodal p{
font-size: 19px;
font-style: normal;
font-weight: 400;
line-height: 31.7px;
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
        <li><a href="accomodation.php">Accomodation</a></li>
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
        <p><?php if(isset($value['room_name'])){
                            echo $value['room_name'];
                        }?> Room</p>
     </div>

     <!-- Booking Details -->
     <div class="booking-container">
        <div class="booking-container-div">
        
            <div class="booking-child-2">
                <p>Update Room</p>
                <form action="" id="roomform">
                    <div class="form--div">
                        <input type="text" name="roomname" id="roomname" placeholder="Enter room name" value="<?php if(isset($value['room_name'])){
                            echo $value['room_name'];
                        }?>">
                    <label for="roomname">Room Name</label>
                    </div>

                    <div class="form--div">
                        <input type="text" name="roomlocation" id="roomlocation" placeholder="Enter room location" value="<?php if(isset($value['room_location'])){
                            echo $value['room_location'];
                        }?>">
                    <label for="roomlocation">Room Location</label>
                    </div>

                    <div class="form--div">
                        <input type="number" name="bedroomno" id="bedroomno" placeholder="Enter no of bedrooms" value="<?php if(isset($value['no_of_bedrooms'])){
                            echo $value['no_of_bedrooms'];
                        }?>">
                    <label for="bedroomno">No. of Bedrooms</label>
                    </div>

                    <div class="form--div">
                      <input type="text" name="checkin" id="checkin" placeholder="" value="<?php if(isset($value['check_in_date'])){
                            echo $value['check_in_date'];
                        }?>">
                  <label for="checkin">Check In</label>
                  <div class="datecontainer">
                    <div class="calendar">
                      <div class="month">
                        <i class="fas fa-angle-left prev"></i>
                        <div class="date">
                          <h1></h1>
                          <p></p>
                        </div>
                        <i class="fas fa-angle-right next">
                        </i>
                      </div>
                      <div class="weekdays">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                      </div>
                      <div class="days">
                        <div class="prev-date">26</div>
                        <div class="prev-date">27</div>
                        <div class="prev-date">28</div>
                        <div class="prev-date">29</div>
                        <div class="prev-date">30</div>
                        <div class="present-date">1</div>
                        <div class="present-date">2</div>
                        <div class="present-date">3</div>
                        <div class="present-date">4</div>
                        <div class="present-date">5</div>
                        <div class="present-date">6</div>
                        <div class="present-date">7</div>
                        <div class="present-date">8</div>
                        <div class="present-date">9</div>
                        <div class="present-date">10</div>
                        <div class="present-date">11</div>
                        <div class="present-date">12</div>
                        <div class="present-date">13</div>
                        <div class="present-date">14</div>
                        <div class="present-date">15</div>
                        <div class="present-date">16</div>
                        <div class="present-date">17</div>
                        <div class="present-date">18</div>
                        <div class="present-date">19</div>
                        <div class="present-date">20</div>
                        <div class="present-date">21</div>
                        <div class="present-date">22</div>
                        <div class="present-date">23</div>
                        <div class="present-date">24</div>
                        <div class="present-date">25</div>
                        <div class="present-date">26</div>
                        <div class="present-date">27</div>
                        <div class="present-date">28</div>
                        <div class="present-date">29</div>
                        <div class="present-date">30</div>
                        <div class="present-date">31</div>
                        <div class="next-date">1</div>
                        <div class="next-date">2</div>
                        <div class="next-date">3</div>
                        <div class="next-date">4</div>
                        <div class="next-date">5</div>
                        <div class="next-date">6</div>
                      </div>
                    </div>
                  </div>
                  </div>

                  <div class="form--div">
                    <input type="text" name="checkout" id="checkout" placeholder="" value="<?php if(isset($value['check_out_date'])){
                            echo $value['check_out_date'];
                        }?>">
                <label for="checkout">Check Out</label>
                <div class="datecontainer2">
                  <div class="calendar2">
                    <div class="month2">
                      <i class="fas fa-angle-left prev2"></i>
                      <div class="date2">
                        <h1></h1>
                        <p></p>
                      </div>
                      <i class="fas fa-angle-right next2">
                      </i>
                    </div>
                    <div class="weekdays2">
                      <div>Sun</div>
                      <div>Mon</div>
                      <div>Tue</div>
                      <div>Wed</div>
                      <div>Thu</div>
                      <div>Fri</div>
                      <div>Sat</div>
                    </div>
                    <div class="days2">
                      <div class="prev-date2">26</div>
                      <div class="prev-date2">27</div>
                      <div class="prev-date2">28</div>
                      <div class="prev-date2">29</div>
                      <div class="prev-date2">30</div>
                      <div class="present-date2">1</div>
                      <div class="present-date2">2</div>
                      <div class="present-date2">3</div>
                      <div class="present-date2">4</div>
                      <div class="present-date2">5</div>
                      <div class="present-date2">6</div>
                      <div class="present-date2">7</div>
                      <div class="present-date2">8</div>
                      <div class="present-date2">9</div>
                      <div class="present-date2">10</div>
                      <div class="present-date2">11</div>
                      <div class="present-date2">12</div>
                      <div class="present-date2">13</div>
                      <div class="present-date2">14</div>
                      <div class="present-date2">15</div>
                      <div class="present-date2">16</div>
                      <div class="present-date2">17</div>
                      <div class="present-date2">18</div>
                      <div class="present-date2">19</div>
                      <div class="present-date2">20</div>
                      <div class="present-date2">21</div>
                      <div class="present-date2">22</div>
                      <div class="present-date2">23</div>
                      <div class="present-date2">24</div>
                      <div class="present-date2">25</div>
                      <div class="present-date2">26</div>
                      <div class="present-date2">27</div>
                      <div class="present-date2">28</div>
                      <div class="present-date2">29</div>
                      <div class="present-date2">30</div>
                      <div class="present-date2">31</div>
                      <div class="next-date2">1</div>
                      <div class="next-date2">2</div>
                      <div class="next-date2">3</div>
                      <div class="next-date2">4</div>
                      <div class="next-date2">5</div>
                      <div class="next-date2">6</div>
                    </div>
                  </div>
                </div>

                </div>

                    <div class="form--div">
                        <input type="number" name="bathroomno" id="bathroomno" placeholder="Enter no of bathrooms" value="<?php if(isset($value['no_of_baths'])){
                            echo $value['no_of_baths'];
                        }?>">
                    <label for="">No. of Baths</label>
                    </div>

                    <div class="form--div">
                      <input type="text" name="description" id="description" placeholder="Enter room description" value="<?php if(isset($value['description'])){
                            echo $value['description'];
                        }?>">
                  <label for="description">Description</label>
                  </div>

                          <div class="form--div">
                            <input type="text" name="featureone" id="featureone" placeholder="Enter feature one" value="<?php if(isset($value['feature_one'])){
                            echo $value['feature_one'];
                        }?>">
                        <label for="featureone">Feature One</label>
                        </div>

                        <div class="form--div">
                          <input type="text" name="featuretwo" id="featuretwo" placeholder="Enter feature two" value="<?php if(isset($value['feature_two'])){
                            echo $value['feature_two'];
                        }?>">
                      <label for="featuretwo">Feature Two</label>
                      </div>

                      <div class="form--div">
                        <input type="text" name="featurethree" id="featurethree" placeholder="Enter feature three" value="<?php if(isset($value['feature_three'])){
                            echo $value['feature_three'];
                        }?>">
                    <label for="featurethree">Feature Three</label>
                    </div>

                    <div class="form--div">
                      <input type="text" name="featurefour" id="featurefour" placeholder="Enter feature four" value="<?php if(isset($value['feature_four'])){
                            echo $value['feature_four'];
                        }?>">
                  <label for="featurefour">Feature Four</label>
                  </div>

                  <div class="form--div">
                    <input type="text" name="featurefive" id="featurefive" placeholder="Enter feature five" value="<?php if(isset($value['feature_five'])){
                            echo $value['feature_five'];
                        }?>">
                <label for="featurefive">Feature Five</label>
                </div>

                <div class="form--div">
                  <input type="text" name="featuresix" id="featuresix" placeholder="Enter feature six" value="<?php if(isset($value['feature_six'])){
                            echo $value['feature_six'];
                        }?>">
              <label for="featuresix">Feature Six</label>
              </div>

                    <div class="form--div">
                        <input type="number" name="guestno" id="guestno" placeholder="Enter guest no" value="<?php if(isset($value['no_of_guests'])){
                            echo $value['no_of_guests'];
                        }?>">
                    <label for="guestno">No. of Guests</label>
                    </div>

                    <div class="form--div">
                        <input type="number" name="pricepernight" id="pricepernight" placeholder="Enter price per night" value="<?php if(isset($value['price_per_night'])){
                            echo $value['price_per_night'];
                        }?>">
                    <label for="pricepernight">Price Per Night</label>
                    </div>

                    <div class="form--div">
                        <input type="file" name="roomimage" id="roomimage" placeholder="Choose room image" accept="image/*">
                    <label for="roomimage">Main Room Image</label>
                    </div>

                    <div class="form--div">
                        <input type="file" name="roomimage1" id="roomimage1" placeholder="Enter your city" accept="image/*">
                    <label for="roomimage1">Room Image 1</label>
                    </div>

                    <div class="form--div">
                        <input type="file" name="roomimage2" id="roomimage2" placeholder="Enter your postcode" accept="image/*">
                    <label for="roomimage2">Room Image 2</label>
                    </div>

                    <div class="form--div">
                        <input type="file" name="roomimage3" id="roomimage3" placeholder="Enter your postcode" accept="image/*">
                    <label for="roomimage3">Room Image 3</label>
                    </div>

                    <div class="form--div">
                        <input type="file" name="roomimage4" id="roomimage4" placeholder="Enter your postcode" accept="image/*">
                    <label for="">Room Image 4</label>
                    </div>

                    <div class="form--div">
                        <input type="file" name="roomimage5" id="roomimage5" placeholder="Enter your postcode" accept="image/*">
                    <label for="roomimage5">Room Image 5</label>
                    </div>

                    <div class="form--div">
                        <input type="file" name="roomimage6" id="roomimage6" placeholder="Enter your postcode" accept="image/*">
                    <label for="roomimage6">Room Image 6</label>
                    </div>

                    <input type="hidden" name="unique" id="unique"  value="<?php if(isset($value['unique_id'])){
                            echo $value['unique_id'];
                        }?>" >

                    <div class="button-flex">
                        <!-- <button class="first-button">back</button> -->
                        <div style="display: none;">
                            <img src="images/loading.svg" alt="" class="loading-img">
                        </div>
                    <button type="submit" id="submit">update room</button>
                    </div>

                    <div class="error">
                      Please input all fields
                    </div>
                </form>
            </div>
    </div>
<?php }}?>
  </div>

  


  <!-- Success Modal -->
  <div class="successmodal">
    <div class="modalclosediv">
      <img src="images/close.png" alt="" class="modalclose">
    </div>
    <div>
      <img src="images/haven_logo3.png" alt="">
    </div>
    <p>Room Updated Successfully
    </p>
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
      <li><a href="about.html">About</a></li>
      <li><a href="partner.html">Become a Partner</a></li>
      <li><a href="affiliates.html">Affiliates</a></li>
      <li><a href="accomodation.php">Accomodation</a></li>
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

 
  
 
  let submit =  document.querySelector('.formdiv2 #submit');
  let roomform =  document.querySelector('#roomform');
  let roomname =  roomform.querySelector('#roomname');
  let roomlocation =  roomform.querySelector('#roomlocation');
  let bedroomno =  roomform.querySelector('#bedroomno');
  let bathroomno =  roomform.querySelector('#bathroomno');
  let guestno =  roomform.querySelector('#guestno');
  let pricepernight =  roomform.querySelector('#pricepernight');
  let roomimage =  roomform.querySelector('#roomimage');
  let roomimage1 =  roomform.querySelector('#roomimage1');
  let roomimage2 =  roomform.querySelector('#roomimage2');
  let roomimage3 =  roomform.querySelector('#roomimage3');
  let roomimage4 =  roomform.querySelector('#roomimage4');
  let roomimage5 =  roomform.querySelector('#roomimage5');
  let roomimage6 =  roomform.querySelector('#roomimage6');
  let allinputs = roomform.querySelectorAll('.form--div input');
  let roomsubmit = roomform.querySelector('#submit');
  let error = roomform.querySelector('.booking-child-2 .error');
  let checkinput =  document.querySelector('.form--div #checkin');
  let checkinput2 =  document.querySelector('.form--div #checkout');
  let datecontainer = document.querySelector('.datecontainer');
  let datecontainer2 = document.querySelector('.datecontainer2');
  
  roomform.onsubmit = (e) => {
    e.preventDefault();
    // roomsubmit.innerHTML = "";
    // roomsubmit.appendChild(document.querySelector('.loading-img'))
    // checkNullInputs();

    // roomsubmit.innerHTML = "create room";
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


  
   //The Date Programming
   const date = new Date();
  

   const getDateValue = () => {
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
    //checkinput.value = new Date().getDate() + " " + months[date.getMonth()] + " "+ date.getFullYear();
    let todays = document.querySelectorAll('.present-date');

let monthValue = document.querySelector('.date h1');
 todays.forEach((element) => {
  element.onclick = () => {
    let datevalue = element.innerHTML;
    let monthval = monthValue.innerHTML;
    let yearvalue = date.getFullYear();
    let dateval = datevalue + " " +monthval +  " " + yearvalue  
    checkinput.value = dateval;
    datecontainer.style.display = "none";
    // console.log(dateval);
   }
  
 })
   }

   const getDateValue2 = () => {
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
    //checkinput2.value = new Date().getDate() + " " + months[date.getMonth()] + " "+ date.getFullYear();
    let todays = document.querySelectorAll('.present-date2');

let monthValue = document.querySelector('.date2 h1');
 todays.forEach((element) => {
  element.onclick = () => {
    let datevalue = element.innerHTML;
    let monthval = monthValue.innerHTML;
    let yearvalue = date.getFullYear();
    let dateval = datevalue + " " +monthval +  " " + yearvalue  
    checkinput2.value = dateval;
    datecontainer2.style.display = "none";
    // console.log(dateval);
   }
  
 })
   }

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
  
   
   document.querySelector('.prev').addEventListener('click',()=>{
   date.setMonth(date.getMonth() -1)
   renderCalendar();
     getDateValue();
   })

   document.querySelector('.prev2').addEventListener('click',()=>{
   date.setMonth(date.getMonth() -1)
   renderCalendar2();
   getDateValue2();
   })

   document.querySelector('.next').addEventListener('click',()=>{
    date.setMonth(date.getMonth()+ 1)
    renderCalendar();
    getDateValue();
    
  })

  document.querySelector('.next2').addEventListener('click',()=>{
    date.setMonth(date.getMonth()+ 1)
    renderCalendar2();
     getDateValue2();
  })

  renderCalendar();
  renderCalendar2();
  getDateValue();
  getDateValue2();

  
  checkinput.onclick = () =>{
    datecontainer.style.display = 'block';
    datecontainer2.style.display = "none";
  }

  checkinput2.onclick = () =>{
    datecontainer2.style.display = 'block';
    datecontainer.style.display = "none";
  }

 

  

  function insertGroup(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST","inserters/updateroomdata.php",true);
    xhr.onload = () => {
      if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200) {
          let data = xhr.response;
           if(data === "success"){
            //console.log("uploaded");
            document.querySelector('.successmodal').style.display = "flex";
            document.querySelector('.successmodal .modalclose').onclick = () => {
              document.querySelector('.successmodal').style.display = "none";
              window.location.reload();
            }
            error.style.display = "none";
             console.log(data);
           } else {
               console.log(data);
               error.style.display = "flex";
               error.textContent = data;
           }
        }
      }
    }
    let formData = new FormData(roomform);
    xhr.send(formData);
  }

  roomsubmit.addEventListener('click', () => {
    insertGroup();
  })



  
  </script>
</body>
</html>