<?php
class Contact {

    public function __construct(Database $database) {
        $this->pdo = $database->getPdo();
    }

    public function create($name, $email, $subject, $message) {
        $stmt = $this->pdo->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$name, $email, $subject, $message]); 
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM contacts ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM contacts WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $name, $email, $subject, $message) {
        $stmt = $this->db->prepare("UPDATE contacts SET name = ?, email = ?, subject = ?, message = ? WHERE id = ?");
        return $stmt->execute([$name, $email, $subject, $message, $id]);
    }

    public function delete($id){
        $stmt = $this->db->prepare("DELETE FROM contacts WHERE id = ?");
        return $stmt->execute([id]);
    }

    public function getAllContacts() {
        $sql = "SELECT * FROM contacts ORDER BY created_at DESC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

}
?>