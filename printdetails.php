<?php
namespace Dompdf;
require 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
ob_start();
//Getting image
$png = file_get_contents('http://localhost/HAVEN-EXPERIENCE-LODGING-MAIN/images/haven_logo3.png');
$pngbase64 = base64_encode($png);




$myfile = fopen("".$_GET['filename']."", "w");
$txt = '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">   
    <title>Room Details</title>
    <style>
    .body {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 4em;
        position: relative;
        font-family: "Sofia Sans", sans-serif;
    }

    .naira{
        color: red;
        font-family: DejaVu Sans !important;
    }
    

    .border {
        height: 100%;
        width: 100%;
        position: relative;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    .customer {
        padding-left: 1em;
    }

    .logo {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1em;
    }

    .logo img{
        width: 50px; 
        height: 50px;
    }
    .div {
        display: flex;
        gap: 1em;
    }

    .list ul li {
        list-style-type: none;
        padding-bottom: 1em;
        font-weight: bold;
    }

    .heading {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    </style>
</head>

<body class="body">
    <div class="border">
        <div class="logo">
        <img src="data:image;base64,<?='.$pngbase64.';?>"/>
<h1>HAVEN EXPERIENCE LODGING</h1>
</div>
<div class="customer">
    <h4>Dear '.$_GET['name'].'</h4>
    <p>Please check your details:</p>
</div>
<div class="list">
    <ul>
        <li>Room: '.$_GET['room'].'</li>
        <li>Arrival Date: '.$_GET['arrival'].'</li>
        <li>Departure: '.$_GET['departure'].'</li>
        <li>Nights: '.$_GET['nights'].'</li> 
        <li>Guests: '.$_GET['guests'].'</li>
        <li>Grand Total: £'.$_GET['grandtotal'].'</li>
    </ul>
</div>


<div class="heading">
    <p>Regards</p>
    <h2 style="
                    text-transform: capitalize;
                    justify-self: left;
                    padding-right: 74%;
                    font-size: 18px;
                  ">
        <b>HAVEN EXPERIENCE LODGING</b>
    </h2>
</div>
</div>
</body>


</html>';


// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($txt);


//Render the HTML as PDF
$dompdf->render();

// // Output the generated PDF to Browser
$output = $dompdf->output();
//$txt2 = $dompdf->stream($_GET['filename'], array("Attachment" => 0));
// $html2pdf = new Html2Pdf();
// $html2pdf->writeHTML($txt);
// $txt2 = $html2pdf->output();

file_put_contents($_GET['filename'], $output);
rename("".$_GET['filename']."","userdocuments/".$_GET['filename']."");
fclose($myfile);
$file = $_GET['filename'];
 header("Location: guestdetails.php?u=".$_GET['u']."&unique=".$_GET['unique']."&newdoc=present");

ob_end_flush();