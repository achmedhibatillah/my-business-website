<?php

namespace App\Models;

use CodeIgniter\Model;

class TrafficModel extends Model
{
    protected $table            = 'traffic';
    protected $primaryKey       = 'traffic_id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['traffic_hal', 'traffic_agent', 'created_at'];
    protected $useTimestamps    = false;

    public function getTrafficLast30Days()
    {
        $builder = $this->builder();
        $builder->select('DATE(created_at) as date, COUNT(*) as total_visits')
                ->groupBy('DATE(created_at)')
                ->orderBy('DATE(created_at)', 'DESC')
                ->where('created_at >=', date('Y-m-d', strtotime('-30 days')));
        $query = $builder->get();
        
        return $query->getResult();
    }
    
    
}
