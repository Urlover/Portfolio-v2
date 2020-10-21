<?php
/* Form validation for Contact.php */
    /* Variable initialization & declaration */
    // Constants 
    define ("INPUT_DEFAULT", "c-input-d"); define ("INPUT_ERROR", "c-input-e");
    // User input variables
    $firstName = ""; $lastName = ""; $subject = ""; $message = ""; $email = "";
    // Variables for the form placeholders
    $firstName_ph = "First Name*"; $lastName_ph = "Last Name*"; $email_ph = "Email*"; $subject_ph = "Subject*"; $message_ph = "Message*";
    // Input Ids - Either INPUT_DEFAULT or INPUT_ERROR
    $fInput = INPUT_DEFAULT; $lInput = INPUT_DEFAULT; $eInput = INPUT_DEFAULT; $sInput = INPUT_DEFAULT; $mInput = INPUT_DEFAULT;
    // Used to verify if the user entered *valid inputs*
    $fValid = false;  $lValid = false;  $eValid = false;  $sValid = false;  $mValid = false;

    /*
    * Function validates if the user entered correct input 
    */
    function validate() {
        // If the user presses on the "Submit" button
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Using global variables 
            global $firstName, $lastName, $subject, $message, $email;
            global $firstName_ph, $lastName_ph, $subject_ph, $message_ph, $email_ph;
            global $fValid , $lValid, $eValid, $sValid, $mValid;
            global $fInput, $lInput, $eInput, $sInput, $mInput;

            /* Variable initialization & declaration */
            // User information
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $subject = $_POST["subject"];
            $message = wordwrap($_POST["message"], 70);
            $email = $_POST["email"];
            
            // FIRST NAME
            if (empty($firstName)) {
                $firstName_ph = "First Name is required*";  $fValid = false; $fInput = INPUT_ERROR;
            } else if (strlen($firstName) > 50) {
                $firstName_ph = "First Name too long*";  $fValid = false; $fInput = INPUT_ERROR;
            } else {
                $firstName_ph = "First Name*"; $fValid = true; $fInput = INPUT_DEFAULT;
            }
            // LAST NAME
            if (empty($lastName)) {
                $lastName_ph = "Last Name is required*"; $lValid = false; $lInput = INPUT_ERROR;
            } else if (strlen($lastName) > 50) {
                $lastName_ph = "Last Name too long*"; $lValid = false; $lInput = INPUT_ERROR;
            } else {
                $lastName_ph = "Last Name*"; $lValid = true; $lInput = INPUT_DEFAULT;
            }
            // EMAIl 
            if (empty($email)) {
                $email_ph = "Email is required*"; $eValid = false; $eInput = INPUT_ERROR;
            } else if (strlen($subject) > 50) {
                $email_ph = "Email too long*"; $eValid = false; $eInput = INPUT_ERROR;
            } else {
                $email_ph = "Email*"; $eValid = true; $eInput = INPUT_DEFAULT;
            }
            // SUBJECT 
            if (empty($subject)) {
                $subject_ph = "Subject is required*"; $sValid = false;$sInput = INPUT_ERROR;
            } else if (strlen($subject) > 50) {
                $subject_ph = "Subject has a 50 character limit*"; $sValid = false;$sInput = INPUT_ERROR;
            } else {
                $subject_ph = "Subject*"; $sValid = true; $sInput = INPUT_DEFAULT;
            }
            // MESSAGE
            if (empty($message)) {
                $message_ph = "Message is required*"; $mValid = false; $mInput = INPUT_ERROR;
            } else if (strlen($message) > 200) {
                $message_ph = "Message has a 200 character limit*"; $mValid = false; $mInput = INPUT_ERROR;
            } else {
                $message_ph = "Message*"; $mValid = true; $mInput = INPUT_DEFAULT;
            }
            // If all inputs are valid 
            if ($fValid == true &&  $lValid == true && $eValid == true && $sValid == true && $mValid == true) {
                sendMail(); // call function to send mail
            }
        }
    }

    /*
    * Send mail to specified information according to contact form
    */
    function sendMail() {
        // Using global variables 
        global $firstName, $lastName, $subject, $message, $email;
        
        /* Formatted information */
        $mailTo = "jonah_louis@outlook.com";        // My email (to mail to)
        $fSubject = $subject . ": jonahlouis.ca form submission";       // subject for my message
        $fMessage = '<html><body style="text-align:center;">';
        $fMessage .= '<h1 style="font-weight:100;">Form submission from jonahlouis.ca</h1>';
        $fMessage .= '<table style="border: 4px solid #748ffc;table-layout:fixed;width: 600px;" cellpadding="10">';
        $fMessage .=
            '<tr>
                <td><b>From</b></td>
                <td>'.$email.'</td>
            </tr>

            <tr>
                <td><b>First name</b></td>
                <td>'.$firstName.'</td>
            </tr>

            <tr>
                <td><b>Last name</b></td>
                <td>'.$lastName.'</td>
            </tr>

            <tr>
                <td><b>Message</b></td>
                <td>'.$message.'</td>
            </tr>
            </table>';
            $fMessage .= "</body></html>";
                
            $headers = "MIME-Version: 1.0" . "\r\n"; 
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 

            // Send emails
            mail($mailTo, $fSubject, $fMessage, $headers);
            // Change to message sent page
            header("Location: contactSubmit.php");
    }
?>