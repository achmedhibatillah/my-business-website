<?php
namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'transaction';
    protected $primaryKey = 'transaction_id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'transaction_requirement',
        'transaction_price_hosting',
        'transaction_desc_hosting',
        'transaction_price_domain',
        'transaction_desc_domain',
        'transaction_price_ssl',
        'transaction_desc_ssl',
        'transaction_price_api',
        'transaction_desc_api',
        'transaction_service_uiux',
        'transaction_service_frontend',
        'transaction_service_backend',
        'transaction_service_database',
        'transaction_framework',
        'created_at',
        'updated_at'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
