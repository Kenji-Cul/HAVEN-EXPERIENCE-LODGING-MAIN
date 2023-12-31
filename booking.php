<?php 
if(!isset($_GET['guestno']) || !isset($_GET['checkin']) || !isset($_GET['checkout']) || !isset($_GET['nights']) || !isset($_GET['unique'])){
  header("Location: index.php");
}
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

.form__div p{
  color: var(--light-text-primary, rgba(50, 71, 92, 0.87));
font-feature-settings: 'clig' off, 'liga' off;
font-family: Nunito Sans;
font-size: 16px;
font-style: normal;
font-weight: 600;
letter-spacing: 0.15px;
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
        <li><a href="accomodation.php">Accomodation</a></li>
        <li><a href="landlord.html">Landlord Services</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  </div>


  <div class="input-container">
    <div class="input-div">
    <form class="form" action="">
      <div class="form__div">
        <input type="text" name="" id="locationinput" class="form__input" placeholder="1" value="<?php echo $_GET['nights'];?>" >
        <label for="" class="form__label">Nights</label>
       
        <div class="select-container">
          <div name="" id="locations" class="active">
            <div class="option">
              <input type="radio" class="radio" id="Billingham" name="number2" value="1">
              <label for="Billingham">1</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="Darlington" name="number2" value="2">
              <label for="Darlington">2</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="Guisborough" name="number2" value="3">
              <label for="Guisborough">3</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="Hartlepool" name="number2" value="4">
              <label for="Hartlepool">4</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="Middlesborough" name="number2" value="5">
              <label for="Middlesborough">5</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="Peterborough" name="number2" value="6">
              <label for="Peterborough">6</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="Redcar" name="number2" value="7">
              <label for="Redcar">7</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="Stockton" name="number2" value="8">
              <label for="Stockton">8</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="West Kingsdown" name="number2" value="9">
              <label for="West Kingsdown">9</label>
            </div>
            <div class="option">
                <input type="radio" class="radio" id="West Kingsdown" name="number2" value="10">
                <label for="West Kingsdown">10</label>
              </div>
           
  
          </div>
      </div>
      </div>

      

      <div class="form__div">
        <input type="text" name="" id="checkinput" class="form__input" placeholder=" " value="<?php echo $_GET['checkin'];?>">
        <label for="" class="form__label">Check In</label>
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

      <div class="form__div">
        <input type="text" name="" id="checkinput2" class="form__input" placeholder=" " value="<?php echo $_GET['checkout'];?>">
        <label for="" class="form__label">Check Out</label>
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

      

      <div class="form__div">
        <input type="number" name="" class="form__input" placeholder="1" id="numinput" value="<?php echo $_GET['guestno'];?>">
        <label for="" class="form__label">Guests</label>

        <div class="select-container">
          <div name="" id="locations2" class="active">
            <div class="option">
              <input type="radio" class="radio" id="one" name="number" value="1">
              <label for="one">1</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="two" name="number" value="2">
              <label for="two">2</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="three" name="number" value="3">
              <label for="three">3</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="four" name="number" value="4">
              <label for="four">4</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="five" name="number" value="5">
              <label for="five">5</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="six" name="number" value="6">
              <label for="six">6</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="seven" name="number" value="7">
              <label for="seven">7</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="eight" name="number" value="8">
              <label for="eight">8</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="nine" name="number" value="9">
              <label for="nine">9</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="ten" name="number" value="10">
              <label for="ten">10</label>
            </div>
  
          </div>
      </div>
      </div>

    </form>
  </div>
  </div>


  

  <div class="input-container">
    <div class="input-div div-input" style="margin-top: 3em;">
    <form class="form" action="" id="secondform">
        <div class="form__div" style="width: 250px;">
        <?php 
       $room = new User;
       $allrooms = $room->selectRoomDetails($_GET['unique']);

       if(!empty($allrooms)){
        foreach ($allrooms as $key => $value) {
      ?>
            <p><?php echo $value['room_name'];?></p>
            <p style="padding-bottom: 5px;">Price Per Night: <span>from £<?php $pricepernight = $value['price_per_night'];
            if($pricepernight > 999 || $pricepernight > 9999 || $pricepernight > 99999 || $pricepernight > 999999 || $pricepernight > 999999){
              echo number_format($pricepernight);
            } else {
              echo round($pricepernight);
            }
            ?></span></p>
             <p>Overall Price: <span>£<?php $overallprice = $value['price_per_night'] * $_GET['nights'];
            if($overallprice > 999 || $overallprice > 9999 || $overallprice > 99999 || $overallprice > 999999 || $overallprice > 999999){
              echo number_format($overallprice);
            } else {
              echo round($overallprice);
            }
            ?></span></p>
            <div>
                <img src="roomimage/<?php if(isset($value['room_image'])){
          echo $value['room_image'];
        }?>" alt="" style="margin-top: 20px;">
            </div>
        <?php }}?>
        </div>
      

    <div class="form__div formdiv2">
        <button type="submit" id="submit">book now</button>
      </div>
    </form>
  </div>
  </div>

 

       


 <!-- Main -->
 <div class="main">
  

 
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

 
  let downinput = document.querySelector('#locationinput');
  //let downinput2 = document.querySelector('#locationinput2');
  let numinput = document.querySelector('#numinput');
  //let numinput2 = document.querySelector('#numinput2');
  let locationone = document.querySelector('#locations');
  let locationtwo = document.querySelector('#locations2');
  let locationthree = document.querySelector('#locations3');
  let locationfour = document.querySelector('#locations4');
  let checkinput =  document.querySelector('.form__div #checkinput');
  let checkinput2 =  document.querySelector('.form__div #checkinput2');
  let submit =  document.querySelector('.formdiv2 #submit');
  let form =  document.querySelector('#secondform');
  let datecontainer = document.querySelector('.datecontainer');
  let datecontainer2 = document.querySelector('.datecontainer2');
  
  form.onsubmit = (e) => {
    e.preventDefault();

  }
  
  

  checkinput.readOnly = true;
  checkinput2.readOnly = true;
  numinput.readOnly = true;
  downinput.readOnly = true;
  
  

//   window.addEventListener('click', function(e){   
//   if (downinput.contains(e.target)  || downinput2.contains(e.target) || numinput.contains(e.target) ||  numinput2.contains(e.target) || checkinput.contains(e.target) || checkinput2.contains(e.target)){
//     // Clicked in box
//   } else{
//     locationone.style.display = "none";
//     locationtwo.style.display = "none";
//     locationthree.style.display = "none";
//     locationfour.style.display = "none";
//   }
// });
    
  // downinput.onclick = () => {
  //   locationone.style.display = "block";
  //   locationtwo.style.display = "none";
  //   locationthree.style.display = "none";
  //   locationfour.style.display = "none";
  //   datecontainer.style.display = "none";
  //   datecontainer2.style.display = "none";
  // }

  // downinput2.onclick = () => {
  //   locationthree.style.display = "block";
  //   locationtwo.style.display = "none";
  //   locationone.style.display = "none";
  //   locationfour.style.display = "none";
  //   datecontainer.style.display = "none";
  //   datecontainer2.style.display = "none";
  // }


 


  // numinput.onclick = () => {
  //   locationtwo.style.display = "block";
  //   locationone.style.display = "none";
  //   locationthree.style.display = "none";
  //   locationfour.style.display = "none";
  //   datecontainer.style.display = "none";
  //   datecontainer2.style.display = "none";
  // }

  // numinput2.onclick = () => {
  //   locationfour.style.display = "block";
  //   locationone.style.display = "none";
  //   locationtwo.style.display = "none";
  //   locationthree.style.display = "none";
  //   datecontainer.style.display = "none";
  //   datecontainer2.style.display = "none";
  // }

  submit.addEventListener('click',function(){
    location.href = "lastbooking.php?id=<?php echo $_GET['unique'];?>&p=<?php echo $overallprice; ?>&gno=<?php echo $_GET['guestno']?>&prifh=aytfaiugfag";
  });
  

  

 

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

// let monthValue = document.querySelector('.date h1');
//  todays.forEach((element) => {
//   element.onclick = () => {
//     let datevalue = element.innerHTML;
//     let monthval = monthValue.innerHTML;
//     let yearvalue = date.getFullYear();
//     let dateval = datevalue + " " +monthval +  " " + yearvalue  
//     checkinput.value = dateval;
//     datecontainer.style.display = "none";
//     // console.log(dateval);
//    }
  
//  })
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

// let monthValue = document.querySelector('.date2 h1');
//  todays.forEach((element) => {
//   element.onclick = () => {
//     let datevalue = element.innerHTML;
//     let monthval = monthValue.innerHTML;
//     let yearvalue = date.getFullYear();
//     let dateval = datevalue + " " +monthval +  " " + yearvalue  
//     checkinput2.value = dateval;
//     datecontainer2.style.display = "none";
//     // console.log(dateval);
//    }
  
//  })
   }

  //  const renderCalendar = () => {
  //   date.setDate(1);
  //  const monthDays = document.querySelector('.days');
  //  const lastDay = new Date(date.getFullYear(),date.getMonth() + 1,0).getDate();
  //  const prevLastDay = new Date(date.getFullYear(),date.getMonth() + 1,0).getDate();
  //  const firstDayIndex = date.getDay();
  //  const lastDayIndex = new Date(date.getFullYear(),date.getMonth() + 1,0).getDay();

  //  const nextDays = 7 - lastDayIndex - 1;
  //  const months = [
  //   "January",
  //   "February",
  //   "March",
  //   "April",
  //   "May",
  //   "June",
  //   "July",
  //   "August",
  //   "September",
  //   "October",
  //   "November",
  //   "December"
  //  ];

  //  document.querySelector('.date h1').innerHTML = months[date.getMonth()];
  //  document.querySelector('.date p').innerHTML = new Date().toDateString();
  //  let days = "";

  //  for(let x = firstDayIndex; x >0; x--){
  //   days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
  //  }
   
  //  for(let i =1; i<=lastDay; i++){
  //   if(i === new Date().getDate() && date.getMonth() === new Date().getMonth()){
  //     days+=`<div class="today present-date">${i}</div>`; 
  //   }else {
  //     days+=`<div class="present-date">${i}</div>`;
  //   }


  //   monthDays.innerHTML = days;
     
  //  }

  //  for(let j = 1; j <= nextDays; j++){
  //   days += `<div class="next-date">${j}</div>`;
  //   monthDays.innerHTML = days;
  //  }
  //  //console.log(date);

  //  }


  //  const renderCalendar2 = () => {
  //   date.setDate(1);
  //  const monthDays2 = document.querySelector('.days2');
  //  const lastDay = new Date(date.getFullYear(),date.getMonth() + 1,0).getDate();
  //  const prevLastDay = new Date(date.getFullYear(),date.getMonth() + 1,0).getDate();
  //  const firstDayIndex = date.getDay();
  //  const lastDayIndex = new Date(date.getFullYear(),date.getMonth() + 1,0).getDay();

  //  const nextDays = 7 - lastDayIndex - 1;
  //  const months = [
  //   "January",
  //   "February",
  //   "March",
  //   "April",
  //   "May",
  //   "June",
  //   "July",
  //   "August",
  //   "September",
  //   "October",
  //   "November",
  //   "December"
  //  ];

  //  document.querySelector('.date2 h1').innerHTML = months[date.getMonth()];
  //  document.querySelector('.date2 p').innerHTML = new Date().toDateString();
  //  let days = "";

  //  for(let x = firstDayIndex; x >0; x--){
  //   days += `<div class="prev-date2">${prevLastDay - x + 1}</div>`;
  //  }
   
  //  for(let i =1; i<=lastDay; i++){
  //   if(i === new Date().getDate() && date.getMonth() === new Date().getMonth()){
  //     days+=`<div class="today2 present-date2">${i}</div>`; 
  //   }else {
  //     days+=`<div class="present-date2">${i}</div>`;
  //   }


  //   monthDays2.innerHTML = days;
     
  //  }

  //  for(let j = 1; j <= nextDays; j++){
  //   days += `<div class="next-date2">${j}</div>`;
  //   monthDays2.innerHTML = days;
  //  }
  //  //console.log(date);

  //  }



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
  //  getDateValue();
  //  })

  //  document.querySelector('.prev2').addEventListener('click',()=>{
  //  date.setMonth(date.getMonth() -1)
  //  renderCalendar2();
  //  getDateValue2();
  //  })

  //  document.querySelector('.next').addEventListener('click',()=>{
  //   date.setMonth(date.getMonth()+ 1)
  //   renderCalendar();
  //   getDateValue();
  // })

  // document.querySelector('.next2').addEventListener('click',()=>{
  //   date.setMonth(date.getMonth()+ 1)
  //   renderCalendar2();
  //   getDateValue2();
  // })

  // renderCalendar();
  // renderCalendar2();
  getDateValue();
  getDateValue2();

  
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