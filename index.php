<?php 
include "projectdetails.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      a{
        text-decoration: none;
      }

      .datecontainer,.datecontainer2{
        z-index: 5000;
      }

      .error{
  width: 18em;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 20px;
  border-radius: 10px;
  margin: 0 auto;
  margin-top: -40px;
  padding: 5px 0;
  background-color: rgb(233, 50, 50);
  color: #fff;
  position: absolute;
  left: 1em;
  top: 3em;
  box-shadow: 0px 1px 4px 2px rgba(50, 71, 92, 0.02), 0px 2px 6px 1px rgba(50, 71, 92, 0.04), 0px 1px 6px 2px rgba(50, 71, 92, 0.06);
}

.error img{
  cursor: pointer;
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

    </style>
</head>
<body>
 
  <!-- Header -->
  <div class="head-container">
    <div class="haven-home-image">
      <img src="images/Haven-home-image.png" alt="">
    </div>
    <div class="header">
      <a href="index.php"><div class="logo">
        <img src="images/Haven_logo.svg" alt="">
      </div>
    </a>
    <img src="images/navmenu.png" alt="" class="navmenu">
      <ul>
        <div class="mobilediv">
          <a href="index.html"><div class="logo">
            <img src="images/haven_logo3.png" alt="">
          </div>
          </a>
          <img src="images/close.png" alt="" class="navclose">
        </div>
        <li class="home-link"><a href="index.html">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="partner.html">Partner with us</a></li>
        <li><a href="affiliates.html">Affiliates</a></li>
        <li><a href="accomodation.php">Accomodation</a></li>
        <li><a href="landlord.html">Landlord Services</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>

    <?php 
    if(isset($_GET['error'])){
      if($_GET['error'] != ""){
    ?>
    <div class="error">
                     <?php echo $_GET['error'];?>
                    <img src="images/closemsg.png" alt="">
                    </div>
    <?php }}?>

    <?php 
      if(isset($_GET['success'])){
      if($_GET['success'] != ""){
    ?>
    <div class="error" style="background-color: green;">
                     <?php echo $_GET['success'];?>
                     <img src="images/closemsg.png" alt="">
                    </div>
    <?php }}?>
    <!-- Header Text -->
    <div class="header-text">
      <div class="text-one">
        <p class="large-text">Haven</p>
        <p class="large-text">Experience</p>
        <p class="large-text">Lodging.</p>
      <p class="small-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque sunt dolor 
        temporibus maiores ipsa nobis vero architecto quasi veniam quibusdam at ad autem id nisi commodi ea, itaque a ex.</p>
      </div>
       <div class="text-two">
        <img src="images/haven-hero2.png" alt="">
       </div>
    </div>

    
    <div class="input-container">
      <div class="input-div">
      <form class="form" action="">
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

    <!-- Second Section -->
    <div class="second-section">
      <div class="flexcon-1">
        <div class="large-text-div">
          <p class="large-text-3">
            Why pick our serviced
          </p>
          <p class="large-text-3">
            accomodation?
          </p>
          <p class="small-text-3">
            High quality and ease is a constant, but we have a range of styles and budgets to suit, whether a short stay or long-term contact.
          </p>
       </div>
        <div class="div-flex-one">
          <div>
            <img src="images/card-image2.png" alt="">
          </div>
           <div class="div-flex-two">
            <p class="firstp">space</p>
            <p class="secondp">All of our properties have ample space, and can be matched to your individual needs.</p>
           </div>
        </div>

        <div class="div-flex-one">
          <div>
            <img src="images/card-image2.png" alt="">
          </div>
           <div class="div-flex-two">
            <p class="firstp">flexibility</p>
            <p class="secondp">We understand contracts can change on a regular basis, which is we try to be as flexible as we can with our guests.</p>
           </div>
        </div>

        <div class="div-flex-one">
          <div>
            <img src="images/card-image2.png" alt="">
          </div>
           <div class="div-flex-two">
            <p class="firstp">savings</p>
            <p class="secondp">The price per person per night is much better than hotel rooms and all properties have fully equipped kitchens.</p>
           </div>
        </div>
      </div>
      <div class="flexcon-2">
        <img src="images/card-image2.png" alt="">
      </div>
    </div>



    <!-- Third Section -->
    <div class="third-section">
      <p class="onep">Benefit even more with the SAC Saver</p>
      <p class="secp">On top of all the benefits you'd expect by booking through us, we also offer the SAC Saver Scheme - each time you book through us you gain exclusive money off and discountoffers for local amenities, from take-aways too!</p>
       <button><a href="">Search</a></button>
    </div>

    <!-- Fourth Section -->
   <div class="fourth-section">
      <div class="flexcon-1">
        <div class="flexcon-child">
          <img src="images/card-image2.png" alt="">
        </div>
      </div>
        <div class="flexcon-2">
          <div class="flexcon-2-form">
            <p class="large-text-4">Need something specific?</p>
            <p class="smallp">Please just give us a call or send an enquiry, and we will match you with the best deals and properties for your bespoke requirements.</p>
            <form action="contactemail.php" class="flexcon-2-form2" method="POST">
              <div class="flex_form">
                  <div class="form__div">
                    <input type="text" name="email" id="" class="form__input" placeholder="Email">
                  </div>
          
                  <div class="form__div">
                    <input type="number" name="phone" id="" class="form__input" placeholder="Phone">
                  </div>
              
                  <div class="form__div">
                    <input type="text" name="name" id="" class="form__input" placeholder="Name">
                  </div>

                  <div class="form__div">
                    <input type="text" name="company" id="" class="form__input" placeholder="Company">
                  </div>
            
                  <div class="form__div" id="messagediv">
                    <input type="text" name="message" id="message" class="form__input" placeholder="Message">
                  </div>
            </div>

            <div>
              <button type="submit" id="submit">submit</button>
            </div>
             
            </form>
          </div>
        </div>
   </div>

   <!-- Fifth Section -->  
   <div class="fifth-section">
   <p class="large-text-6">destinations</p>
   <p class="small-text-6">We operate a versatile group of properties, so we know what you are looking for. We have carefully selected partners throughout the UK ready for your stay.</p>
   <div class="flexcontainer">
     <div class="flexcontainer-child">
        <div class="flex-child-1">
          <div class="flex-1">
            <img src="images/card-image2.png" alt="">
            <p>Billingham</p>
          </div>
          <div class="flex-2">
            <div>
              <img src="images/card-image2.png" alt="">
              <p>Darlington</p>
            </div>
            <div>
              <img src="images/card-image2.png" alt="">
              <p>Guisborough</p>
            </div>
            <div><img src="images/card-image2.png" alt="">
              <p>Hartlepool</p>
            </div>
            <div><img src="images/card-image2.png" alt="">
              <p>Middlesborough</p>
            </div>
          </div>
        </div>

        <div class="flex-child-2">
          <div>  <img src="images/card-image2.png" alt="">
            <p>Petersborough</p>
          </div>
        <div><img src="images/card-image2.png" alt="">
          <p>Redcar</p>
        </div>
          <div><img src="images/card-image2.png" alt="">
            <p>Stockton</p>
          </div>
          <div><img src="images/card-image2.png" alt="">
            <p>West Kingsdown</p>
          </div>
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
  let numinput = document.querySelector('#numinput');
  let locationone = document.querySelector('#locations');
  let locationtwo = document.querySelector('#locations2');
  let checkinput =  document.querySelector('.form__div #checkinput');
  let checkinput2 =  document.querySelector('.form__div #checkinput2');
  let submit =  document.querySelector('.form__div #submit');
  let form =  document.querySelector('.form');
  let form2 =  document.querySelector('.flexcon-2-form2');
  let allinputs = form.querySelectorAll('.form input');
  let allinputs2 = form.querySelectorAll('.flexcon-2-form2 input');
  let datecontainer = document.querySelector('.datecontainer');
  let datecontainer2 = document.querySelector('.datecontainer2');

  form.onsubmit = (e) => {
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



  
  





  downinput.readOnly = true;
  numinput.readOnly = true;
  checkinput.readOnly = true;
  checkinput2.readOnly = true;
  

  window.addEventListener('click', function(e){   
  if (downinput.contains(e.target) || numinput.contains(e.target) || checkinput.contains(e.target) || checkinput2.contains(e.target)){
    // Clicked in box
  } else{
    locationone.style.display = "none";
    locationtwo.style.display = "none";
  }
});
    
  downinput.onclick = () => {
    locationone.style.display = "block";
    locationtwo.style.display = "none";
    datecontainer.style.display = "none";
    datecontainer2.style.display = "none";
  }

  numinput.onclick = () => {
    locationtwo.style.display = "block";
    locationone.style.display = "none";
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
    datecontainer2.style.display = "none";
  }

  checkinput2.onclick = () =>{
    datecontainer2.style.display = 'block';
    locationtwo.style.display = "none";
    locationone.style.display = "none";
    datecontainer.style.display = "none";
  }

 
  
  
let closeerror = document.querySelector('.error img');
let errormsg = document.querySelector('.error');


closeerror.onclick = () =>{
  errormsg.style.display = "none";
  location.href = "index.php";
}
  
 
    </script>
</body>
</html>