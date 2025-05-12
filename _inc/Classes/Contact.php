<?php
class Contact {

    public function __construct(Database $database) {
        $this->pdo = $database->getPdo();
    }

    public function create($name, $email, $subject, $message) {
        $stmt = $this->pdo->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$name, $email, $subject, $message]); 
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM contacts WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $name, $email, $subject, $message) {
        $stmt = $this->pdo->prepare("UPDATE contacts SET name = ?, email = ?, subject = ?, message = ? WHERE id = ?");
        return $stmt->execute([$name, $email, $subject, $message, $id]);
    }

    public function delete($id){
        $stmt = $this->pdo->prepare("DELETE FROM contacts WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function getAllContacts() {
        $sql = "SELECT * FROM contacts ORDER BY created_at DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

}
?>