<?php

class Login extends Controller
{   
    public function __construct()
    {   
        if ($_SESSION['user']) {
            header('Location: ' . BASEURL);
        }
    }

    public function index()
    {
        $this->view('login/index');    
    }
    
    public function auth()
    {
        $dataus = $this->model('User_model')->getUserByLogin($_POST['username'],$_POST['pass']);
        
        if($dataus){
            $_SESSION['user'] = $dataus['username'];
            $_SESSION['nama'] = $dataus['nama'];
            header('Location: ' . BASEURL);
        } else {
            header('Location: ' . BASEURL . '/login');
        }
    }

    public function logout()
    {
        $_SESSION['user'] = null;
        header('Location: ' . BASEURL . '/login');        
    }

    public function api()
    {
        $this->model('Api')->masuk();
    }
}
