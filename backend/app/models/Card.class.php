<?php 
class Card
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function Add($id_u,$id_p)
    {
        $this->db->query('INSERT INTO `card`(`id_u`, `id_p`) VALUES (:id_u,:id_p)');
        $this->db->bind(':id_u',$id_u);
        $this->db->bind(':id_p',$id_p);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function DeleteBuy($id_u,$id_p)
    {
        $this->db->query('INSERT INTO `card`(`id_u`, `id_p`) VALUES (:id_u,:id_p)DELETE FROM `card` WHERE `id_u` = :id_u AND `id_p` = :id_p');
        $this->db->bind(':id_u',$id_u);
        $this->db->bind(':id_p',$id_p);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
}
