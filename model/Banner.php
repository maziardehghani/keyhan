<?php

class Banner extends model
{
    public function get_banners()
    {
        $sql = 'select * from banners';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function delete($id)
    {
        $sql = "delete from banners where id=:id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":id" , $id);
        $stmt->execute();
    }

    public function store($banner)
    {
        $sql="insert into banners (title , image , active)
               values (:title , :image , :active)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':title' , $banner['title']);
        $stmt->bindParam(':image' , $banner['image']);
        $stmt->bindParam(':active' , $banner['active']);
        $stmt->execute();
    }

    public function get_banner($id)
    {
        $sql ="select * from banners where id=:id";
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':id' , $id);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function update($banner , $id)
    {
        $sql = "update banners set title=:title , active=:active , image=:image where id=:id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':title' , $banner['title']);
        $stmt->bindParam(':active' , $banner['active']);
        $stmt->bindParam(':image' , $banner['image']);
        $stmt->bindParam(':id' , $id);
        $stmt->execute();


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