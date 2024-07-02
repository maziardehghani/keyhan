<?php

function login($userID)
{
    session_start();
    $_SESSION['user'] = $userID;
}

function logout($userID)
{
    session_start();
    unset($_SESSION['user']);
}

function auth()
{
    session_start();
    if (isset($_SESSION['user']))
    {
        return $_SESSION['user'];
    }else {
        return false;
    }
}

function redirect($path)
{
    header('location: '.URL.$path);
}

function error($msg)
{
    setcookie('error' , $msg , time() + 30);

}

function hash_password($password)
{
    return hash('sha256' , $password);
}

function authorize($user)
{
    if ($user['type'] !== 'ADMIN')
    {
        redirect('index');
    }
}
function authenticated($user)
{
    if (!$user)
    {
        redirect('index');
    }
}
function dd($value)
{
    var_dump($value); ;
    die();
}


function storage($uploaded_file , $path)
{
    $time = time();
    $filename = "$time.jpg";
    move_uploaded_file($uploaded_file['tmp_name'] , $path.$filename);
    $_POST['image'] = $filename;

}
