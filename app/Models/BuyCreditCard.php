<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class BuyCreditCard extends Model
{
    use \App\Utils\Helpers\ISOSerialization;

    protected $table = "buy_credit_card";

    protected $fillable = [
        'id',
        'purchasePrice',
        'registry',
        'cardOperator',
        'store'
    ];
}
