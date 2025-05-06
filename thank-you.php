<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ďakujem</title>
</head>
<body>
    <h1>Ďakujem za správu!</h1>
    <p>Vaša správa bola úspešne odoslaná <br></p>
    <p>čoskoro sa Vám ozvem</p>

    <?php
        if(isset($_GET['error'])) {
            echo "<p>Nastala chyba pri odosielaní správy skúste to znova.</p>";
        }
    ?>
</body>
</html>