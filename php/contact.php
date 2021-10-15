<?php
       
       
       
       
       
       $message_sent = false;
        if(isset($_POST['email']) && $_POST['email'] != ''){


        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];




        $to = "rcipulis@gmail.com";
        $body = "";


        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Message: ".$message. "\r\n";

        mail($to,$messageSubject,$body);

        $message_sent = true;
}
else {
    $message_sent = false;
}


    }



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Gala-darbs/css/contact.css">
    <title>Contact page</title>
</head>
<body>

<?php

if($message_sent):

?>

<h3>Thanks, check your mail</h3>

<?php

else:

?>
    <div class="top-nav">  
        <div class="container">  <!--we need to have an outer container for the items inside -->

            <a href="/Gala-darbs/html/index.html"><img src="/Gala-darbs/images/MotoJums.svg"alt="Brand Logo"></a> 

            <img id="mobile-cta" class="mobile-menu" src="/Gala-darbs/images/hamburger-menu.svg" alt="Open navigation">
        
            <nav>
                <img id="mobile-exit" class="mobile-menu-exit" src="/Gala-darbs/images/Group (1).svg" alt="Close navigation">

                <ul class="primary-nav">
                    <li><a href="/Gala-darbs/html/index.html">Home</a></li>
                    <li><a href="/Gala-darbs/html/blog.html">Blog</a></li>
                    <li><a href="/Gala-darbs/html/contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <section class="contact-section">

        <div class="container-contact">
            
            <div class="contact-left">

                <h2>Contact us</h2>

                <form action="contact.php" method="POST">

                    <label for="name">Name</label>
                    <input type="text" id="name" name="name">
                    
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email">

                    <label for="subject">Subject</label>
                    <input type="subject" id="subject" name="subject">

                    <label for="message">Message</label>
                    <textarea placeholder="Say hi" name="message" id="message" cols="30" rows="10"></textarea>

                    <input type="submit" class="send-message-cta" value="Send Message">
                </form>

            </div>

            <div class="contact-right">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2174.785867251214!2d24.10080081544791!3d56.969600404957006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfbfefa2464f%3A0xe4c1597d81636127!2sPiena%20iela%205%2C%20Zieme%C4%BCu%20rajons%2C%20R%C4%ABga%2C%20LV-1045!5e0!3m2!1slv!2slv!4v1617716682826!5m2!1slv!2slv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>


        </div>
    </section>

    <section class="about">

    <h2>Who are we?</h2>
        <ul>

            <li>A group of friends who are passionate about motorcycles</li>
            <li>Get in touch and let's go for a ride!</li>


        </ul>

        <img src="/Gala-darbs/images/bradley-dunn-i8qs7bfTB0M-unsplash.jpg" alt="Contact-bike">



    </section>
    
    <footer>

        <p>2021 © All rights reserved. SIA Moto Jums, Reg. No. 40143543903643, Piena 6, Rīga, LV-1013, Latvija</p>


        <div class="footer-navigation">
            <ul class="footer-nav">
                <li><a href="/Gala-darbs/html/index.html">Home</a></li>
                <li><a href="/Gala-darbs/html/blog.html">Blog</a></li>
                <li><a href="/Gala-darbs/html/contact.html">Contact</a></li>
            </ul>
        </div>

    </footer>
    
<?php
endif;
?>

</body>
</html>