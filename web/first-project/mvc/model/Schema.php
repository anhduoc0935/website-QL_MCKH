<?php 

class Schema extends Database{
    /**
     * Convert array row to OOP
     */
    public function __construct($data)
    {
        foreach($data as $key => $value) {
            $this->$key = $value;
        }
    }

    protected function relation($table, $schema) {
        $this->connectDB();
        $this->table = $table;
        $this->schema = $schema;
        return $this;
    }
}

?>