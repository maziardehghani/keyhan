<?php

class controller
{
    public object $model;
    public function model($class)
    {
        $class_dir = "model/".$class.".php";

        if (file_exists($class_dir))
        {
            require $class_dir;
        }
        $this->model = new $class();

    }

    public function view($url , $data=[])
    {
        $view_dir = "view/".$url.".php";
        if(file_exists($view_dir))
        {
            require $view_dir;
        }
    }
}
