<?php

namespace App\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;

use App\Models\PackagesModel;
use App\Models\TrafficModel;
use App\Models\OrdersModel;
use App\Models\TransactionModel;

class Transaction extends BaseController
{
    protected $packagesModel;
    protected $rateModel;
    protected $ordersModel;
    protected $transactionModel;

    public function __construct()
    {
        $this->packagesModel = new PackagesModel();
        $this->ordersModel = new OrdersModel();
        $this->transactionModel = new TransactionModel();

        $trafficModel = new TrafficModel();

        $agent = $_SERVER['HTTP_USER_AGENT'];
        $trafficModel->insert([
            'traffic_agent' => $agent,
            'traffic_hal' => 2
        ]);
    }

    public function detail($transaction_id): string
    {
        $status = [
            'page' => 'transaction',
            'judul' => 'Transaction'
        ];

        $packages = $this->packagesModel->findAll();
        $tr = $this->transactionModel->find($transaction_id);
    
        return 
            view('templates/header', $status) .
            view('templates/navbar-home') .
            view('transaction/detail', [
                'packages' => $packages,
                'tr' => $tr
            ]) .
            view('templates/footbar-home') .
            view('templates/footer');
    }

    public function download($transactionId)
    {
        $transactionModel = new \App\Models\TransactionModel();
        $tr = $transactionModel->find($transactionId);

        if (!$tr) {
            return redirect()->to('/error')->with('message', 'Transaction not found');
        }

        $data = [
            'tr' => $tr,
        ];

        $html = view('transaction/pdf', $data);

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        return $dompdf->stream('transaction-' . $transactionId . '.pdf', array('Attachment' => 0));
    }
}
