<?php

class IndexController extends controller
{

    public function index()
    {
        $user = $this->model->get_user(auth());

        $banner = $this->model->get_banner();
        $blogs = $this->model->get_blogs();


        foreach ($blogs as $key=>$blog)
        {
            $user = $this->model->get_user($blog['user_id']);
            $username = $user['username'];
            $blogs[$key]['username'] = $username;
        }

        $this->view('index/index' , ['banner' => $banner , 'blogs' => $blogs, 'user' => $user]);
    }
}