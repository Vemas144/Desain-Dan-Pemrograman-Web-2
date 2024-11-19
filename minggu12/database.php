<?php
class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "prakwebdb2";
    public $conn;

    public function __construct()
    {
        // Membuat koneksi ke database
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Mengecek apakah koneksi gagal
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
?>