<?php

class Menu extends Controller
{
    public function index()
    {
        $data['judul'] = 'Menu';
        $this->view('templates/header', $data);
        $this->view('menu/index');
        $this->view('templates/footer');
    }
}
