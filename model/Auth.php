<?php

class Auth extends model
{
    public string $user = 'USER';
    public string $admin = 'ADMIN';
    public function store_user($user)
    {
        $sql = "insert into users(email , username , password , type)
            values (:email , :username , :password , :type)";

        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':email' , $user['email']);
        $stmt->bindParam(':username' , $user['username']);
        $stmt->bindParam(':password' , $user['password']);
        $stmt->bindParam(':type' , $this->user);

        $stmt->execute();
    }

    public function get_user($email)
    {
        $sql = "select * from users where email=:email";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':email' , $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;

    }
}