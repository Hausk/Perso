<?php

namespace App\Controllers;

class AppController extends Controller {

    public function home()
    {
        return $this->view('other.home');
    }
    public function portfolio()
    {
        return $this->view('other.portfolio');
    }
    public function contact()
    {
        return $this->view('other.contact');
    }
    public function about()
    {
        return $this->view('other.about');
    }
    public function cv()
    {
        return $this->view('other.cv');
    }
    public function App()
    {
        return $this->view('other.App');
    }
}