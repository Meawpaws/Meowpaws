<?php
class CommentStar
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function add($comment,$star,$id_u,$id_p)
    {
        $this->db->query('INSERT INTO `commentstar`(`comment`, `star`, `id_u`, `id_p`) VALUES (:comment,:star,:id_u,:id_p)');
        $this->db->bind(':comment',$comment);
        $this->db->bind(':star',$star);
        $this->db->bind(':id_u',$id_u);
        $this->db->bind(':id_p',$id_p);
        $this->db->execute();
    }
    public function update($comment,$star,$id_cs)
    {
        $this->db->query('UPDATE `commentstar` SET `comment`=:comment,`star`=:star WHERE `id_cs`= :id_cs');
        $this->db->bind(':comment',$comment);
        $this->db->bind(':star',$star);
        $this->db->bind(':id_cs',$id_cs);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function delete($id)
    {
        $this->db->query('DELETE FROM `commentstar` WHERE `id_cs` = :id');
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