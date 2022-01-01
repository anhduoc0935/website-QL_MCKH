<?php 

class MailModel extends Database {
    public function __construct()
    {
        $this->connectDB();
        $this->table = 'mail';
        $this->schema = 'MailSchema';
    }
}

class MailSchema extends Schema {
    public $id, $sender_id, $receiver_id, $message, $create_at;
}
?>