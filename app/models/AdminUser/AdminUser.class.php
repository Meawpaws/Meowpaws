<?php 
class AdminUser{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function delete($id)
    {
        $this->db->query("DELETE FROM users WHERE id_u = :id");
        $this->db->bind(':id', $id);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function updateAuto($username,$password,$id)
    {
        $this->db->query("UPDATE `users` SET`username`= :username,`password`=:password WHERE `id_u` = :id");
        $this->db->bind(':username', $username);
        $this->db->bind(':password', $password);
        $this->db->bind(':id', $id);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function updateAvatar($avatar)
    {
        $this->db->query("UPDATE `users` SET`avatar_user`=:avatar WHERE `id_u` = :id");
        $this->db->bind(':avatar', $avatar);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
}