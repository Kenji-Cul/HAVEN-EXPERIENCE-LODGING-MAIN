<?php 
include "projectdetails.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

      a{
        text-decoration: none;
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
    height: 350vh;
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
        <li><a href="index.php">Home</a></li>
        <li class="home-link"><a href="about.php">About</a></li>                                                                                                     
        <li><a href="partner.html">Partner with us</a></li>
        <li><a href="affiliates.html">Affiliates</a></li>
        <li><a href="landlord.html">Landlord Services</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  </div>

  <!-- About Us Container -->
  <div class="aboutus">
    <div class="left-image-div">
      <div class="img-con">
      <img src="images/avatar1.png" alt="" class="pos1">
    </div>
    <div class="img-con2">
      <img src="images/avatar2.png" alt="">
    </div>
      <img src="images/avatar3.png" alt="" class="pos2">
      <img src="images/svg1.svg" alt="">
      <img src="images/svg2.svg" alt="">
    </div>
      <p class="aboutp">about us</p>
      <div class="left-image-div">
        <div class="img-con2">
          <img src="images/avatar1.png" alt="" class="pos3">
        </div>
        <img src="images/avatar2.png" alt="">
        <img src="images/avatar3.png" alt="" class="pos4">
        <img src="images/svg3.svg" alt="">
      </div>
  </div>

  <!-- Second container -->
  <div class="second-aboutus">
    <div class="seconddiv">
      <img src="images/success_file.png" alt="">
    </div>
     <div class="firstdiv">
      <p class="p1">our mission</p>
      <img src="images/haven_logo3.png" alt="">
      <p class="p2">To work with the local community to provide jobs and re-investment. Wherever we have serviced accommodation properties we actively 
        “buy local” to support the micro economy. We give regular charitable donations, offer our properties to 
        key workers and have previously partnered with a cleaning company who donate to victims of domestic violence.</p>
     </div>
  </div>

  <!-- Third Container -->
  <div class="third-aboutus">
    <p>As a serviced accommodation provider for flexible self catered stays we have the opportunity to 
      take on properties for landlords wanting the additional income and flexibility this can offer. To find out whether
       we can help manage your property or buy an unwanted property from you send us a message or give us a call.
      We are actively looking for three and four bedroomed properties to rent and buy.</p>
  </div>

 <!-- Main -->
 <div class="main">
  <div class="large-text2-container">
    <p class="large-text-2">
      Discover accomodation that 
    </p>
    <p class="large-text-2">
      meets your needs.
    </p>
    <p class="small-text">We operate a versatile group of properties, so we know what you are looking for.We have carefully</p>
    <p class="small-text">selected partners throughout the UK ready for your stay.</p>
  </div>

  <div class="product-container">
  <?php 
       $room = new User;
       $allrooms = $room->selectRooms();

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
            <a href="accomodationinfo.php?id=<?php echo $value['unique_id']?>&name=ijflsjanfgnka"><button>View</button></a>
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

  </script>
</body>
</html>