<?php

class OrderController extends controller
{
    public function index()
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        $orders = $this->model->get_All_orders();
        foreach ($orders as $key=>$order)
        {
            $user = $this->model->get_user($order['user_id']);
            $username = $user['username'];
            $orders[$key]['username'] = $username;
        }


        $this->view('adminpanel/order/index' , ['orders' => $orders]);
    }

    public function order()
    {
        $user = $this->model->get_user(auth());
        authenticated($user);
        $orders = $this->model->get_orders($user['id']);
        foreach ($orders as $key=>$order)
        {
            $user = $this->model->get_user($order['user_id']);
            $username = $user['username'];
            $orders[$key]['username'] = $username;
        }

        $this->view('index/orders' , ['orders' => $orders, 'user' => $user]);
    }

    public function store()
    {
        $user = $this->model->get_user(auth());
        authenticated($user);
        $this->model->store($_POST);
        redirect('order/order');

    }

    public function toggle_status($id)
    {
        $user = $this->model->get_user(auth());
        authorize($user);

        $order = $this->model->get_order($id);

        $this->model->toggle_status($id, !$order['status']);
        redirect('order/index/');
    }
}