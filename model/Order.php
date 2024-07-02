<?php

class Order extends model
{

    public function get_orders($user_id)
    {
        $sql = "select * from orders where user_id = $user_id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function get_All_orders()
    {
        $sql = "select * from orders";
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


    public function store($blog)
    {

        $sql = 'insert into orders (title , user_id,status )
            values (:title ,:user_id , :status)';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':title' , $blog['title']);
        $stmt->bindParam(':user_id' , $blog['user_id']);
        $stmt->bindParam(':status' , $blog['status']);

        $stmt->execute();
    }
    public function get_order($id)
    {
        $sql ="select * from orders where id=:id";
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':id' , $id);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function toggle_status($id, $status)
    {
        $sql = "update orders set status=:status where id=:id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':status' , $status);
        $stmt->bindParam(':id' , $id);
        $stmt->execute();
    }
}