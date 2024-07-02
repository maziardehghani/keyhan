<?php

class Blog extends model
{
    public function get_blogs()
    {
        $sql = "select * from blogs";
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


    public function delete($id)
    {
        $sql = "delete from blogs where id=:id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":id" , $id);
        $stmt->execute();
    }

    public function get_blog($id)
    {
        $sql ="select * from blogs where id=:id";
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(':id' , $id);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function store($blog)
    {
        $user_id = auth();
        $sql = 'insert into blogs (title , image, user_id, text )
            values (:title , :image , :user_id , :text)';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':title' , $blog['title']);
        $stmt->bindParam(':image' , $blog['image']);
        $stmt->bindParam(':user_id' , $user_id);
        $stmt->bindParam(':text' , $blog['text']);

        $stmt->execute();
    }


    public function update($banner , $id)
    {
        $user_id = auth();
        $sql = "update blogs set title=:title , user_id=:user_id , image=:image , text=:text where id=:id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':title' , $banner['title']);
        $stmt->bindParam(':user_id' , $user_id);
        $stmt->bindParam(':image' , $banner['image']);
        $stmt->bindParam(':text' , $banner['text']);
        $stmt->bindParam(':id' , $id);
        $stmt->execute();
    }
}