<?php

class User extends model
{
    public function get_all()
    {
        $sql = "select * from users";
        $stmt = $this->connection->prepare($sql);

        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function get_user($id)
    {
        $sql = 'select * from users where id=:id';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id' , $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function update($user , $id)
    {
        $sql = "update users set email=:email , username=:username , type=:type 
                where id=:id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':email' , $user['email']);
        $stmt->bindParam(':username' , $user['username']);
        $stmt->bindParam(':type' , $user['type']);
        $stmt->bindParam(':id' , $id);
        $stmt->execute();
    }


    public function remove($id)
    {
        $sql ="delete from users where id=:id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id' , $id);
        $stmt->execute();

    }
}