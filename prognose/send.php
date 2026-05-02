<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['Name'] ?? '';
    $email = $_POST['Email'] ?? '';
    $produkt = $_POST['Produkt'] ?? '';
    $geburtsdatum = $_POST['Geburtsdatum'] ?? '';
    $geburtsort = $_POST['Geburtsort'] ?? '';
    $geburtszeit = $_POST['Geburtszeit'] ?? '';
    $nachricht = $_POST['Nachricht'] ?? '';

    $to = "maria.mazur@outlook.com"; // CHANGE THIS

    $subject = "Neue Anfrage";

    $message = "
Name: $name
Email: $email
Produkt: $produkt
Geburtsdatum: $geburtsdatum
Geburtsort: $geburtsort
Geburtszeit: $geburtszeit

Nachricht:
$nachricht
";

$headers = "From: info@dianagalkin-astro.de\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    mail($to, $subject, $message, $headers);
 
    header("Location: danke.html");
    exit();
}
?>