<?php 
include "projectdetails.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    
a{
  text-decoration: none;
}
.input-div{
  top: 5em;
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
    height: 160vh;
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

/* Serach Empty Div */
.booking-1{
    display:flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 20px;
    padding: 19px 15px;
    border-radius: 8px;
    box-shadow: 0px 1px 4px 2px rgba(50, 71, 92, 0.02), 0px 2px 6px 1px rgba(50, 71, 92, 0.04), 0px 1px 6px 2px rgba(50, 71, 92, 0.06);
}

.booking-1 p{
 
color: var(--light-text-primary, rgba(50, 71, 92, 0.87));
font-feature-settings: 'clig' off, 'liga' off;
font-size: 16px;
font-style: normal;
font-weight: 600;
line-height: 32px; /* 160% */
letter-spacing: 0.15px;
text-align: left;
width: 100%;

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
        <li><a href="accomodation.php">Accomodation</a></li>
        <li><a href="landlord.html">Landlord Services</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  </div>


  <div class="input-container">
    <div class="input-div">
    <form class="form" action="" id="form1">
      <div class="form__div">
        <input type="text" name="" id="locationinput" class="form__input" placeholder="Where?" value="" >
        <label for="" class="form__label">Location</label>
       
        <div class="select-container">
          <div name="" id="locations" class="active">
            <div class="option">
              <input type="radio" class="radio" id="Billingham" name="category" value="Billingham">
              <label for="Billingham">Billingham</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="Darlington" name="category" value="Darlington">
              <label for="Darlington">Darlington</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="Guisborough" name="category" value="Guisborough">
              <label for="Guisborough">Guisborough</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="Hartlepool" name="category" value="Hartlepool">
              <label for="Hartlepool">Hartlepool</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="Middlesborough" name="category" value="Middlesborough">
              <label for="Middlesborough">Middlesborough</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="Peterborough" name="category" value="Peterborough">
              <label for="Peterborough">Peterborough</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="Redcar" name="category" value="Redcar">
              <label for="Redcar">Redcar</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="Stockton" name="category" value="Stockton">
              <label for="Stockton">Stockton</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="West Kingsdown" name="category" value="West Kingsdown">
              <label for="West Kingsdown">West Kingsdown</label>
            </div>
           
  
          </div>
      </div>
      </div>

      

      <div class="form__div">
        <input type="text" name="" id="checkinput" class="form__input" placeholder=" " value="">
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
        <input type="text" name="" id="checkinput2" class="form__input" placeholder=" ">
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
        <input type="number" name="" class="form__input" placeholder="1" id="numinput" value="">
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

      <div class="form__div">
        <button type="submit" id="submit" >search</button>
      </div>
    </form>
  </div>
  </div>


  <div class="input-container">
    <div class="input-div" style="margin-top: 3em;">
    <form class="form" action="" id="form2">
      <div class="form__div">
        <input type="text" name="" id="locationinput2" class="form__input" placeholder="1" value="">
        <label for="" class="form__label">NO. OF BEDROOMS</label>
       
        <div class="select-container">
          <div name="" id="locations3" class="active">
            <div class="option">
              <input type="radio" class="radio" id="one2" name="category2" value="1">
              <label for="one2">1</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="two2" name="category2" value="2">
              <label for="two2">2</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="three2" name="category2" value="3">
              <label for="three2">3</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="four2" name="category2" value="4">
              <label for="four2">4</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="five2" name="category2" value="5">
              <label for="five2">5</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="six2" name="category2" value="6">
              <label for="six2">6</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="seven2" name="category2" value="7">
              <label for="seven2">7</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="eight2" name="category2" value="8">
              <label for="eight2">8</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="nine2" name="category2" value="9">
              <label for="nine2">9</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="ten2" name="category2" value="10">
              <label for="ten2">10</label>
            </div>
  
          </div>
      </div>
      </div>


      <div class="form__div">
        <input type="number" name="" class="form__input" placeholder="1" id="numinput2" value="">
        <label for="" class="form__label">NO. OF BATHROOMS</label>

        <div class="select-container">
          <div name="" id="locations4" class="active">
            <div class="option">
              <input type="radio" class="radio" id="one3" name="number2" value="1">
              <label for="one3">1</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="two3" name="number2" value="2">
              <label for="two3">2</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="three3" name="number2" value="3">
              <label for="three3">3</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="four3" name="number2" value="4">
              <label for="four3">4</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="five3" name="number2" value="5">
              <label for="five3">5</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="six3" name="number2" value="6">
              <label for="six3">6</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="seven3" name="number2" value="7">
              <label for="seven3">7</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="eight3" name="number2" value="8">
              <label for="eight3">8</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="nine3" name="number2" value="9">
              <label for="nine3">9</label>
            </div>
            <div class="option">
              <input type="radio" class="radio" id="ten3" name="number2" value="10">
              <label for="ten3">10</label>
            </div>
  
          </div>
      </div>
    </div>


    <div class="form__div">
      <input type="number" name="" class="form__input" placeholder="1" id="numinput3" value="">
      <label for="" class="form__label">NO. OF GUESTS</label>

      <div class="select-container">
        <div name="" id="locations5" class="active">
          <div class="option">
            <input type="radio" class="radio" id="one4" name="number3" value="1">
            <label for="one4">1</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="two4" name="number3" value="2">
            <label for="two4">2</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="three4" name="number3" value="3">
            <label for="three4">3</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="four4" name="number3" value="4">
            <label for="four4">4</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="five4" name="number3" value="5">
            <label for="five4">5</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="six4" name="number3" value="6">
            <label for="six4">6</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="seven4" name="number3" value="7">
            <label for="seven4">7</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="eight4" name="number3" value="8">
            <label for="eight4">8</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="nine4" name="number3" value="9">
            <label for="nine4">9</label>
          </div>
          <div class="option">
            <input type="radio" class="radio" id="ten4" name="number3" value="10">
            <label for="ten4">10</label>
          </div>

        </div>
    </div>
  </div>

  
  <div class="form__div">
        <button type="submit" id="submit" >search</button>
      </div>
    </form>
  </div>
  </div>

       


       


 <!-- Main -->
 <div class="main">
 <?php 
   $room = new User;
   $allrooms = $room->selectRooms();
   if(isset($_GET['location']) && isset($_GET['checkin']) && isset($_GET['checkout']) && isset($_GET['guests'])){
    $searchroom = $room->searchRooms($_GET['location'],$_GET['checkin'],$_GET['checkout'],$_GET['guests']);
   }

   if(isset($_GET['bedroom']) && isset($_GET['bathroom']) && isset($_GET['guests'])){
    $searchroom = $room->searchRooms2($_GET['bedroom'],$_GET['bathroom'],$_GET['guests']);
   }
  
  if(empty($searchroom)){?>
          <div class="booking-1">
                <p>Sorry, there is no data for this particular search but you can check out the ones we have</p>
              </div>
        <?php }?>

  <div class="product-container">
    
 
  <?php 
      

       if(!empty($searchroom)){ 
        foreach ($searchroom as $key => $value) {
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
        
          <?php 
           if(empty($searchroom)){
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
          <?php }}}?>

         
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
  let downinput2 = document.querySelector('#locationinput2');
  let numinput = document.querySelector('#numinput');
  let numinput2 = document.querySelector('#numinput2');
  let numinput3 = document.querySelector('#numinput3');
  let locationone = document.querySelector('#locations');
  let locationtwo = document.querySelector('#locations2');
  let locationthree = document.querySelector('#locations3');
  let locationfour = document.querySelector('#locations4');
  let locationfive = document.querySelector('#locations5');
  let checkinput =  document.querySelector('.form__div #checkinput');
  let checkinput2 =  document.querySelector('.form__div #checkinput2');
  let submit =  document.querySelector('.form__div #submit');
  let form1 =  document.querySelector('#form1');
  let allinputs = form1.querySelectorAll('.form input');
  let form2 =  document.querySelector('#form2');
  let allinputs2 = form2.querySelectorAll('.form input');
  let datecontainer = document.querySelector('.datecontainer');
  let datecontainer2 = document.querySelector('.datecontainer2');

  form1.onsubmit = (e) => {
    e.preventDefault();
//console.log(allinputs);
    allinputs.forEach((element) => {
        //console.log(element);
       if(element.value == ""){
         element.style.borderColor = "red";
       } else {
        element.style.borderColor = "black";
       }
   
   })

if(downinput.style.borderColor == "black" && checkinput.style.borderColor == "black" && checkinput2.style.borderColor == "black" && numinput.style.borderColor == "black"){
    location.href = `search.php?location=${downinput.value}&checkin=${checkinput.value}&checkout=${checkinput2.value}&guests=${numinput.value}`;
}
  }

  form2.onsubmit = (e) => {
    e.preventDefault();
//console.log(allinputs);
    allinputs2.forEach((element) => {
        //console.log(element);
       if(element.value == ""){
         element.style.borderColor = "red";
       } else {
        element.style.borderColor = "black";
       }
   
   })

if(locationinput2.style.borderColor == "black" && numinput3.style.borderColor == "black" && numinput2.style.borderColor == "black"){
    location.href = `search.php?bedroom=${locationinput2.value}&bathroom=${numinput2.value}&guests=${numinput3.value}`;
}
  }



  downinput.readOnly = true;
  downinput2.readOnly = true;
  numinput.readOnly = true;
  numinput2.readOnly = true;
  numinput3.readOnly = true;
  checkinput.readOnly = true;
  checkinput2.readOnly = true;
  

  window.addEventListener('click', function(e){   
  if (downinput.contains(e.target) || downinput2.contains(e.target) || numinput.contains(e.target) || numinput2.contains(e.target) || numinput3.contains(e.target) || checkinput.contains(e.target) || checkinput2.contains(e.target)){
    // Clicked in box
  } else{
    locationone.style.display = "none";
    locationtwo.style.display = "none";
    locationthree.style.display = "none";
    locationfour.style.display = "none";
    locationfive.style.display = "none";
  }
});
    
  downinput.onclick = () => {
    locationone.style.display = "block";
    locationtwo.style.display = "none";
    locationthree.style.display = "none";
    locationfour.style.display = "none";
    locationfive.style.display = "none";
    datecontainer.style.display = "none";
    datecontainer2.style.display = "none";
  }

  downinput2.onclick = () => {
    locationone.style.display = "none";
    locationtwo.style.display = "none";
    locationthree.style.display = "block";
    locationfour.style.display = "none";
    locationfive.style.display = "none";
    datecontainer.style.display = "none";
    datecontainer2.style.display = "none";
  }

  numinput2.onclick = () => {
    locationone.style.display = "none";
    locationtwo.style.display = "none";
    locationthree.style.display = "none";
    locationfour.style.display = "block";
    locationfive.style.display = "none";
    datecontainer.style.display = "none";
    datecontainer2.style.display = "none";
  }

  numinput3.onclick = () => {
    locationone.style.display = "none";
    locationtwo.style.display = "none";
    locationthree.style.display = "none";
    locationfour.style.display = "none";
    locationfive.style.display = "block";
    datecontainer.style.display = "none";
    datecontainer2.style.display = "none";
  }

  numinput.onclick = () => {
    locationtwo.style.display = "block";
    locationone.style.display = "none";
    locationthree.style.display = "none";
    locationfour.style.display = "none";
    locationfive.style.display = "none";
    datecontainer.style.display = "none";
    datecontainer2.style.display = "none";
  }

  

  

   let optionclick = document.getElementsByName('category');
  
   //console.log(document.querySelector('.form__div #locationinput').value)
   
   optionclick.forEach((element) => {
    element.onclick= () =>{
      document.querySelector('#locationinput').value
                        = element.value;
      locationone.style.display = "none";
    }
   })

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
     document.querySelector('#numinput2').value
                       = element.value;
     locationfour.style.display = "none";
   }
  })


  let optionclick5 = document.getElementsByName('number3');
  
  //console.log(document.querySelector('.form__div #locationinput').value)
  
  optionclick5.forEach((element) => {
   element.onclick= () =>{
     document.querySelector('#numinput3').value
                       = element.value;
     locationfive.style.display = "none";
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
    checkinput.value = new Date().getDate() + "-" + months[date.getMonth()] + "-"+ date.getFullYear();
    let todays = document.querySelectorAll('.present-date');

let monthValue = document.querySelector('.date h1');
 todays.forEach((element) => {
  element.onclick = () => {
    let datevalue = element.innerHTML;
    let monthval = monthValue.innerHTML;
    let yearvalue = date.getFullYear();
    let dateval = datevalue + "-" +monthval +  "-" + yearvalue  
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
    checkinput2.value = new Date().getDate() + "-" + months[date.getMonth()] + "-"+ date.getFullYear();
    let todays = document.querySelectorAll('.present-date2');

let monthValue = document.querySelector('.date2 h1');
 todays.forEach((element) => {
  element.onclick = () => {
    let datevalue = element.innerHTML;
    let monthval = monthValue.innerHTML;
    let yearvalue = date.getFullYear();
    let dateval = datevalue + "-" +monthval +  "-" + yearvalue  
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
    locationtwo.style.display = "none";
    locationone.style.display = "none";
    locationthree.style.display = "none";
    locationfour.style.display = "none";
    locationfive.style.display = "none";
    datecontainer2.style.display = "none";
  }

  checkinput2.onclick = () =>{
    datecontainer2.style.display = 'block';
    locationtwo.style.display = "none";
    locationone.style.display = "none";
    locationthree.style.display = "none";
    locationfour.style.display = "none";
    locationfive.style.display = "none";
    datecontainer.style.display = "none";
  }

  </script>
</body>
</html>