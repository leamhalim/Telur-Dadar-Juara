<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home | Telur Dadar Juara',
            'active' => 'home'
        ];
        return view('pages/home', $data);
    }

    public function menu(): string
    {
        $data = [
            'title' => 'Menu | Telur Dadar Juara',
            'active' => 'menu'
        ];
        return view('pages/menu', $data);
    }

    public function about(): string
    {
        $data = [
            'title' => 'Tentang Kami | Telur Dadar Juara',
            'active' => 'about'
        ];
        return view('pages/about', $data);
    }
}
