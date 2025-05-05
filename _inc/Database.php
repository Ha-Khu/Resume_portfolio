<?php 
class Database {
    public function __construct() {
        $host = 'localhost';
        $db = 'portfolio_db';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        try {
            $this->pdo = new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function getPdo() {
        return $this->pdo;
    }

}
//TEST:
$db = new Database();
echo "<p>JJJJJJJ</p>";
var_dump($db->getPdo());
echo "<p>FUNGUJE AJ TOTO</p>";
?>