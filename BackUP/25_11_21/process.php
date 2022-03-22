<?php

//      CONNECT TO DATABASE     ///////////////////
include_once('Connection.php');

//      GATHER VARIABLES        ///////////////////
$fullName = $_POST['name'];
$expName = explode(" ", $fullName);
$email = $_POST['email'];
$question = $_POST['query'];
$info = 'info@littlewisemonkey.com';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

//      DRAFT REPLY EMAIL
$queryThanks = <<<LWM
<html>
<head>
    <title>Little Wise Monkey Query</title>
    <style type="text/css">
        body {
            font-size: 16pt;
        }
        div.header {
            background-color: #024522;
            width: 400px;
            text-align: center;
            float: centre;
            color: #ddd;
            padding: 18px;
            font-size: 25px;
            letter-spacing: 10px;
        }
        div.footer {
            color: #024522;
        }
        pre {
            color: #444;
            font-family: 'Eurostile';
            font-size: 14pt;
        }
        hr {
            font-size: 12pt;
            color: #024522;
        }
    </style>
</head>
<body>
    <div class="header">Little Wise Monkey</div>
    <br><br>
    <p>Hi, $expName[0]</p>
    <p>Thanks for getting in touch.</p>
    <p>Your query :</p>
    <p><pre><i>"$question"</i></pre></p>
    <p>has been recieved and a team member will get back to you as soon as possible.</p><br>
    <p>Yours</p>
    <p>Little Wise Monkey.</p>
    <br><br><hr>
    <div class="footer">
    Little Wise Monkey<br>
    www.littlewisemonkey.com<br>
    info@littlewisemonkey.com<br>
    0785 848 6624
    </div>
</body>
</html>
LWM;

// More headers
$headers .= 'From: <info@littlewisemonkey.com>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";
$custHeader = 'From: <' . $email . '>';

mail($email, 'Little Wise Monkey Query', $queryThanks, $headers);
mail('info@littlewisemonkey.com', 'New Query', $question, $custHeader);

// //      INSERT FORM DATA INTO DATABASE      ////////
// $query = "INSERT INTO `Queries` 
//                     (`FullName`, `Email`, `Question`) 
//                 VALUES 
//                     ('$fullName', '$email', '$question');";

// mysqli_query($db, $query) or die(mysqli_error($db));


//      RELOCATE BACK TO HOME PAGE      //////////////
header('location: http://www.dangeroussubversive.com');
