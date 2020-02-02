<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->group(['prefix'=>'api'], function() use ($router){
    $router->group(['prefix'=>'buy-credit-card'], function() use ($router){
        $router->post('/', 'BuyCreditCardController@save');
        $router->get('/', 'BuyCreditCardController@get');
        $router->get('/{id}', 'BuyCreditCardController@getById');
        $router->put('/{id}', 'BuyCreditCardController@update');
        $router->patch('/{id}', 'BuyCreditCardController@patch');
        $router->delete('/{id}', 'BuyCreditCardController@delete');
    });

    $router->group(['prefix'=>'financial-movement'], function() use ($router){
        $router->post('/', 'FinancialMovementController@save');
        $router->get('/', 'FinancialMovementController@get');
        $router->get('/{id}', 'FinancialMovementController@getById');
        $router->put('/{id}', 'FinancialMovementController@update');
        $router->patch('/{id}', 'FinancialMovementController@patch');
        $router->delete('/{id}', 'FinancialMovementController@delete');
    });

    $router->group(['prefix'=>'log-consultation-scores'], function() use ($router){
        $router->post('/', 'LogConsultationScoresController@save');
        $router->get('/', 'LogConsultationScoresController@get');
        $router->get('/{id}', 'LogConsultationScoresController@getById');
        $router->put('/{id}', 'LogConsultationScoresController@update');
        $router->patch('/{id}', 'LogConsultationScoresController@patch');
        $router->delete('/{id}', 'LogConsultationScoresController@delete');
    });
});