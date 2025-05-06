<?php
require_once('_inc/Classes/Contact.php');
require_once('_inc/Classes/Database.php');

$database = new Database();
$contact = new Contact($database);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if($contact->create($name, $email, $subject, $message)) {
        header('Location: thank-you.php');
        exit;
    } else {
        header('Location: thank-you.php?error=1');
        exit;
    }

} else {
    header('Location: thank-you.php?error=2');
    exit;
}
?>