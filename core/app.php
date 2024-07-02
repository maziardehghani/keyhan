<?php

class app
{
    private string $controller = 'index';
    private string $method = 'index';
    private array $params = [];

    public function __construct()
    {
        $parse_url =[];

        if (isset($_REQUEST['url'])) {
            $url = $_REQUEST['url'];
            $parse_url = $this->pars_url($url);
        }


        if (isset($parse_url[0])) {
            $this->controller = $parse_url[0];
            unset($parse_url[0]);
        }

        if (isset($parse_url[1])) {
            $this->method = $parse_url[1];
            unset($parse_url[1]);
        }

        $this->params = array_values($parse_url);



        $controller_class = ucfirst($this->controller) . 'Controller';
        $controller_dir = 'controller/' . $controller_class . '.php';

        if (file_exists($controller_dir)) {
            require $controller_dir;
            $object = new $controller_class;
            $object->model($this->controller);
            if (method_exists($object, $this->method)) {
                call_user_func_array([$object, $this->method], $this->params);
            }
        }

    }

    private function pars_url($url)
    {
        return explode('/', $url);
    }
}