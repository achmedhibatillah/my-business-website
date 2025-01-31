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

    public function DD()
    {
        $builder = $this->builder();
        $builder->select('DATE(created_at) as date, COUNT(*) as total_visits')
                ->groupBy('DATE(created_at)')
                ->orderBy('DATE(created_at)', 'DESC')
                ->where('created_at >=', date('Y-m-d', strtotime('-30 days')));
        $query = $builder->get();
        
        return $query->getResult();
    }
    
    public function getTrafficLast30Days()
    {
        return $this->builder()
                    ->select('DATE(created_at) as date, COUNT(*) as total_visits')
                    ->where('created_at >=', date('Y-m-d H:i:s', strtotime('-30 days')))
                    ->where('traffic_hal', 1)
                    ->groupBy('DATE(created_at)')
                    ->orderBy('DATE(created_at)', 'ASC')
                    ->get()
                    ->getResult();
    }
}
