<?php

class User_model {
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getUserByLogin($id,$passwd)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:id and password=:passwd');
        $this->db->bind('id',$id);
        $this->db->bind('passwd',$passwd);
        return $this->db->single();
    }
}
