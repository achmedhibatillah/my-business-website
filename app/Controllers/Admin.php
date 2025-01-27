<?php

namespace App\Controllers;

use App\Models\PackagesModel;
use App\Models\TrafficModel;
use App\Models\GithubModel;
use App\Models\SuggestionModel;
use App\Models\RateModel;
use App\Models\OrdersModel;

class Admin extends BaseController
{
    protected $packagesModel;
    protected $githubModel;
    protected $suggestionModel;
    protected $rateModel;
    protected $ordersModel;
    protected $trafficModel;

    protected $agent;

    public function __construct()
    {
        $this->packagesModel = new PackagesModel();
        $this->githubModel = new GithubModel();
        $this->suggestionModel = new SuggestionModel();
        $this->rateModel = new RateModel();
        $this->ordersModel = new OrdersModel();
        $this->trafficModel = new TrafficModel();

        $this->agent = $_SERVER['HTTP_USER_AGENT'];
    }

    public function auth(): string
    {
        // $this->trafficModel->insert([
        //     'traffic_agent' => $this->agent,
        //     'traffic_hal' => 21
        // ]);

        $status = [
            'page' => 'auth',
            'judul' => 'Authentication'
        ];
    
        return 
            view('templates/header', $status) .
            view('admin/auth') .
            view('templates/footer');
    }

    public function dashboard(): string
    {
        // $this->trafficModel->insert([
        //     'traffic_agent' => $this->agent,
        //     'traffic_hal' => 22
        // ]);

        $status = [
            'page' => 'admin',
            'judul' => 'GUA MAU BOBOK'
        ];

        $trafficData = $this->trafficModel->getTrafficLast30Days();
        ob_start();
        var_dump($trafficData);
        $dumptrafficData = ob_get_clean();

        $labels = [];
        $data = [];
        foreach ($trafficData as $row) {
            $labels[] = $row->date;
            $data[] = (int) $row->total_visits;
        }

        $grafikData = [
            'labels' => json_encode(array_reverse($labels)),
            'data' => json_encode(array_reverse($data)),
            'dump' => $dumptrafficData
        ];
    
        return 
            view('templates/header', $status) .
            view('admin/dashboard', $grafikData) .
            view('templates/footer');
    }

    public function ver()
    {
        $rules = [
            'key' => 'required'
        ];
    
        $errors = [
            'key' => [
                'required' => 'masukin key-nya dulu sayang..'
            ]
        ];

        if (!$this->validate($rules, $errors)) {
            session()->setFlashdata('errors-auth', $this->validator->getErrors());
            return redirect()->to('admin')->withInput();
        }

        $key = $this->request->getPost('key');
        if ($this->key($key) !== true) {
            session()->setFlashdata('errors-auth', ['key' => 'key-nya salah ihh']);
            return redirect()->to('admin')->withInput();
        } else {
            session()->setTempdata('status', 'login-admin', 60 * 20);
            return redirect()->to('gua-mau-bobok');
        }
    }

    private function key(string $str): bool
    {
        $key = 'ihdhayqwy09pgodwqhids';
        if ($str !== $key) {
            return false;
        }
        return true;
    }

}