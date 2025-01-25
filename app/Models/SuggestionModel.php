<?php

namespace App\Models;

use CodeIgniter\Model;

class SuggestionModel extends Model
{
    protected $table = 'suggestion';
    protected $primaryKey = 'suggestion_id';
    protected $allowedFields = [
        'suggestion_firstname',
        'suggestion_lastname',
        'suggestion_suggestion',
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = true;
}
