<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/J_logo2.png"/>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Boostrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- End of boostrap -->
    <script src="https://kit.fontawesome.com/b510426974.js" crossorigin="anonymous"></script>
    <script src="js/myScript.js"></script>
    <title>Jonah Louis | Contact</title>
</head>
<body>
    <div class="page-wrapper">
    <!-- Navigation bar -->
    <?php include("nav.php"); ?>
    <!-- Social icon bar (Static left side) -->
    <?php include("social.php"); ?>

    <div class="container-sm" id="contact-content">
        <div class="c-intro">
            <h1 class="uni-mainHeader">Contact Me</h1>
        </div>
        <div class="contact-form-box">
            <form method="post">
                <div class="row">
                    <div class="col-md-6 form-input">
                        <input type="text" id="fName" name="firstName" placeholder="First Name">
                    </div>
                    <div class="col-md-6 form-input">
                        <input type="text" id="lName" name="lastName" placeholder="Last Name">
                    </div>
                    <div class="col-sm-12 form-input">
                        <input type="text" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="col-sm-12 form-input">
                        <input type="text" id="subject" name="subject" placeholder="Subject">
                    </div>  
                    <div class="col-sm-12 form-input">
                        <textarea id="message" name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="col-sm-12 form-input">
                        <input type="submit" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php 
        // Used to send email to jonah_louis@outlook.com
         if ( !empty($_POST) ) {
            /* Varible initialization & declaration */
            // My email
            $myEmail = "";

            // User information
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $subject = $_POST["subject"];
            $message = wordwrap($_POST["message"], 70);
            $email = $_POST["email"];

            // Formatted information
            $fSubject = $subject . ": jonahlouis.ca form submission";   // subject for my message
            $fSubject2 = "Form submitted from jonahlouis.ca";           // subject for sender
            $fMessage = "First Name: " . $firstName . "\nLast Name: " . $lastName . "\nMessage:\n" . $message;    // message to me
            $fMessage2 = "Hi " . $firstName .",\n\nThis is a confirmation email for your form submission on jonahlouis.ca. The following message was sent:\n\n"
            ."First Name:" . $firstName ."\nLast Name:" . $lastName ."\nMessage:\n" . $message;    // message to sender (copy)
            $headers = "From: " .$email;
            $headers2 = "From: " .$myEmail;

            // Send emails
            mail($myEmail, $fSubject, $fMessage, $headers);
            mail($email, $fSubject2, $fMessage2, $headers2);

            echo "Success!";
        }
    ?>
        
    <!-- Footer -->
    <?php //include("footer.php"); ?>
    </div> <!-- End of page-wrapper -->

</body>
</html>