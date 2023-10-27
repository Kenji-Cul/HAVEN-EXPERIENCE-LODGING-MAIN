<?php 
include "projectdetails.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Rooms</title>
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

.product-div .product-content{
    position: absolute;
    bottom: 75px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1em;
    flex-direction: row;
    width: 100%;
}



.product-content,.icon-content,.content-2{
  width: 100%;
  background-color: #CBB6A7;
  padding: 15px 0;
}

.product-content button{
    display: flex;
width: 100px;
height: 25px;
border: none;
color: #ffffff;
text-transform: uppercase;
font-size: 13px;
cursor: pointer;
font-style: normal;
font-weight: 600;
flex-direction: column;
justify-content: center;
align-items: center;
border-radius: 6px;
background: #519188;
box-shadow: 0px 1px 4px 2px rgba(50, 71, 92, 0.02), 0px 2px 6px 1px rgba(50, 71, 92, 0.04), 0px 1px 6px 2px rgba(50, 71, 92, 0.06);
}

.product-content .delete{
    background-color: red;
}

.product-div .action-btn{
    display: flex;
    gap: 0.5em;
    flex-direction: column;
    align-items: center;
    justify-content: center;
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
    height: 150vh;
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
        <li ><a href="about.html">About</a></li>                                                                                                     
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
     <!-- Booking Header -->
     <div class="booking-container-2">
        <p>All Rooms Page</p>
     </div>


     <div class="product-container">
      <?php 
       $room = new User;
       $allrooms = $room->selectAllRooms();

       if(!empty($allrooms)){
        foreach ($allrooms as $key => $value) {
      ?>
         <div class="product-div">
          <div>
            <img src="roomimage/<?php if(isset($value['room_image'])){
              echo $value['room_image'];
            }
            ?>" alt="">
            <div class="product-content">
             <div>
               <p class="pone"><?php echo $value['room_name'];?></p>
               <p class="ptwo"><?php echo $value['room_location'];?></p> 
             </div>
             <div class="action-btn">
             <a href="updateproduct.php?id=<?php echo $value['unique_id']?>&name=ijflsjanfgnka"><button>Update</button></a>
             <form action="" id="delete-form">
             <input type="hidden" name="unique" id="unique"  value="<?php if(isset($value['unique_id'])){
                            echo $value['unique_id'];
                        }?>" >
             <button class="delete" type="submit">Delete</button>
             </form>
            
             </div>
            
          </div>
           <div class="icon-content">
            <div class="icon-child">
              <i class="fa fa-bed" aria-hidden="true"></i>
              <p><span><?php echo $value['no_of_bedrooms'];?></span> Bedrooms</p>
            </div>
            <div class="icon-child">
              <i class="fa fa-bath" aria-hidden="true"></i>
              <p><span><?php echo $value['no_of_baths'];?></span> Baths</p>
            </div>
            <div class="icon-child">
              <i class="fa fa-user" aria-hidden="true"></i>
              <p><span><?php echo $value['no_of_guests'];?></span> Guests</p>
            </div>
           <!-- <i class="fa fa-users" aria-hidden="true"></i> -->
           </div>
           <div class="content-2">
            <p>£<span><?php $pricepernight = $value['price_per_night'];
            if($pricepernight > 999 || $pricepernight > 9999 || $pricepernight > 99999 || $pricepernight > 999999 || $pricepernight > 999999){
              echo number_format($pricepernight);
            } else {
              echo round($pricepernight);
            }
            ?></span>&nbsp;/&nbsp;night</p>
           </div>
           </div>
        </div>
        <?php }}?>

  
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
      <li><a href="about.html">About</a></li>
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


  let deletebtn =  document.querySelector('#delete-form .delete');
  let deleteform =  document.querySelector('#delete-form');

   
  deleteform.onsubmit = (e) => {
    e.preventDefault();
   
  }
  

  function deleteRoom(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST","inserters/deleteroomdata.php",true);
    xhr.onload = () => {
      if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200) {
          let data = xhr.response;
           if(data === "success"){
            //console.log("uploaded");
              window.location.reload();
             console.log(data);
           } else {
               console.log(data);
           }
        }
      }
    }
    let formData = new FormData(deleteform);
    xhr.send(formData);
  }

  deletebtn.addEventListener('click', () => {
    deleteRoom();
  })
 
 
  
  

  

  
  </script>
</body>
</html>