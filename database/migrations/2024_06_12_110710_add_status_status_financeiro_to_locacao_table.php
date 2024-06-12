<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('locacaos', function (Blueprint $table) {
            $table->boolean('status_financeiro');
            $table->boolean('status_pago_financeiro');
            $table->string('parcelas_financeiro');
            $table->string('formaPgmto_financeiro');
            $table->decimal('valor_parcela_financeiro',10,2);
            $table->decimal('valor_total_financeiro',10,2);
            $table->date('data_vencimento_financeiro');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('locacao', function (Blueprint $table) {
            //
        });
    }
};
