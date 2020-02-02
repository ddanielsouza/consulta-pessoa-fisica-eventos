<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class LogConsultationScores extends Model
{
    use \App\Utils\Helpers\ISOSerialization;

    protected $table = "logs_consultation_scores";

    protected $fillable = [
        'id',
        'registry',
        'description',
        'bureau'
    ];
}
