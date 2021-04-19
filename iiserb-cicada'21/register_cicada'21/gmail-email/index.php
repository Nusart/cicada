<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

// Get email
$email_temp = $_POST['email'];
//$stemail = "$email";
//echo $stemail."<br>";
//echo "'$email'";

$domain = substr($email_temp, strpos($email_temp, '@') + 1); //extract domain name
if ($domain == "gmail.com" || $domain == "iiserb.ac.in" || $domain == "yahoo.in" || $domain == "yahoo.com" || $domain == "hotmail.com" || $domain == "protonmail.com")
{
    $email = $email_temp;
}else
{
    die ("Use valid domain email.");
}

// Get Timestamp
date_default_timezone_set('Asia/Kolkata');
$timestamp = date('d/m/Y h:i:s a', time());
//echo $timestamp."<br>";
//echo "'$email'".":"."'$timestamp'"."<br>";

// Check if the same email exists in entrybase
$repeatCheck = file_get_contents('rvwewqcw32453vertc354.json');
$jsonRead = json_decode($repeatCheck, true); // decode the JSON into an associative array
//echo count($jsonRead)."<br>";
for ($i=0; $i<count($jsonRead); $i++)
{
    $array_element = $jsonRead[$i];
    //echo $array_element."<br>";
    $single_email = strtok($array_element, ':');
    //echo $single_email."<br>";
    if (strcmp($single_email,$email)==0)
    {
        die ("Use your previous credentials to login. If you think this is by mistake than login with a different email to proceed.");
    }
//    else{
//        echo "You are good to go.";
//    }
    //echo $single_email."<br>";
    //strcmp($email)
}
//echo $jsonRead[1]."<br>";
//if $jsonRead[i] == $email{
//    echo "Check previous mail sent by us to find credentials."
//}

// read the file if present
$handle = @fopen("rvwewqcw32453vertc354.json", 'r+');
//echo $handle."<br>";

// create the file if needed
if ($handle === null)
{
    $handle = fopen("rvwewqcw32453vertc354.json", 'w+');
}

if ($handle)
{
    // seek to the end
    fseek($handle, 0, SEEK_END);

    // are we at the end of is the file empty
    if (ftell($handle) > 0)
    {
        // move back a byte
        fseek($handle, -1, SEEK_END);

        // add the trailing comma
        fwrite($handle, ',', 1);

        // add the new json string
        fwrite($handle, json_encode($email.":".$timestamp) . ']');
    }
    else
    {
        // write the first event inside an array
        fwrite($handle, json_encode(array($email)));
    }

        // close the handle on the file
        fclose($handle);
}

// Read counter variable from txt file
//$ctr = 0;
//$myfile = fopen("23243v5354546547y6n5n87nsvrw453hg.txt", "r");
//$ctr1 = fgetc($myfile);
$ctr1 = file_get_contents("23243v5354546547y6n5n87nsvrw453hg.txt");
$ctr = (int)$ctr1;
//echo "Initial counter: " . $ctr . "<br>";
//fclose($myfile);
//echo (int)$ctr;

// Increase counter value
//session_start();
//$_SESSION['number'] = 10;
if(isset($_POST['email'])){
    $ctr += 1;
    //echo $ctr."<br>";
   //$_SESSION['number'] += 1;
}
$myfile = fopen("23243v5354546547y6n5n87nsvrw453hg.txt", "w+");
fwrite($myfile, $ctr);
fclose($myfile);
//$counter = $_SESSION['number'];
//echo $counter;
//echo "Updated counter: " . $ctr . "<br>";


$str = file_get_contents('alwekjtweivtioewt34287984fijioew.json');
$json = json_decode($str, true); // decode the JSON into an associative array
//echo '<pre>' . print_r($json, true) . '</pre>';
$username = $json['' . $ctr]['uname'];
echo $username . '<br>';
$password = $json['' . $ctr]['passwd'];
echo $password . '<br><br>';
echo 'Check out the guidelines before playing: <a href="https://students.iiserb.ac.in/cicada\'21/guidelines.pdf">Guidelines</a><br><br>';
echo 'Use the above credentials and login to the following page:  <a href="https://students.iiserb.ac.in/cicada\'21/">Internet Scavenger Hunt</a><br>';
echo '<h3>You might want to save these credentials alongwith the links to use it in future.</h3>';

try {
    // Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'cicada.iiserb3301@gmail.com'; // YOUR gmail email
    $mail->Password = 'asdf;lkj567%^&'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('cicada.iiserb3301@gmail.com', 'CICADA 3301 IISERB');
    $mail->addAddress(''.$email, 'USER');
    //$mail->addReplyTo('', ''); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "CICADA Credentials";
    $mail->Body = 'Username: ' . $username . '<br>' . 'Password: ' . $password . '<br>' . 'Check out the guidelines before playing: https://students.iiserb.ac.in/cicada\'21/guidelines.pdf' . '<br>' . 'Use the above credentials and login to the following page:  https://students.iiserb.ac.in/cicada\'21/';
    //$mail->Body = 'Username: ;Password: ;Use the above credentials and login to the following page:  https://students.iiserb.ac.in/cicada\'21/';
    $mail->AltBody = 'Credentials for CICADA IISERB.';

    $mail->send();
    //echo "Check your email to proceed further.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}



?>
