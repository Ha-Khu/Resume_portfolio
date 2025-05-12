<?php
require_once('_inc/Classes/Contact.php');
require_once('_inc/Classes/Database.php');

$db = new Database();
$contact = new Contact($db);

$id = $_GET['id'] ?? null;

if($id && is_numeric($id)) {
    if($contact->delete($id)) {
        header("Location: admin.php?deleted=1");
        exit;
    } else {
        header("Location: admin.php?error=1");
        exit;
    }
} else {
    header("Location: admin.php");
    exit;
}
?>