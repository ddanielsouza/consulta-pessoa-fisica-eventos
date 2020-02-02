<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class FinancialMovement extends Model
{
    use \App\Utils\Helpers\ISOSerialization;

    protected $table = "financial_movement";

    protected $fillable = [
        'id',
        'registry',
        'isEntry',
        'amounts',
    ];

    protected $casts = [
        'isEntry' => 'boolean'
    ];
}
