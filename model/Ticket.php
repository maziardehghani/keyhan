<?php

class Ticket extends model
{
    public function get_tickets()
    {
        $sql = "select * from tickets";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function get_user_tickets($user_id)
    {
        $sql = "select * from tickets where user_id = $user_id";
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

    public function get_All_users()
    {
        $sql = 'select * from users';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function delete($id)
    {
        $sql = "delete from tickets where id=:id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":id" , $id);
        $stmt->execute();
    }

    public function get_ticket($id)
    {
        $sql ="select * from tickets where id=:id";
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':id' , $id);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function store($ticket)
    {
        $sql = 'insert into tickets (user_id , text )
            values (:user_id , :text)';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':user_id' , $ticket['user_id']);
        $stmt->bindParam(':text' , $ticket['text']);

        $stmt->execute();
    }


    public function update($banner , $id)
    {
        $user_id = auth();
        $sql = "update tickets set title=:title , user_id=:user_id , image=:image , text=:text where id=:id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':title' , $banner['title']);
        $stmt->bindParam(':user_id' , $user_id);
        $stmt->bindParam(':image' , $banner['image']);
        $stmt->bindParam(':text' , $banner['text']);
        $stmt->bindParam(':id' , $id);
        $stmt->execute();
    }
}