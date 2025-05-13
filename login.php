<?php
session_start();

$correctUsername = 'admin';
$correctPasswordHash = password_hash('tajne', PASSWORD_DEFAULT);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if($username === $correctUsername && password_verify($password, $correctPasswordHash)) {
        $_SESSION['logged_in'] = true;
        header('Location: admin.php');
        exit;
    } else {
        $error = "Nesprávne meno alebo heslo";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prihlásenie</title>
</head>
<body>
    <h1>Prihlásennie</h1>
    <?php if (isset($error)): ?>
        <p style="color:red"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>Meno:</label><br>
        <input type="text" name="username" required> <br><br>

        <label>Heslo:</label><br>
        <input type="password" name="password" required> <br><br>

        <button type="submit">Prihlásiť sa</button>
    </form>   
</body>
</html>