<?php

namespace App\Controllers;

use App\Models\TrafficModel;

class Condition extends BaseController
{
    protected $packagesModel;

    public function __construct()
    {
        $trafficModel = new TrafficModel();

        $agent = $_SERVER['HTTP_USER_AGENT'];
        $trafficModel->insert([
            'traffic_agent' => $agent,
            'traffic_hal' => 404
        ]);
    }

    // Page
    
    public function error_404(): string
    {
        $status = [
            'page' => 'error',
            'judul' => '404'
        ];
    
        return 
            view('templates/header', $status) .
            view('templates/navbar-home') .
            view('errors/html/condition_404') .
            view('templates/footbar-home') .
            view('templates/footer');
    }

    // Other

    public function p() {
        return view('p');
    }

    public function s() {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}