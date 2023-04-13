<?php
class Admin 
{
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
        public function Update($sql, $id)
        {
            $this->db->query("UPDATE `users` SET '$sql' WHERE `id_u` = :id");
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

    public function getAdminByEmail($email) 
    {
        $this->db->query("SELECT * FROM users WHERE email = :email AND role = 1");
        $this->db->bind(":email", $email);
        $this->db->execute();
        if($this->db->rowCount()) return $this->db->fetch();
        else
            return false;
    }
    public function select($id) 
    {
        $this->db->query("SELECT * FROM users WHERE id_u = :id");
        $this->db->bind(":id", $id);
        $this->db->execute();
        if($this->db->rowCount()) return $this->db->fetch();
        else
            return false;
    }
    public function register($name, $email, $password,$avatar)
    {
        $this->db->query('INSERT INTO users(username,email,password,avatar_user,role) VALUES (:name,:email,:password,:avatar,1)');
        $this->db->bind(':name',$name);
        $this->db->bind(':email',$email);
        $this->db->bind(':password',$password);
        $this->db->bind(':avatar',$avatar);
        if ($this->db->execute())
            return true;
        else
            return false;
    }
    public function login($email,$password)
    {
        $this->db->query("SELECT * FROM users WHERE email = :email AND role = 1");
        $this->db->bind(':email',$email);
        $row = $this->db->fetch();
        $hashed_password = $row->password;
        if (password_verify($password, $hashed_password)) {
            return true;
        } else {
            return false;
        }
    }
    public function selectAll()
    {
        $this->db->query("SELECT * FROM `users`");
        $row = $this->db->fetchAll();
        return $row;
    }
    public function selectAdmins()
    {
        $this->db->query("SELECT * FROM `users` WHERE role = 1");
        $row = $this->db->fetchAll();
        return $row;
    }
    public function selectUsers()
    {
        $this->db->query("SELECT * FROM `users` WHERE role = 0");
        $row = $this->db->fetchAll();
        return $row;
    }
    public function ChangeRole($id)
    {
        $this->db->query('UPDATE `users` SET `role` = 1 WHERE `id_u` = :id');
        $this->db->bind(':id',$id);
        if ($this->db->execute())
            return true;
        else
            return false;}
}