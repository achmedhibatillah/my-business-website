<?php

namespace App\Controllers;

use App\Models\PackagesModel;
use App\Models\TrafficModel;

class Home extends BaseController
{
    protected $packagesModel;

    public function __construct()
    {
        $this->packagesModel = new PackagesModel();

        $trafficModel = new TrafficModel();

        $agent = $_SERVER['HTTP_USER_AGENT'];
        $trafficModel->insert([
            'traffic_agent' => $agent,
            'traffic_hal' => 1
        ]);
    }

    public function index(): string
    {
        $status = [
            'page' => 'home',
            'judul' => 'Home'
        ];

        $packages = $this->packagesModel->findAll();
    
        return 
            view('templates/header', $status) .
            view('templates/navbar-home') .
            view('home/index', [
                'packages' => $packages
            ]) .
            view('templates/footbar-home') .
            view('templates/footer');
    }
}
