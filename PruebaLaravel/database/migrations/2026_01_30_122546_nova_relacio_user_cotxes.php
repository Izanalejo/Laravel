<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
     public function up()
    {
        Schema::table('cotxes', function(Blueprint $table) {
 	$table->dropColumn('user_id');
           $table->foreignId('user_id')
->nullable()
->constrained()
->nullOnDelete();
        });
    }

    public function down()
    {
        Schema::table('cotxes', function(Blueprint $table) {
           $table->dropColumn('user_id');
	$table->integer('user_id')->nullable();
        });
    }

};
