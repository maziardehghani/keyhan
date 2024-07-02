<?php

class blogController extends controller
{
    public function index()
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        $blogs = $this->model->get_blogs();
        foreach ($blogs as $key=>$blog)
        {
            $user = $this->model->get_user($blog['user_id']);
            $username = $user['username'];
            $blogs[$key]['username'] = $username;
        }

        $this->view('adminpanel/blog/index' , ['blogs' => $blogs]);
    }

    public function create()
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        $this->view('adminpanel/blog/create');
    }

    public function store()
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        storage($_FILES['image'] , BLOG_PATH);
        $this->model->store($_POST);
        redirect('blog/index');
    }

    public function delete($id)
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        $this->model->delete($id);
        redirect('blog/index');
    }


    public function edit($id)
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        $blog = $this->model->get_blog($id);

        $this->view('adminpanel/blog/edit' , ['blog' => $blog]);

    }

    public function update($id)
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        storage($_FILES['image'] , BLOG_PATH);
        $this->model->update($_POST , $id);
        redirect('blog/edit/'.$id);
    }


    public function show($id)
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        $blog = $this->model->get_blog($id);

            $user = $this->model->get_user($blog['user_id']);
            $username = $user['username'];
            $blog['username'] = $username;


        $this->view('adminpanel/blog/show' , ['blog' => $blog]);

    }

    public function detail($id)
    {
        $blog = $this->model->get_blog($id);
        $user = $this->model->get_user($blog['user_id']);
        $username = $user['username'];
        $blog['username'] = $username;
        $this->view('index/blog-detail' , ['blog' => $blog]);

        echo $id;
       die();

    }

}