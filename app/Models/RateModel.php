<?php

namespace App\Models;

use CodeIgniter\Model;

class RateModel extends Model
{
    protected $table = 'rate';
    protected $primaryKey = 'rate_id';
    protected $allowedFields = ['rate_rate', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
}