<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastname')->after('name')->nullable();
            $table->string('phone')->after('name')->nullable(); //
            $table->string('address')->after('name')->nullable(); //
            $table->string('document')->after('name')->nullable(); //
            $table->string('country')->after('name')->nullable(); //
            $table->string('state')->after('name')->nullable(); //
        }); //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('lastname');
            $table->dropColumn('phone'); //
            $table->dropColumn('address'); //
            $table->dropColumn('document'); //
            $table->dropColumn('country'); //
            $table->dropColumn('state'); //
        });
    }
};
