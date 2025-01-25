<?php

namespace App\Controllers;

use App\Models\PackagesModel;
use App\Models\TrafficModel;
use App\Models\GithubModel;
use App\Models\SuggestionModel;
use App\Models\RateModel;
use App\Models\OrdersModel;

class Home extends BaseController
{
    protected $packagesModel;
    protected $githubModel;
    protected $suggestionModel;
    protected $rateModel;
    protected $ordersModel;

    public function __construct()
    {
        $this->packagesModel = new PackagesModel();
        $this->githubModel = new GithubModel();
        $this->suggestionModel = new SuggestionModel();
        $this->rateModel = new RateModel();
        $this->ordersModel = new OrdersModel();

        $trafficModel = new TrafficModel();

        $agent = $_SERVER['HTTP_USER_AGENT'];
        $trafficModel->insert([
            'traffic_agent' => $agent,
            'traffic_hal' => 1
        ]);
    }

    public function index(): string
    {
        $session = session();
        if (!$session->has('notif')) {
            $session->set('notif', true);
            $session->markAsTempdata('notif', 1800);
        } elseif ($session->get('notif') === true) {
            $session->set('notif', false);
        }
        if (!$session->has('rate')) {
            $session->set('rate', true);
            $session->markAsTempdata('rate', 1800);
        }

        $status = [
            'page' => 'home',
            'judul' => 'Home'
        ];

        $packages = $this->packagesModel->findAll();
        $events = $this->githubModel->getGitHubEvents();
    
        return 
            view('templates/header', $status) .
            view('templates/navbar-home') .
            view('home/index', [
                'packages' => $packages,
                'events' => $events
            ]) .
            view('templates/footbar-home') .
            view('templates/footer');
    }

    public function profile(): string
    {
        $status = [
            'page' => 'profile',
            'judul' => 'Profile'
        ];
    
        return 
            view('templates/header', $status) .
            view('templates/navbar-home') .
            view('condition/dev') .
            view('templates/footbar-home') .
            view('templates/footer');
    }

    public function package_detail($slug): string
    {
        $status = [
            'page' => 'package',
            'judul' => 'Package'
        ];

        $name = ucfirst($slug);
        $package = $this->packagesModel->where('packets_name', $name)->first();
    
        return 
            view('templates/header', $status) .
            view('templates/navbar-home') .
            view('home/package', [
                'package' => $package
            ]) .
            view('templates/footbar-home') .
            view('templates/footer');
    }

    public function chat(): string
    {
        $status = [
            'page' => 'chat',
            'judul' => 'Chat'
        ];
    
        return 
            view('templates/header', $status) .
            view('templates/navbar-home') .
            view('condition/dev') .
            view('templates/footbar-home') .
            view('templates/footer');
    }

    public function suggestion_a()
    {

        $rules = [
            'suggestion-firstname' => 'required|min_length[1]|max_length[35]',
            'suggestion-lastname' => 'required|min_length[1]|max_length[35]',
            'suggestion-suggestion' => 'required|min_length[10]'
        ];

        $errors = [
            'suggestion-firstname' => [
                'required' => 'First and last name is required.',
                'min_length' => 'Min length is 1 letter.',
                'max_length' => 'Max length is 35 letter.'
            ],
            'suggestion-lastname' => [
                'required' => 'First and last name is required.',
                'min_length' => 'Min length is 1 letter.',
                'max_length' => 'Max length is 35 letter.'
            ],
            'suggestion-suggestion' => [
                'required' => 'Suggestion is required.',
                'min_length' => 'Min length is 10 letter.'
            ]
        ];

        if (!$this->validate($rules, $errors)) {
            session()->setFlashdata('errors', $this->validator->getErrors());
            return redirect()->to('#lp-chat')->withInput();
        }

        $suggestion_firstname = $this->request->getPost('suggestion-firstname');
        $suggestion_lastname = $this->request->getPost('suggestion-lastname');
        $suggestion_suggestion = $this->request->getPost('suggestion-suggestion');

        $data = [
            'suggestion_firstname' => $suggestion_firstname,
            'suggestion_lastname' => $suggestion_lastname,
            'suggestion_suggestion' => $suggestion_suggestion
        ];

        $this->suggestionModel->save($data);

        return redirect()->to(base_url('#lp-chat'))->with('success', 'Thanks, your suggestion has been submitted successfully!');
    }

    public function rate_a()
    {
        $session = session();
        if (!$session->has('rate')) {
            $session->set('rate', true);
            $session->markAsTempdata('rate', 1800);
        } elseif ($session->get('rate') === true) {
            $session->set('rate', false);
        }

        $validation = $this->validate([
            'rate_rate' => 'required|integer|greater_than_equal_to[1]|less_than_equal_to[5]'
        ]);

        if (!$validation) {
            return redirect()->to('#lp-chat')->with('rate-errors', $this->validator->getErrors());
        }

        $this->rateModel->save([
            'rate_rate' => $this->request->getPost('rate_rate')
        ]);

        return redirect()->to('#lp-chat')->with('rate-success', 'Thanks, rating submitted successfully!');
    }

    public function order_a()
    {

        $rules = [
            'order-email' => 'required|valid_email|min_length[1]|max_length[224]',
            'order-firstname' => 'required|min_length[1]|max_length[35]',
            'order-lastname' => 'required|min_length[1]|max_length[35]',
            'order-requirement' => 'required|min_length[10]'
        ];

        $errors = [
            'order-email' => [
                'required' => 'Email is required.',
                'valid_email' => 'Email must be valid.',
                'min_length' => 'Min length is 1 letter.',
                'max_length' => 'Max length is 224 letter.'
            ],
            'order-firstname' => [
                'required' => 'First and last name is required.',
                'min_length' => 'Min length is 1 letter.',
                'max_length' => 'Max length is 35 letter.'
            ],
            'order-lastname' => [
                'required' => 'First and last name is required.',
                'min_length' => 'Min length is 1 letter.',
                'max_length' => 'Max length is 35 letter.'
            ],
            'order-requirement' => [
                'required' => 'This field is required.',
                'min_length' => 'Min length is 10 letter.'
            ]
        ];

        $slug_ = $this->request->getPost('order-slug');
        $slug = strtolower($slug_);

        if (!$this->validate($rules, $errors)) {
            session()->setFlashdata('errors', $this->validator->getErrors());
            return redirect()->to('package-' . $slug . '#form-order')->withInput();
        }

        $order_email = $this->request->getPost('order-email');
        $order_firstname = $this->request->getPost('order-firstname');
        $order_lastname = $this->request->getPost('order-lastname');
        $order_requirement = $this->request->getPost('order-requirement');
        $order_code = mt_rand(10000000, 99999999);
        $packets_id = $this->request->getPost('packets-id');

        $data = [
            'order_email' => $order_email,
            'order_firstname' => $order_firstname,
            'order_lastname' => $order_lastname,
            'order_requirement' => $order_requirement,
            'order_code' => $order_code,
            'packets_id' => $packets_id
        ];

        $this->ordersModel->save($data);

        return redirect()->to(base_url('package-' . $slug . '#form-order'))->with('success', 'Thanks, your order has been submitted successfully!');
    }
}
