<?php
require_once __DIR__ . '/vendor/autoload.php'; 


$from = $_POST['from'];
$body = $_POST['body'];


$apiKey = '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';
$sendgrid = new \SendGrid($apiKey);


$from = new \SendGrid\Mail\From($from);
$to = new \SendGrid\Mail\To('gonzalez.erick.cb37@gmail.com');
$subject = new \SendGrid\Mail\Subject('Petición');
$content = new \SendGrid\Mail\HtmlContent($body);
$email = new \SendGrid\Mail\Mail($from, $to, $subject, $content);

try {
    $response = $sendgrid->send($email);
    echo "Correo electrónico enviado con éxito. Código de respuesta: " . $response->statusCode();
} catch (Exception $e) {
    echo "Error al enviar el correo electrónico: " . $e->getMessage();
}
?>