<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function index()
    {
        return view('user/landing_page');
    }

    public function login()
    {
        return view('user/login_page');
    }

    public function signup()
    {
        return view('user/signup_page');
    }

    public function moodboard()
    {
        return view('user/moodboard_page');
    }
}
