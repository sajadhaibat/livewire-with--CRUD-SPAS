<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_logs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('receiver_id');
            $table->foreignId('approve_id');
            $table->longText('purpose');
            $table->bigInteger('amount');
            $table->tinyInteger('cash_type');

            $table->foreign('receiver_id')
                ->references('id')
                ->on('employees')
                ->onDelete('no action');

            $table->foreign('approve_id')
                ->references('id')
                ->on('employees')
                ->onDelete('no action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cash_logs');
    }
}
