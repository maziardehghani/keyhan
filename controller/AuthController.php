<?php

class AuthController extends controller
{

    public function register_view()
    {
        $this->view('auth/register');
    }

    public function register()
    {
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if ($password !== $confirm_password)
        {
            redirect('auth/register_view');
            error('رمز عبور با تکرار ان مغایرت دارد');
            die();
        }

        $password = hash_password($_POST['password']);
        $_POST['password'] = $password;

        $this->model->store_user($_POST);
        $user = $this->model->get_user($_POST['email']);

        login($user['id']);
        redirect('index');

    }

    public function login_view()
    {
        $this->view('auth/login');
    }

    public function login()
    {
        $email = $_POST['email'];
        $user = $this->model->get_user($email);

        if ($user['password'] !== hash_password($_POST['password']))
        {
            redirect('auth/login_view');
            error('رمز عبور نادرست است');
            die();
        }
        login($user['id']);
        redirect('index');

    }

    public function logout()
    {
        $user = $this->model->get_user(auth());

        logout($user['id']);
        redirect('index');
    }


    public function test()
    {
        var_dump(auth()) ;
    }
}