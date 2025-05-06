<?php
require_once('_inc/Classes/Contact.php');
require_once('_inc/Classes/Database.php');

$db = new Database();
$contact = new Contact($db);
$contacts = $contact->getAllContacts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Správa kontaktov</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <?php if(empty($contacts)): ?>
        <p>Žiadne kontakty neobli nájdené</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Text</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contacts as $row): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['id']) ?></td>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['subject']) ?></td>
                        <td><?= nl2br(htmlspecialchars($row['message'])) ?></td>
                        <td><?= htmlspecialchars($row['created_at']) ?></td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>
</body>
</html>