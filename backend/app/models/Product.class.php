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
    public function Add($pname,	$price,	$description, $id_c,$imagePricipal, $image = [])
    {
        $this->db->query('INSERT INTO `product`(`pname`, `price`, `description`, `id_c`,`imagePricipal`) VALUES (:pname,:price,:description,:id_c,:imagePricipal)');
        $this->db->bind(':pname',$pname);
        $this->db->bind(':price',$price);
        $this->db->bind(':description',$description);
        $this->db->bind(':imagePricipal',$imagePricipal);
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
        $this->db->query("SELECT * FROM `product` po, `category` ca, `picturesproduct` pp WHERE po.id_c = ca.id_c AND po.id_p = pp.id_p");
        $row = $this->db->fetchAll();
        return $row;
    }
    public function selectLast4()
    {
        $this->db->query("SELECT * FROM `product` po, `category` ca WHERE po.id_c = ca.id_c ORDER BY po.id_p DESC LIMIT 4");
        $row = $this->db->fetchAll();
        return $row;
    }
    public function selectById($id)
    {
        $this->db->query("SELECT * FROM `product` po, `category` ca, `picturesproduct` pp WHERE po.id_c = ca.id_c AND po.id_p = pp.id_p AND `id_p` = :id");
        $this->db->bind(':id',$id);
        $row = $this->db->fetchAll();
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
