<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_tests_', function (Blueprint $table) {
            $table->id();
            $table->string("sample");
            $table->string("tube");
            $table->string("protocol");
            $table->string("code");
            $table->decimal('amount', 5, 2);
            $table->string("frequency");
            $table->boolean('favorite') -> default(false);
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
        Schema::dropIfExists('_tests_');
    }
}
