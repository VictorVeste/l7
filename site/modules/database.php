<?php
class Database {
    private $db;

    public function __construct($path) {
        $this->db = new SQLite3($path);
    }

    public function Execute($sql) {
        return $this->db->exec($sql);
    }

    public function Fetch($sql) {
        $result = $this->db->query($sql);
        return $result->fetchArray(SQLITE3_ASSOC);
    }

    public function Create($table, $data) {
        // Implementarea metodei Create
    }

    public function Read($table, $id) {
        // Implementarea metodei Read
    }

    public function Update($table, $id, $data) {
        // Implementarea metodei Update
    }

    public function Delete($table, $id) {
        // Implementarea metodei Delete
    }

    public function Count($table) {
        // Implementarea metodei Count
    }
}
?>
