<?php

namespace App\Models;

use CodeIgniter\Model;

class PackagesModel extends Model
{
    protected $table            = 'packages';
    protected $primaryKey       = 'packages_id';
    protected $useAutoIncrement = true;
    protected $useTimestamps    = false;
}
