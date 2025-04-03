<?php
abstract class Database {
    protected $conn;   // Connection to the database.
    protected $result; // Store the query result.

    public function connectToDatabase($servername, $username, $password, $dbname) {
        $this->conn = new mysqli($servername, $username, $password, $dbname); 
        if($this->conn->connect_error){
            throw new Exception("Connection failed: " . $this->conn->connect_error);
        } 
    }

    public function executeQuery(string $sql) {
        $this->result = $this->conn->query($sql);
    }

    public function getResults(): array {
        $data = [];
        if ($this->result && $this->result->num_rows > 0) {
            while($row = $this->result->fetch_assoc()) {
                $data[] =$row;
            }
        }
        return $data;
    }
}
?>
