<?php 
class Contact
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function Add($name,$email,$telephone,$message)
    {
        $this->db->query('INSERT INTO `contact`(`name`, `email`, `telephone`, `message`) VALUES (:name,:email,:telephone,:message)');
        $this->db->bind(':name',$name);
        $this->db->bind(':email',$email);
        $this->db->bind(':telephone',$telephone);
        $this->db->bind(':message',$message);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function Select()
    {
        $this->db->query("SELECT * FROM `contact`");
        $row = $this->db->fetchAll();
        return $row;
    }
    public function delete($id)
    {
        $this->db->query('DELETE FROM `contact` WHERE `id` = :id');
        $this->db->bind(':id',$id);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
}
