<?php
class CommentStar
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function addImage($id_cs,$image)
    {
        $this->db->query('INSERT INTO `picturescommentstar`(`image`, `id_cs`) VALUES (:image,:id_cs)');
        $this->db->bind(':id_cs',$id_cs);
        $this->db->bind(':image',$image);
        if ($this->db->execute()) {
            return true;
        }
        else {
            return false;
        }
    }
    public function add($comment,$star,$id_u,$id_p,$image = [])
    {
        $this->db->query('INSERT INTO `commentstar`(`comment`, `star`, `id_u`, `id_p`) VALUES (:comment,:star,:id_u,:id_p)');
        $this->db->bind(':comment',$comment);
        $this->db->bind(':star',$star);
        $this->db->bind(':id_u',$id_u);
        $this->db->bind(':id_p',$id_p);
        $this->db->execute();

        $this->db->query("SELECT * FROM `commentstar` ORDER BY `commentstar`.`id_cs` DESC LIMIT 1");
        $row = $this->db->fetch();
        $id_cs = $row->id_cs;

        for ($i=0; $i < count($image); $i++) { 
            $this->addImage($id_cs,$image[$i]);
        }
        return true;
    }
    public function update($sql)
    {
        $this->db->query($sql);
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
        $this->db->query("SELECT * FROM `commentstar` cs, `users` us, `product` po WHERE cs.id_p = po.id_p AND cs.id_u = us.id_u");
        $row = $this->db->fetchAll();
        return $row;
    }
    public function selectById($id)
    {
        $this->db->query("SELECT * FROM `commentstar` cs, `users` us, `product` po  WHERE cs.id_p = po.id_p AND cs.id_u = us.id_u AND cs.id_cs = :id");
        $this->db->bind(':id',$id);
        $row = $this->db->fetch();
        return $row;
    }
        public function selectByProductId($id)
    {
        $this->db->query("SELECT * FROM `commentstar` cs, `users` us WHERE cs.id_u = us.id_u AND cs.id_p = :id");
        $this->db->bind(':id',$id);
        $row = $this->db->fetchAll();
        return $row;
    }
}