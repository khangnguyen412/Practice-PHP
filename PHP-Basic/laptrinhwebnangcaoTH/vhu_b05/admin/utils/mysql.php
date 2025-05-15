<?php
    class condb{
        private $servername = "localhost";
        private $usernamedb = "root";
        private $passworddb = "";
        private $dbname = "doancuoikybai3";
        private $conn = null;
        public function condata(){
            try {
                $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->usernamedb, $this->passworddb);
                    // set the PDO error mode to exception
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully";
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }

        public function getdata($sql, $arr = array()){
            try {
                $stmt = $this->conn->prepare($sql);
                $stmt->execute($arr);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch(PDOException $e) {
                echo  $sql. "<br>". $e->getMessage();
            }
        }
        public function getalldata($sql){
            try {
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch(PDOException $e) {
                echo  $sql. "<br>". $e->getMessage();
            }
        }
        public function insertData($sql, $arr = array()) {
            try {
                $stmt = $this->conn->prepare($sql);
                $stmt->execute($arr);
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        }

        public function disconnet(){
            $this->conn = null;
            echo 'disconnected';
        }
    }
?>