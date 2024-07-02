<?php

class BannerController extends controller
{
    public function index()
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        $banners = $this->model->get_banners();

        $this->view('adminpanel/banner/index' , ['banners' => $banners]);
    }

    public function delete($id)
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        $this->model->delete($id);
        redirect('banner/index');
    }

    public function create()
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        $this->view('adminpanel/banner/create');
    }

    public function store()
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        storage($_FILES['image'] , BANNER_PATH);
        $this->model->store($_POST);

        redirect('banner/index');


    }

    public function edit($id)
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        $banner = $this->model->get_banner($id);

        $this->view('adminpanel/banner/edit' , ['banner' => $banner]);

    }


    public function update($id)
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        storage($_FILES['image'] , BANNER_PATH);
        $this->model->update($_POST , $id);
        redirect('banner/edit/'.$id);
    }

    public function show($id)
    {
        $user = $this->model->get_user(auth());
        authorize($user);
        $banner = $this->model->get_banner($id);

        $this->view('adminpanel/banner/show' , ['banner' => $banner]);

    }

}