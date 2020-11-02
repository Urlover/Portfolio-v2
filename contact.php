<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Header file -->
    <?php include("head.php"); ?>
    <title>Jonah Louis | Contact</title>
</head>
<body>
    <div class="page-wrapper">
    <!-- Navigation bar -->
    <?php include("nav.php"); ?>
    <!-- Social icon bar (Static left side) -->
    <?php include("social.php"); ?>

    <!-- Validates the contact form -->
    <?php include("contactVerify.php"); validate() ?>

    <div class="container-sm" id="contact-content">
        <div class="c-intro">
            <h1 class="uni-mainHeader">Contact Me</h1>
        </div>
        <div class="contact-form-box">
            <form method="post">
                <div class="row">
                    <div class="col-md-6 form-input">
                        <input type="text" id="fName" name="firstName" placeholder="<?php echo $firstName_ph; ?>" class="<?php echo $fInput; ?>">
                    </div>
                    <div class="col-md-6 form-input">
                        <input type="text" id="lName" name="lastName" placeholder="<?php echo $lastName_ph; ?>" class="<?php echo $lInput; ?>">
                    </div>
                    <div class="col-sm-12 form-input">
                        <input type="text" id="email" name="email" placeholder="<?php echo $email_ph; ?>" class="<?php echo $eInput; ?>">
                    </div>
                    <div class="col-sm-12 form-input">
                        <input type="text" id="subject" name="subject" placeholder="<?php echo $subject_ph; ?>" class="<?php echo $sInput; ?>">
                    </div>  
                    <div class="col-sm-12 form-input">
                        <textarea id="message" name="message" placeholder="<?php echo $message_ph; ?>" class="<?php echo $mInput; ?>"></textarea>
                    </div>
                    <div class="col-sm-12 form-input">
                        <input type="submit" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
  
    <!-- Footer -->
    <?php include("footer.php"); ?>
    </div> <!-- End of page-wrapper -->

</body>
</html>