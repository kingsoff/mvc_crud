<?php

abstract class Model
{
    private $id;
    private $db;
    protected $table = '';

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getById($id)
    {
        $this->db->getById($this->table, $id);
    }

    public function readAll()
    {
        return $this->db->readAll($this->table);
    }

    public function create($data)
    {
        return $this->db->create($this->table, $data);
    }

    public function update($id, $data)
    {
        return $this->db->update($this->table, $id, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, $id);
    }
}
