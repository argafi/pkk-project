<?php

class Dashboard extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->view('templates/dashboard/header');
        $this->view('dashboard/index');
        $this->view('templates/dashboard/footer');
    }
}
