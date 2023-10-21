<?php 
if(!isset($_GET['id'])){
  header("Location: index.php");
}
include "projectdetails.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accomodation Info</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      
body{
    overflow-x:hidden;
    height: 200vh;
}

.footer{
    margin-top: 1em;
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

/* Multiple Div Styling */
.multiple{
    width: 99%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 1.5em;
    padding-top: 3em;
}
.multiple img{
    width: 174.654px;
height: 174.654px;
border-radius: 18.68px;
}

/* Accomodation Page Styling */
.accomodate{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 99%;
    padding-top: 3em;
}
.accomodate img{
    width: 400px;
height: 500px;
border-radius: 281px 281px 40px 40px;
object-fit: cover;
}

.accomodate-first{
    width: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 1em;
    position: relative;
}

.accomodate-first .map-div{
  border: 1px solid black;
  height: 17em;
  width: 60%;
  border-radius: 10px;
  box-shadow: 0px 5px 16px 6px rgba(50, 71, 92, 0.02), 0px 15px 19px 2px rgba(50, 71, 92, 0.04), 0px 7px 19px 5px rgba(50, 71, 92, 0.06);

}

.accomodate-first .map-div img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px!important;
}

.accomodate-second{
    width: 50%;
}

.accomodate-second .pfirst{
    color: #221615;
font-feature-settings: 'clig' off, 'liga' off;
font-size: 43px;
font-style: normal;
font-weight: 700;
line-height: 133.4%; /* 57.362px */
text-transform: capitalize;
}

.accomodate-second .psecond{
    color: var(--light-text-secondary, rgba(50, 71, 92, 0.60));
font-feature-settings: 'clig' off, 'liga' off;
font-size: 18px;
font-style: normal;
font-weight: 600;
line-height: 24px; /* 133.333% */
letter-spacing: 0.15px;
text-transform: uppercase;
}

.accomodate-second .pthird{
    color: var(--light-text-secondary, rgba(50, 71, 92, 0.60));
font-feature-settings: 'clig' off, 'liga' off;
font-size: 18px;
font-style: normal;
font-weight: 600;
line-height: 24px; /* 133.333% */
letter-spacing: 0.15px;
width: 60%;
}

.form{
    display: flex;
    align-items: left;
    justify-content: center;
    flex-direction: column;
    gap: 1.5em;
    padding-top: 2em;
}

.form__input.first{
    width: 10em;
}



.form .flex-div{
    display: flex;
    align-items: center;
    justify-content: left;
    gap: 1.5em;
}

.form #submit{
    display: flex;
width: 24em;
height: 56px;
flex-direction: column;
justify-content: center;
align-items: center;
border-radius: 6px;
background: #AA706A;
border: none;
color: #fff;
text-transform: uppercase;
font-size: 15px;
}

.form__input{
    width: 24em;
    height: 1em;
    font-size: 1rem;
    border: 1px solid #9ea3a8;
    border-radius: 6px;
    outline: none;
    padding: 1rem;
    position: unset;
    margin: 0;
    /* background: none; */
}

.form__div .select-container{
    position: relative;
    min-width: 20px;
    /* height: 70px; */
}

.datecontainer,.datecontainer2{
    z-index: 1000;
}


.form__div #locations{
    position: absolute;
    top: 1rem;
    border: none;
    appearance: none;
    color: #AA706A;
    background-color: #FDF8F4;
    font-size: 17px;
    width: 24em;
    max-height: 350px;
    display: none;
    transition: all 0.4s;
    border-radius: 8px;
    overflow: hidden;
    z-index: 1000;
    box-shadow: 0px 5px 16px 6px rgba(50, 71, 92, 0.02), 0px 15px 19px 2px rgba(50, 71, 92, 0.04), 0px 7px 19px 5px rgba(50, 71, 92, 0.06);
}

.form__div{
    position: relative;
}

.form__label{
    position: absolute;
    left: .8rem;
    top: -.5rem;
    padding: 0 .25rem;
    background-color: #fff;
    color: var(--light-text-secondary, rgba(50, 71, 92, 0.60));
    font-feature-settings: 'clig' off, 'liga' off;
    font-size: 0.8rem;
    transition: .3s;
    z-index: 10;
} 





.form__div #locations2{
    position: absolute;
    top: 4rem;
    border: none;
    appearance: none;
    color: #AA706A;
    background-color: #FDF8F4;
    font-size: 17px;
    width: 220px;
    max-height: 330px;
    display: none;
    transition: all 0.4s;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0px 5px 16px 6px rgba(50, 71, 92, 0.02), 0px 15px 19px 2px rgba(50, 71, 92, 0.04), 0px 7px 19px 5px rgba(50, 71, 92, 0.06);
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
  height: 675px;
    width: 100%;
    /* background-color: #AA706A; */
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    position: relative;
    margin-top: 4em;
    padding-top: 7em;
}

.third-aboutus .third-div-child{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.third-aboutus .third-div-child img{
    height: 392px;
    width: 60%;
    border-radius: 40px;
    object-fit: cover;
}

.third-aboutus .third-div-child2{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding-top: 2em;
}

.third-aboutus .third-div-child2 .pone{
  width: 50%;
  color: #221615;
text-align: center;
font-variant-numeric: lining-nums proportional-nums;
font-size: 50px;
font-style: normal;
font-weight: 700;
line-height: 63.984px;
}

.third-aboutus .third-div-child2 .ptwo{
  width: 50%;
  color: #7A6D64;
text-align: center;
font-size: 18px;
font-style: normal;
font-weight: 400;
line-height: 150%;
}

.third-aboutus .third-div-child3{
    width: 40%;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    flex-wrap: wrap;
    gap: 1em;
    padding-top: 2em;
}

.third-div-child3 .div-child{
    display: flex;
padding: 20px;
justify-content: center;
align-items: center;
gap: 16px;
border-radius: 6px;
background: #FFF;
box-shadow: 0px 5px 16px 6px rgba(50, 71, 92, 0.02), 0px 15px 19px 2px rgba(50, 71, 92, 0.04), 0px 7px 19px 5px rgba(50, 71, 92, 0.06);
}

.div-child p{
    text-transform: capitalize;
}

.div-child .color-div{
    width: 30px;
height: 30px;
border-radius: 8px;
background: #D4AF37;
}

/* Fourth About Us Styling */
.fourth-aboutus{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 4em;
}
.fourth-aboutus .first-div-1,.fourth-aboutus .first-div-2{
  width: 92%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 2em;
  padding: 0 4em;
}

.first-div-1 .first-div,.first-div-2 .first-div{
    width: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}



.first-div-1 .sec-div,.first-div-2 .sec-div{
 width: 50%;
}

.first-div-1 .sec-div .p1, .first-div-2 .sec-div .p1{
  color: #191A1D;
font-size: 40px;
font-style: normal;
font-weight: 700;
line-height: 53px;
text-transform: lowercase;
text-align: left;
width: 70%;
padding-top: 0.5em;
}

.first-div-1 .sec-div .p2, .first-div-2 .sec-div .p2{
  color: #7A6D64;
font-size: 20px;
font-style: normal;
font-weight: 400;
line-height: 31.7px; 
text-align: left;
padding-top: 0.5em;
}


/* First Contact Styling */
.first-contact{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 2em;
    padding: 1.5em 0;
    margin-top: 2em;
}

.first-contact .contact-second{
  height: 20em;
  width: 25%;
  border-radius: 10px;
  box-shadow: 0px 5px 16px 6px rgba(50, 71, 92, 0.02), 0px 15px 19px 2px rgba(50, 71, 92, 0.04), 0px 7px 19px 5px rgba(50, 71, 92, 0.06);
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 1em;
  padding: 2em;
}

.contact-second .check-div{
  color: #7A6D64;
text-align: center;
font-size: 14px;
font-style: normal;
font-weight: 400;
line-height: 150%; /* 27px */
display: flex;
align-items: center;
justify-content: space-between;
gap: 0.6em;
padding-top: 1em;
cursor: pointer;
}

.check-div .round-check{
  width: 30px;
  height: 30px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #67BFA9;
}

.first-contact .contact-sec img{
   width: 38em;
   height: 25em;
}

.first-contact .contact-first .pone{
    color: #221615;
font-feature-settings: 'clig' off, 'liga' off;
font-family: Nunito Sans;
font-size: 43px;
font-style: normal;
font-weight: 700;
line-height: 133.4%; /* 57.362px */
}

.first-contact .contact-first div{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1em;
    padding-bottom: 1em;
    text-align: left;
}

.first-contact .contact-first .ptwo{
    color: var(--light-text-secondary, rgba(50, 71, 92, 0.60));
font-feature-settings: 'clig' off, 'liga' off;
font-size: 18px;
font-style: normal;
font-weight: 600;
line-height: 24px; /* 133.333% */
letter-spacing: 0.15px;
}

.fourth-section{
    margin-top: 1em;
}

/* Second Contact Styling */
.second-contact{
    width: 98%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    margin-top: 3em;
}

.second-contact .second-contact-one{
    padding: 1em 0;
}

.second-contact-one .pfirst{
    color: #221615;
text-align: center;
font-variant-numeric: lining-nums proportional-nums;
font-size: 57px;
font-style: normal;
font-weight: 700;
line-height: 63.984px; /* 112.253% */
text-transform: capitalize;
}

.second-contact-one .psec{
    color: #7A6D64;
text-align: center;
font-size: 18px;
font-style: normal;
font-weight: 400;
line-height: 150%; /* 27px */
}

.second-contact-two{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1.5em;
    width: 50%;
    flex-wrap: wrap;
}

.second-contact-two .two-div{
    display: flex;
padding: 24px;
justify-content: center;
align-items: center;
gap: 16px;
width: 18em;
border-radius: 6px;
background: #FFF;
box-shadow: 0px 5px 16px 6px rgba(50, 71, 92, 0.02), 0px 15px 19px 2px rgba(50, 71, 92, 0.04), 0px 7px 19px 5px rgba(50, 71, 92, 0.06);
}

.second-contact-two .two-p1{
    color: #052328;
font-variant-numeric: lining-nums proportional-nums;
font-size: 24px;
font-style: normal;
font-weight: 700;
line-height: 31.992px; /* 133.3% */
text-transform: capitalize;
}

.second-contact-two .two-p2{
    color: #7A6D64;
font-variant-numeric: lining-nums proportional-nums;
font-size: 16px;
font-style: normal;
font-weight: 700;
line-height: 31.992px; /* 199.95% */
text-transform: capitalize;
}

.second-contact-two .two-div img{
    width: 80px;
height: 80px;
border-radius: 8px;
}

.imagemodal{
  position: absolute;
  top: 0;
  bottom: -50em;
  right: 0;
  left: 0;
  background-color: rgba(0,0,0,0.7);
  z-index: 3000;
  display: none;
  align-items: center;
  justify-content: center;
}

.imagemodal .imagescreen{
  width: 60%;
  height: 40em;
  position: absolute;
  top: 30%;
  border-radius: 10px;
}

.imagescreen img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
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



.third-aboutus .third-div-child img{
    height: 300px;
    width: 75%;
}

.third-aboutus .third-div-child2 .pone{
  width: 90%;
  color: #221615;
text-align: center;
font-variant-numeric: lining-nums proportional-nums;
font-size: 30px;
font-style: normal;
font-weight: 700;
line-height: 43px;
}

.third-aboutus .third-div-child2 .ptwo{
  width: 90%;
  color: #7A6D64;
text-align: center;
font-size: 15px;
font-style: normal;
font-weight: 400;
line-height: 150%;
padding-top: 1em;
}

.third-aboutus .third-div-child3{
    width: 90%;
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    flex-wrap: wrap;
    gap: 1em;
    padding-top: 2em;
}

.third-aboutus .third-div-child3 .last{
    display: none;
}

.third-div-child3 .div-child{
    display: flex;
padding: 12px;
justify-content: center;
align-items: center;
gap: 16px;
border-radius: 6px;
background: #FFF;
box-shadow: 0px 5px 16px 6px rgba(50, 71, 92, 0.02), 0px 15px 19px 2px rgba(50, 71, 92, 0.04), 0px 7px 19px 5px rgba(50, 71, 92, 0.06);
}




/* Fourth About Us Styling */
.fourth-aboutus .first-div-1,.fourth-aboutus .first-div-2{
  width: 92%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 2em;
  padding: 0;
}

.first-div-1 .first-div,.first-div-2 .first-div{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.first-div-1 .sec-div,.first-div-2 .sec-div{
 width: 100%;
}

.first-div-1 .sec-div img, .first-div-2 .sec-div img{
   margin-left: 1em;
}

.first-div-1 .sec-div .p1, .first-div-2 .sec-div .p1{
  color: #191A1D;
font-size: 24px;
font-style: normal;
font-weight: 700;
line-height: 53px;
text-transform: lowercase;
text-align: left;
width: 100%;
padding-top: 0.5em;
padding-left: 1em;
}

.first-div-1 .sec-div .p2, .first-div-2 .sec-div .p2{
  color: #7A6D64;
font-size: 15px;
font-style: normal;
font-weight: 400;
line-height: 31.7px; 
text-align: left;
padding-top: 0.5em;
padding-left: 1em;
}

.first-div-1 .first-div img,.first-div-2 .first-div img{ 
   width: 22em;
   height: 22em;
}

.first-div-1 .first-div,.first-div-2 .first-div{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}



.first-div-1 .sec-div,.first-div-2 .sec-div{
 width: 100%;
}

.first-contact{
    flex-direction: column;
}

.first-contact .contact-sec img{
   width: 24em;
   height: 15em;
}

.second-contact-two{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1.5em;
    width: 100%;
    flex-wrap: wrap;
}

.second-contact-two .two-p2{
    color: #7A6D64;
font-variant-numeric: lining-nums proportional-nums;
font-size: 14px;
font-style: normal;
font-weight: 700;
line-height: 31.992px; /* 199.95% */
text-transform: capitalize;
}

.second-contact-one .psec{
    color: #7A6D64;
text-align: center;
font-size: 16px;
font-style: normal;
font-weight: 400;
line-height: 150%; /* 27px */
}

/* Accomodation Page Styling */
.accomodate{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    width: 99%;
    padding-top: 3em;
}
.accomodate img{
    width: 300px;
height: 350px;
border-radius: 281px 281px 40px 40px;
object-fit: cover;
}

.accomodate-first{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-bottom: 2em;
}

.accomodate-second{
    width: 100%;
}

.form__input.first{
    width: 20em;
}

.form__input{
    width: 20em;
    height: 1em;
    font-size: 1rem;
    border: 1px solid #9ea3a8;
    border-radius: 6px;
    outline: none;
    padding: 1rem;
    position: unset;
    margin: 0;
    /* background: none; */
}

.form__div #locations{
    position: absolute;
    top: 1rem;
    border: none;
    appearance: none;
    color: #AA706A;
    background-color: #FDF8F4;
    font-size: 17px;
    width: 20em;
    max-height: 350px;
    display: none;
    transition: all 0.4s;
    border-radius: 8px;
    overflow: hidden;
    z-index: 1000;
    box-shadow: 0px 5px 16px 6px rgba(50, 71, 92, 0.02), 0px 15px 19px 2px rgba(50, 71, 92, 0.04), 0px 7px 19px 5px rgba(50, 71, 92, 0.06);
}

.form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 1.5em;
    padding-top: 2em;
}



.form .flex-div{
    display: flex;
    align-items: center;
    justify-content: left;
    flex-direction: column;
    gap: 1.5em;
}

.accomodate-second .pfirst{
    color: #221615;
font-feature-settings: 'clig' off, 'liga' off;
font-size: 30px;
font-style: normal;
font-weight: 700;
line-height: 133.4%; /* 57.362px */
text-transform: capitalize;
padding-left: 1em;
}

.accomodate-second .psecond{
    color: var(--light-text-secondary, rgba(50, 71, 92, 0.60));
font-feature-settings: 'clig' off, 'liga' off;
font-size: 15px;
font-style: normal;
font-weight: 600;
line-height: 24px; /* 133.333% */
letter-spacing: 0.15px;
text-transform: uppercase;
padding-left: 1em
}

.accomodate-second .pthird{
    color: var(--light-text-secondary, rgba(50, 71, 92, 0.60));
font-feature-settings: 'clig' off, 'liga' off;
font-size: 15px;
font-style: normal;
font-weight: 600;
line-height: 24px; /* 133.333% */
letter-spacing: 0.15px;
width: 90%;
padding-left: 1em
}


.multiple img{
    width: 104px;
height: 104px;
border-radius: 18.68px;
}

.imagemodal .imagescreen{
  width: 90%; 
  height: 30em;
}

.first-contact .contact-second{
  height: 26em;
  width: 70%;
  border-radius: 10px;
  box-shadow: 0px 5px 16px 6px rgba(50, 71, 92, 0.02), 0px 15px 19px 2px rgba(50, 71, 92, 0.04), 0px 7px 19px 5px rgba(50, 71, 92, 0.06);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: 1em;
  padding: 2em;
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
        <li><a href="about.php">About</a></li>
        <li><a href="partner.html">Partner with us</a></li>
        <li><a href="affiliates.html">Affiliates</a></li>
        <li  class="home-link"><a href="accomodation.html">Accomodation</a></li>
        <li><a href="landlord.html">Landlord Services</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  </div>

  <!-- Accomodation Info Container -->
  <div class="accomodate">
  <?php 
       $room = new User;
       $allrooms = $room->selectRoomDetails($_GET['id']);

       if(!empty($allrooms)){
        foreach ($allrooms as $key => $value) {
      ?>
    <div class="accomodate-first">
        <img src="roomimage/<?php if(isset($value['room_image'])){
          echo $value['room_image'];
        }?>" alt="">
    </div>
    <div class="accomodate-second">
        <p class="pfirst"><?php echo $value['room_name'];?></p>
        <p class="psecond"><?php echo $value['room_location'];?></p>
        <p class="pthird"><?php echo $value['description'];?></p>
        <form action="" class="form">
            <div class="flex-div">
              <div class="form__div">
                <input type="text" name="" id="checkinput" class="form__input first" placeholder="" value="<?php echo $value['check_in_date'];?>">
                <label for="" class="form__label">Check In</label>
                
              </div>
      
              <div class="form__div">
                <input type="text" name="" id="checkinput2" class="form__input first" placeholder=" " value="<?php echo $value['check_out_date'];?>">
                <label for="" class="form__label">Check Out</label>
                
              </div>
            </div>

              <div class="form__div ">
                <input type="text" name="" id="locationinput" class="form__input" placeholder="Guests" value="" >
                <label for="" class="form__label">Guest No</label>
               
                <div class="select-container">
                  <div name="" id="locations" class="active">
                    <div class="option">
                      <input type="radio" class="radio" id="Billingham" name="category" value="1 Guest">
                      <label for="Billingham">1 Guest</label>
                    </div>
                    <div class="option">
                      <input type="radio" class="radio" id="Darlington" name="category" value="2 Guests">
                      <label for="Darlington">2 Guests</label>
                    </div>
                    <div class="option">
                      <input type="radio" class="radio" id="Guisborough" name="category" value="3 Guests">
                      <label for="Guisborough">3 Guests</label>
                    </div>
                    <div class="option">
                      <input type="radio" class="radio" id="Hartlepool" name="category" value="4 Guests">
                      <label for="Hartlepool">4 Guests</label>
                    </div>
                    <div class="option">
                      <input type="radio" class="radio" id="Middlesborough" name="category" value="5 Guests">
                      <label for="Middlesborough">5 Guests</label>
                    </div>
                    <div class="option">
                      <input type="radio" class="radio" id="Peterborough" name="category" value="6 Guests">
                      <label for="Peterborough">6 Guests</label>
                    </div>
                    <div class="option">
                      <input type="radio" class="radio" id="Redcar" name="category" value="7 Guests">
                      <label for="Redcar">7 Guests</label>
                    </div>
                    <div class="option">
                      <input type="radio" class="radio" id="Stockton" name="category" value="8 Guests">
                      <label for="Stockton">8 Guests</label>
                    </div>
                    <div class="option">
                      <input type="radio" class="radio" id="West Kingsdown" name="category" value="9 Guests">
                      <label for="West Kingsdown">9 Guests</label>
                    </div>
                    <div class="option">
                        <input type="radio" class="radio" id="West Kingsdown1" name="category" value="10 Guests">
                        <label for="West Kingsdown1">10 Guests</label>
                      </div>
                  </div>
              </div>
             </div>
      
              <div class="form__div">
                <button type="submit" id="submit">book now</button>
              </div>
            
        </form>
    </div>
  </div>

  

  <!-- Multiple Divs Container -->
  <div class="multiple">
    <div>
        <img src="roomimage/<?php if(isset($value['room_image1'])){
          echo $value['room_image1'];
        }?>" alt="">
    </div>
    <div>
        <img src="roomimage/<?php if(isset($value['room_image2'])){
          echo $value['room_image2'];
        }?>" alt="">
    </div>
    <div>
        <img src="roomimage/<?php if(isset($value['room_image3'])){
          echo $value['room_image3'];
        }?>" alt="">
    </div>
    <div>
        <img src="roomimage/<?php if(isset($value['room_image4'])){
          echo $value['room_image4'];
        }?>" alt="">
    </div>
    <div>
        <img src="roomimage/<?php if(isset($value['room_image5'])){
          echo $value['room_image5'];
        }?>" alt="">
    </div>
    <div>
        <img src="roomimage/<?php if(isset($value['room_image6'])){
          echo $value['room_image6'];
        }?>" alt="">
    </div>
  </div>

 <?php }}?>
  <!-- First Contact Container -->
      <div class="first-contact">
           <div class="contact-first">
              <p class="pone">Contact Us</p>
              <div>
                <img src="images/location.png" alt="">
                <p class="ptwo">3, crimson street ave, blah blah blah</p>
              </div>
              <div>
                <img src="images/call.png" alt="">
                <p class="ptwo">016 022 0343</p>
              </div>
              <div>
                <img src="images/email.png" alt="">
                <p class="ptwo">blahblah@gmail.com</p>
              </div>
           </div>

           <div class="contact-second">
               <div>
               <p>Features</p>
                 <div class="check-div">
                   <div class="round-check">
                   <img src="images/check_mark.png" alt="" style="color: #fff;">
                   </div>
                   <p><?php echo $value['feature_one'];?></p>
                 </div>

                 <div class="check-div">
                   <div class="round-check">
                   <img src="images/check_mark.png" alt="" style="color: #fff;">
                   </div>
                   <p><?php echo $value['feature_two'];?></p>
                 </div>

                 <div class="check-div">
                   <div class="round-check">
                   <img src="images/check_mark.png" alt="" style="color: #fff;">
                   </div>
                   <p><?php echo $value['feature_three'];?></p>
                 </div>

                 <div class="check-div">
                   <div class="round-check">
                   <img src="images/check_mark.png" alt="" style="color: #fff;">
                   </div>
                   <p><?php echo $value['feature_four'];?></p>
                 </div>

                 <div class="check-div">
                   <div class="round-check">
                   <img src="images/check_mark.png" alt="" style="color: #fff;">
                   </div>
                   <p><?php echo $value['feature_five'];?></p>
                 </div>

                 <div class="check-div">
                   <div class="round-check">
                   <img src="images/check_mark.png" alt="" style="color: #fff;">
                   </div>
                   <p><?php echo $value['feature_six'];?></p>
                 </div>
               </div>
              
           </div>
      </div>

  
  <div class="imagemodal">

     <div class="imagescreen">
       <img src="" alt="">
     </div>
  </div>

 <!-- Main -->
 <div class="main">
    


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

   <!-- AIzaSyAoZvysGPzbEJQ8H2YLX_A-XW2pAN4ASm8 -->
  
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
  let locationone = document.querySelector('#locations');
  let checkinput =  document.querySelector('.form__div #checkinput');
  let checkinput2 =  document.querySelector('.form__div #checkinput2');
  let submit =  document.querySelector('.form__div #submit');
  let form =  document.querySelector('.form');

  form.onsubmit = (e) => {
    e.preventDefault();
  }

  submit.addEventListener('click',function(){
    location.href = "booking.html";
  });
  
  downinput.readOnly = true;
  checkinput.readOnly = true;
  checkinput2.readOnly = true;
  
  

  window.addEventListener('click', function(e){   
  if (downinput.contains(e.target) || checkinput.contains(e.target) || checkinput2.contains(e.target)){
    // Clicked in box
  } else{
    locationone.style.display = "none";
  }
});
    
  downinput.onclick = () => {
    locationone.style.display = "block";
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

  
  checkinput.onclick = () =>{
    datecontainer.style.display = 'block';
    locationone.style.display = "none";
    datecontainer2.style.display = "none";
  }

  checkinput2.onclick = () =>{
    datecontainer2.style.display = 'block';
    locationone.style.display = "none";
    datecontainer.style.display = "none";
  }

  let allimages = document.querySelectorAll('.multiple img');
  //console.log(allimages);
  allimages.forEach((element) => {
  element.onclick = () => {
      //console.log(element.src);
      document.querySelector('.imagemodal').style.display = "flex";
      document.querySelector('.imagescreen img').src = element.src;
   }
  
 })

 document.querySelector('.imagemodal').addEventListener('click', function(e){  
  document.querySelector('.imagemodal').style.display = "none";
  })

  </script>
</body>
</html>