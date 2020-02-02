<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\LogConsultationScores;
use App\Utils\Controllers\ControllerModel;


class LogConsultationScoresController extends ControllerModel
{
    protected $modelName = LogConsultationScores::class;
    protected $basicValidate = [
        'registry' => 'required|regex:/\\d{11}/',
        'description' => 'required|string',
        'bureau' => 'required|string'
    ];
    protected $columnsEncrypted = [];
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => []]);
    }
}
