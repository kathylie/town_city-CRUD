<?php
include_once("db.php"); // Include the Database class file

class Province {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAll() {
        try {
            $sql = "SELECT * FROM province";
            $stmt = $this->db->getConnection()->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Handle errors (log or display)
            throw $e; // Re-throw the exception for higher-level handling
        }
    }
}
?>
