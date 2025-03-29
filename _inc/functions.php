<?php
    function nacitanieFormulara() {
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];

            return [
                "name" => $name,
                "email" => $email,
                "subject" => $subject,
                "message" => $message,
            ];
        }
        return null;
    }
?>