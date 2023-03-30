<?php
class Category
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function add($name)
    {
        $this->db->query('INSERT INTO category(cname) VALUES (:name)');
        $this->db->bind(':name',$name);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function update($name,$id)
    {
        $this->db->query('UPDATE `category` SET `cname`=:name WHERE `id_c`= :id');
        $this->db->bind(':name',$name);
        $this->db->bind(':id',$id);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function delete($id)
    {
        $this->db->query('DELETE FROM `category` WHERE `id_c` = :id');
        $this->db->bind(':id',$id);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function selectAll()
    {
        $this->db->query("SELECT * FROM `category`");
        $row = $this->db->fetchAll();
        return $row;
    }
    public function selectById($id)
    {
        $this->db->query("SELECT * FROM `category` WHERE `id_c` = :id");
        $this->db->bind(':id',$id);
        $row = $this->db->fetch();
        return $row;
    }
}