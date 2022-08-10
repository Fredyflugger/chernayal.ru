<?php
$mailingSuccess = $mailingErr = $name = $email = $referral = $textarea = "";
$chr_ru_en = "A-Za-zА-Яа-яЁё\s-";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["name"])) {
        $name = test_input($_POST["name"]);
    }
    if (!empty($_POST["email"])) {
        $email = test_input($_POST["email"]);    }
    if (!empty($_POST["referral"])) {
        $referral = test_input($_POST["referral"]);
    }
    if (!empty($_POST["textarea"])) {
        $textarea = test_input($_POST["textarea"]);
    }

    if ($name != "" && $email != "") {
        $to = "anomail3000@gmail.com"; // this is your Email address
        $from = $email; // this is the sender's Email address
        $subject = "Письмо отправлено через форму на сайте chernayal.ru";
//        $subject2 = "Copy of your form submission";
        $message = "Письмо от - " . $name . ":" . "\n\n" . $textarea . "\n\n" . "Как вы нашли меня: " . $referral;
//        $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
    //    mail($to,$subject,$message,$headers);
    //    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        if (mail($to, $subject, $message, $headers) === true) {
            $mailingSuccess = "Письмо успешно отправлено!";
            $email = $name = $referral = $textarea = "";
        } else {
            $mailingErr = "Произошла ошибка при отправке письма";
        }
            // You can also use header('Location: thank_you.php'); to redirect to another page.
    } else {
        $mailingErr = "Произошла ошибка при отправке письма";
    }
    $response = array("error" => $mailingErr, "success" => $mailingSuccess);
    echo json_encode($response);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
