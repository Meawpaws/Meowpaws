<?php 
class Card
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function Add($id_user,$id_product,$price,$quantity_product)
    {
        $this->db->query('INSERT INTO `card`(`id_u`, `id_p`, `price`, `quantité`) VALUES (:id_user,:id_product,:price,:quantity_product)');
        $this->db->bind(':id_user',$id_user);
        $this->db->bind(':id_product',$id_product);
        $this->db->bind(':price',$price);
        $this->db->bind(':quantity_product',$quantity_product);
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
    public function GetProductByIdUser($id_u)
    {
        $this->db->query("SELECT *,ca.price priceCard FROM `card` ca, `product` pr WHERE ca.id_p = pr.id_p AND ca.id_u = :id_u");
        $this->db->bind(':id_u',$id_u);
        $row = $this->db->fetchAll();
        return $row;    
    }
}
