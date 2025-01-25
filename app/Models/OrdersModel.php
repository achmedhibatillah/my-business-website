<?php

namespace App\Models;

use CodeIgniter\Model;

class OrdersModel extends Model
{
    protected $table = 'orders';

    // Primary key tabel
    protected $primaryKey = 'order_id';

    protected $allowedFields = [
        'order_code', 'order_firstname', 'order_lastname', 
        'order_email', 'order_requirement', 'packets_id', 
        'created_at', 'updated_at'
    ];

    protected $useTimestamps = true;
}