<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
   </head>
<body>
    
<!-- navbar section starts  -->

<nav class="navbar">
    <a href="index.html"> <i class="fas fa-home"></i> <span>home</span> </a>
    <a href="about.html"> <i class="fas fa-user"></i> <span>about</span> </a>
    <a href="portfolio.html"> <i class="fas fa-briefcase"></i> <span>portfolio</span> </a>
    <a href="blogs.html"> <i class="fas fa-blog"></i> <span>Social Media</span> </a>
    <a href="contact.php"> <i class="fas fa-address-book"></i> <span>contact</span> </a>
</nav>

<!-- navbar section ends -->

<!-- contact section starts  -->

<section class="contact">

<h1 class="heading"> contact <span>me</span> </h1>

<div class="row">

    <div class="info-container">

        <h1>get in touch</h1>

        <p style="text-align: justify;">Hello users, I am Vishal Nimbarte from Yavatmal. Currently, I am working at DRGMC Amravati as a web developer, where I am responsible for handling the campus website.Also, I am a freelancer. If you need my services, feel free to contact me.</p>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-map"></i>
                <div class="info">
                    <h3>address :</h3>
                    <p>At.Post Kotha(veni) tq.kalamb dist.yavatmal</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <div class="info">
                    <h3>email :</h3>
                    <p>vishalnimbarte03@gmail.com</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-phone"></i>
                <div class="info">
                    <h3>number :</h3>
                    <p>+91 9284495360</p>
                </div>
            </div>

        </div>

        <div class="share">
            <a href="https://www.facebook.com/people/Vishal-Nimbarte/pfbid0eaABAb1LoLjn9TvX4yszcLhnHGsGmRbbqzSE7xEkkV96Ei4mv5p2axKLHBbjVhzel/" target="_blank" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/vishal_nimbarte_97/" class="fab fa-instagram" target="_blank"></a>
            <a href="https://www.linkedin.com/in/vishal-nimbarte-34541b207/" class="fab fa-linkedin" target="_blank"></a>
        </div>

    </div>

    <form action="" method="post">

        <div class="inputBox">
            <input class="yourName" name="name" type="text" placeholder="your name" required>
            <input class="yourNumber" name="number" type="number" placeholder="your number" required>
        </div>

        <div class="inputBox">
            <input class="yourEmail" type="email" name="email" placeholder="your email" required>
            <input class="yourSubject" type="text" name="subject" placeholder="your subject" required>
        </div>

        <textarea class="yourMessege" name="msg" placeholder="your message" id="" cols="30" rows="10" required></textarea>

        <input type="submit" name="btnsub" value="send message" class="btn">

    </form>

</div>

</section>

<!-- contact section ends -->

</body>
</html>

<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['btnsub']))
{
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'computernetwork9705@gmail.com';                     //SMTP username
    $mail->Password   = 'hxbgiirlqkpzwrwg';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom("computernetwork9705@gmail.com", "VN97WEB");
    $mail->addAddress("vishalnimbarte03@gmail.com", "$name");     //Add a recipient
    // $mail->addAddress("$email"); 
  
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "$subject";
    $mail->Body    = "Name :- $name <br> Email :- $email <br> Number :- $number <br> Subject :- $subject <br> Message :- $msg";
    
    $mail->send();
    echo "<script>

    alert('Message has been Sent Successfully..!');
  
  </script>
  ";
} catch (Exception $e) {
    echo  "<script>

    alert('Message couldn't been Sent');
  
  </script>
  ";
}


}

?>