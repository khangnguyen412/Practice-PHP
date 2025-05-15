<?php
class connectdb {

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "shoppingcart";
    private $conn = null;

    //kết nối database
    public function connect() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully" . "<br>";
            return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    //thêm dữ liệu vào database
    public function insertData($sql, $arr = array()) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($arr);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    //xóa dữ liệu trong database
    public function deleteData($sql, $arr = array()) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($arr);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    
    //cập nhật dữ liệu trong database
    public function updateData($sql, $arr = array()) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($arr);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function editData($sql, $arr = array()) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($arr);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    //lấy dữ liệu được chọn trong database
    public function getData($sql, $arr = array()) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($arr);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    //lấy tất cả dữ liệu trong database
    public function getAllData($sql) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    //ngắt kết nối với data
    public function disconnect() {
        $this->conn = null;
        // echo "DisConnected successfully". "<br>";
    }

}
