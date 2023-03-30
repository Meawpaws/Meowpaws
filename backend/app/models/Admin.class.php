<?php
class Admin extends AdminUser
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAdminByEmail($email) 
    {
        $this->db->query("SELECT * FROM users WHERE email = :email AND role = 1");
        $this->db->bind(":email", $email);
        $this->db->execute();
        if($this->db->rowCount()) return true;
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
            return $row;
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
}