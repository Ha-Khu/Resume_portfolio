<?php
require_once('_inc/Classes/Contact.php');
require_once('_inc/Classes/Database.php');

$db = new Database();
$contact = new Contact($db);

if(!isset($_GET['id'])) {
    header('Location: admin.php');
    exit;
}

$id = (int)$_GET['id'];
$data = $contact->getById($id);

if(!$data) {
    echo "Kontakt s ID $id nebol nájdený.";
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if($contact->update($id, $name, $email, $subject, $message)) {
        header('Location: admin.php?update=1');
        exit;
    } else {
        echo "Nepodarilo sa aktualizovať kontakt.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uprava kontaktu</title>
</head>
<body>
    <h1>Upraviť kontakt</h1>
    <form method="POST">
        <label for="">Meno:</label><br>
        <input type="text" name="name" value="<?= htmlspecialchars($data['name'])?>" required><br><br>

        <label for="">Predmet:</label><br>
        <input type="text" name="subject" value="<?= htmlspecialchars($data['subject'])?>" required><br><br>

        <label for="">Email:</label><br>
        <input type="email" name="email" value="<?= htmlspecialchars($data['email'])?>" required><br><br>

        <label for="">Správa:</label><br>
        <textarea name="message" required><?= htmlspecialchars($data['message'])?></textarea><br><br>

        <button type="submit">Uložiť zmeny</button>
        <a href="admin.php">Späť</a>
    </form>
    
</body>
</html>