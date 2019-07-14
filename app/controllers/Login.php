<?php

class Login extends Controller
{
    public function index()
    {
        $this->view('login/index');    
    }
    
    public function auth()
    {
        $dataus = $this->model('User_model')->getUserByLogin($_POST['username'],$_POST['pass']);
        
        if($dataus){
            $_SESSION['user'] = $dataus['username'];
            header('Location: ' . BASEURL);
        } else {
            header('Location: ' . BASEURL . '/login');
        }
    }
}
