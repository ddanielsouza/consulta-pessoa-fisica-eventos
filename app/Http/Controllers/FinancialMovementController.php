<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\FinancialMovement;
use App\Utils\Controllers\ControllerModel;

/**
 * Criei a class ControllerModel que contem algumas functions basica para REST API
 */
class FinancialMovementController extends ControllerModel
{
    protected $modelName = FinancialMovement::class;
    protected $basicValidate = [
        'purchasePrice' => 'required|numeric',
        'registry' => 'required|regex:/\\d{11}/',
        'isEntry' => 'required|boolean',
        'amounts' => 'required|numeric'
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
