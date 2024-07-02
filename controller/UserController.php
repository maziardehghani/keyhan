<?php

class userController extends controller
{

    public function index()
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        $users = $this->model->get_all();
        $this->view('adminpanel/users/index' , ['users' => $users]);
    }

    public function edit($id)
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        $user = $this->model->get_user($id);
        $this->view('adminpanel/users/edit' , ['user' => $user]);
    }

    public function update($id)
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        $this->model->update($_POST , $id);
        redirect('user/edit/'.$id);
    }

    public function delete($id)
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        $this->model->remove($id);
        redirect('user/index/');
    }
}