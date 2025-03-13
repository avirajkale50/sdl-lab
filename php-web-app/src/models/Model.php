class Model {
    protected $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function find($table, $id) {
        $stmt = $this->db->prepare("SELECT * FROM $table WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function all($table) {
        $stmt = $this->db->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function save($table, $data) {
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        $stmt = $this->db->prepare("INSERT INTO $table ($columns) VALUES ($placeholders)");
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        return $stmt->execute();
    }

    public function delete($table, $id) {
        $stmt = $this->db->prepare("DELETE FROM $table WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}