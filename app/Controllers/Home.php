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
            view('profile/index') .
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
        $order_code = mt_rand(100000, 999999);
        $packets_id = $this->request->getPost('packets-id');
        $packets_name = $this->packagesModel->where('packets_id', $packets_id)->first()['packets_name'];

        $data = [
            'order_email' => $order_email,
            'order_firstname' => $order_firstname,
            'order_lastname' => $order_lastname,
            'order_requirement' => $order_requirement,
            'order_code' => $order_code,
            'packets_id' => $packets_id,
            'packets_name' => $packets_name
        ];

        $this->ordersModel->save($data);

        $this->send_order_email($data);

        return redirect()->to(base_url('package-' . $slug . '#form-order'))->with('success', 'Thanks, your order has been submitted successfully!<p class="mt-2 mb-1">Your order code is:</p><div class="h3 fw-bold ls-1 mb-0">' . $order_code . '</div>Please check your email now.');
    }

    private function send_order_email($data)
    {
        $email = \Config\Services::email();

        $toEmail = $data['order_email'];
        $subject = 'Order ' . $data['order_code'];
        
        $message = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>' . $subject . '</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f7f7f7;
                    margin: 0;
                    padding: 0;
                }
                .container {
                    width: 100%;
                    max-width: 600px;
                    margin: 0 auto;
                    background-color: #ffffff;
                    border-radius: 8px;
                    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                    padding: 30px;
                }
                .header {
                    text-align: center;
                    color: #333333;
                    margin-bottom: 30px;
                }
                .content {
                    font-size: 16px;
                    color: #555555;
                    line-height: 1.6;
                    margin-bottom: 20px;
                }
                .footer {
                    text-align: center;
                    font-size: 14px;
                    color: #888888;
                }
                .button {
                    display: inline-block;
                    padding: 10px 20px;
                    background-color: #4CAF50;
                    color: #ffffff;
                    text-decoration: none !important;
                    border-radius: 5px;
                }
                .button:hover {
                    background-color: #45a049;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h2>Thank you for contacting me!</h2>
                </div>
                <div class="content">
                    <p>Hello ' . $data['order_firstname'] . ' ' . $data['order_lastname'] . ',</p>
                    <p>I have received your order and will get back to you soon.</p>
                    <p>Here are the details of your order:</p>
                    <ul>
                        <li><strong>Order Code:</strong> ' . $data['order_code'] . '</li>
                        <li><strong>Package:</strong> ' . $data['packets_name'] . '</li>
                        <li><strong>Requirement:</strong> ' . $data['order_requirement'] . '</li>
                    </ul>
                    <p>If you have any further questions, feel free to reach out to us.</p>
                    <p>Best regards,</p>
                    <p><strong>Achmed Hibatillah</strong></p>
                    <a href="mailto:contact@achmedhibatillah.com" class="button">Contact me</a>
                </div>
                <div class="footer">
                    <p>&copy; ' . date("Y") . ' [Your Company Name]. All rights reserved.</p>
                </div>
            </div>
        </body>
        </html>';
        
        $email->setTo($toEmail);
        $email->setSubject($subject);
        $email->setMessage($message);

        // Set email format to HTML
        $email->setMailType('html');

        // Send email
        if ($email->send()) {
            return true;
        } else {
            return false;
        }
    }
}
