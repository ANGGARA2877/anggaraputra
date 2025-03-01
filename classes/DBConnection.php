<?php
if (!defined('DB_SERVER')) {
    require_once("../initialize.php");
}

class DBConnection {
    private $host = "localhost";
    private $username = "root";
    private $password = ""; // Isi dengan password jika ada
    private $database = "DB_Anggara";

    public $conn;

    public function __construct() {
        if (!isset($this->conn)) {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

            if ($this->conn->connect_error) {
                die('Cannot connect to database server: ' . $this->conn->connect_error);
            }
        }
    }

    public function __destruct() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
?>
