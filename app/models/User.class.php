<?php
class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getUserByEmail($email) 
    {
        $this->db->query("SELECT * FROM users WHERE email_user = :email");
        $this->db->bind(":email", $email);
        $this->db->execute();
        if($this->db->rowCount()) return true;
        else
            return false;
    }
    public function register($name, $email, $password,$avatar)
    {
        $this->db->query('INSERT INTO users(name_user,email_user,password_user,avatar_user) VALUES (:name,:email,:password,:avatar)');
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
        $this->db->query("SELECT * FROM users WHERE email_user = :email");
        $this->db->bind(':email',$email);
        $row = $this->db->fetch();
        $hashed_password = $row->password_user;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
        
    }
}