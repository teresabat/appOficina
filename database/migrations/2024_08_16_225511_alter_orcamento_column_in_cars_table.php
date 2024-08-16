<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterOrcamentoColumnInCarsTable extends Migration
{
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->decimal('orcamento', 10, 2)->change(); // 10 dígitos no total e 2 decimais
        });
    }

    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->float('orcamento')->change(); // Alterar para float se necessário
        });
    }
}
