<?php


class Index extends model
{

    public function get_banner()
    {
        $sql = 'select * from banners';
        $stmt = $this->connection->prepare($sql);

        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function get_blogs()
    {
        $sql = "select * from blogs";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function get_notifs($user_id)
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
}