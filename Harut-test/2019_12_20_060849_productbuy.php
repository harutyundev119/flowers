<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productbuy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('productbuys', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('name');
        $table->string('price');
        $table->string('productid');
        $table->string('productqanak');
        $table->string('sentpeymntsshot');
        $table->string('snetproductaddress');
        $table->string('desire');
        $table->string('datatime');
        $table->string('sentstatus');
        $table->string('paidstatus');
        $table->string('value');
        $table->string('text');
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
