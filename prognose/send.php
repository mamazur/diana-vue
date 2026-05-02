<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

// Collect form data
$name          = $_POST['Name'] ?? '';
$email         = $_POST['Email'] ?? '';
$produkt       = $_POST['Produkt'] ?? '';
$geburtsdatum  = $_POST['Geburtsdatum'] ?? '';
$geburtsort    = $_POST['Geburtsort'] ?? '';
$geburtszeit   = $_POST['Geburtszeit'] ?? '';
$nachricht     = $_POST['Nachricht'] ?? '';

$mail = new PHPMailer(true);

try {
    // SMTP config (adjust if needed)
    $mail->isSMTP();
    $mail->Host       = 'smtp.1blu.de';
    $mail->SMTPAuth   = true;
    $mail->Username   =  
    $mail->Password   =  
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Sender & receiver
    $mail->setFrom('dianagalkin.astrolog@gmail.com', 'Website Kontakt');
    $mail->addAddress('dianagalkin.astrolog@gmail.com');

    // Reply-To = user email
    if (!empty($email)) {
        $mail->addReplyTo($email, $name);
    }

    // Email content
    $mail->Subject = 'Neue Anfrage von der Website';

    $mail->Body =
        "Name: $name\n" .
        "Email: $email\n" .
        "Produkt: $produkt\n\n" .
        "Geburtsdatum: $geburtsdatum\n" .
        "Geburtsort: $geburtsort\n" .
        "Geburtszeit: $geburtszeit\n\n" .
        "Nachricht:\n$nachricht";

    $mail->send();

    // Redirect after success
    header("Location: danke.html");
    exit();

} catch (Exception $e) {
    echo "Fehler beim Senden: " . $mail->ErrorInfo;
}