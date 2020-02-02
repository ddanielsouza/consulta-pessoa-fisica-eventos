<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\BuyCreditCard;
use App\Models\FinancialMovement;
use App\Models\LogConsultationScores;

class Payloads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        for($i = 0; $i < 1000; $i ++){
            for($x = 0; $x < rand(0, 50); $x++){
                BuyCreditCard::create([
                    'purchasePrice'=> rand(1, 10000),
                    'registry' => sprintf('%011d', $i),
                    'cardOperator' => 'TEST BANK',
                    'store' => 'LOJA DO SEU ZÉ'
                ]);
            }

            for($x = 0; $x < rand(0, 50); $x++){
                FinancialMovement::create([
                    'isEntry'=> rand(1, 2) % 2 == 0,
                    'registry' => sprintf('%011d', $i),
                    'amounts' => rand(1, 5000)
                ]);
            }

            for($x = 0; $x < rand(0, 50); $x++){
                LogConsultationScores::create([
                    'description'=> 'Consulta de teste',
                    'registry' => sprintf('%011d', $i),
                    'bureau' => 'Srs'
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
