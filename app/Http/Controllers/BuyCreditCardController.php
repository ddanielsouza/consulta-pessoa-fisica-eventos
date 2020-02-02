<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\BuyCreditCard;
use App\Utils\Controllers\ControllerModel;

/**
 * Criei a class ControllerModel que contem algumas functions basica para REST API
 */
class BuyCreditCardController extends ControllerModel
{
    protected $modelName = BuyCreditCard::class;
    protected $basicValidate = [
        'purchasePrice' => 'required|numeric',
        'registry' => 'required|regex:/\\d{11}/',
        'cardOperator' => 'required|string',
        'store' => 'required|string'
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
