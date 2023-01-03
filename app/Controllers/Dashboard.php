<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        echo "Welcome back, ".$session->get('user_name');

        echo '<br><a href="'.base_url('login/logout').'">
        Logout
       </a><br><a href="'.base_url('register').'">
       Register
      </a>';
    }
}

