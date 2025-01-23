<?php

namespace App\Controllers;

use App\Models\TrafficModel;

class Home extends BaseController
{
    public function __construct()
    {
        $trafficModel = new TrafficModel();
        $trafficModel->insert([
            'traffic_hal' => 1
        ]);
    }

    public function index(): string
    {
        $status = [
            'page' => 'home',
            'judul' => 'Home'
        ];
    
        return 
            view('templates/header', $status) .
            view('templates/navbar-home') .
            view('home/index') .
            view('templates/footbar-home') .
            view('templates/footer');
    }
}
