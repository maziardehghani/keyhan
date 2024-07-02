<?php

class TicketController extends controller
{
    public function index()
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        $tickets = $this->model->get_tickets();
        foreach ($tickets as $key=>$ticket)
        {
            $user = $this->model->get_user($ticket['user_id']);
            $username = $user['username'];
            $tickets[$key]['username'] = $username;
        }

        $this->view('adminpanel/ticket/index' , ['tickets' => $tickets]);
    }

    public function tickets()
    {
        $user = $this->model->get_user(auth());
        authenticated($user);

        $tickets = $this->model->get_user_tickets($user['id']);

        foreach ($tickets as $key=>$ticket)
        {
            $user = $this->model->get_user($ticket['user_id']);
            $username = $user['username'];
            $tickets[$key]['username'] = $username;
        }

        $this->view('index/tickets' , ['tickets' => $tickets, 'user' => $user]);
    }

    public function create()
    {
        $user = $this->model->get_user(auth());
        authorize($user);

        $users = $this->model->get_All_users();

        $this->view('adminpanel/ticket/create', ['users' => $users]);
    }

    public function store()
    {
        $user = $this->model->get_user(auth());
        authorize($user);

        $this->model->store($_POST);
        redirect('ticket/index');
    }

    public function delete($id)
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        $this->model->delete($id);
        redirect('ticket/index');
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