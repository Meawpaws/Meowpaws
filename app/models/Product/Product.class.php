<?php
class Product
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function addImage($id_p,$image)
    {
        $this->db->query('INSERT INTO `picturesproduct`(`image`, `id_p`) VALUES (:image,:id_p)');
        $this->db->bind(':id_p',$id_p);
        $this->db->bind(':image',$image);
        $this->db->execute();
    }
    public function Add($pname,	$price,	$description, $id_c, $image = [])
    {
        $this->db->query('INSERT INTO `product`(`pname`, `price`, `description`, `id_c`) VALUES (:pname,:price,:description,:id_c)');
        $this->db->bind(':pname',$pname);
        $this->db->bind(':price',$price);
        $this->db->bind(':description',$description);
        $this->db->bind(':id_c',$id_c);
        $this->db->execute();

        $this->db->query("SELECT * FROM `product` ORDER BY `product`.`id_p` DESC LIMIT 1");
        $row = $this->db->fetch();
        $id_p = $row->id_p;

        for ($i=0; $i < count($image); $i++) { 
            $this->addImage($id_p,$image[$i]);
        }
    }
    public function delete($id)
    {
        $this->db->query('DELETE FROM `product` WHERE `id_p` = :id');
        $this->db->bind(':id',$id);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function selectAll()
    {
        $this->db->query("SELECT * FROM `product`");
        $row = $this->db->fetchAll();
        return $row;
    }
    public function selectById($id)
    {
        $this->db->query("SELECT * FROM `product` WHERE `id_p` = :id");
        $this->db->bind(':id',$id);
        $row = $this->db->fetch();
        return $row;
    }    
    public function update($sql)
    {
        $this->db->query($sql);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
}
