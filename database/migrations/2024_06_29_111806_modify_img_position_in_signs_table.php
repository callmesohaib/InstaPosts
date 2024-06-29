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
        Schema::table('signs', function (Blueprint $table) {
            $table->dropColumn('img');
        });

        Schema::table('signs', function (Blueprint $table) {
            $table->string('img')->default('profile.jpg')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('signs', function (Blueprint $table) {
            $table->dropColumn('img');
        });

        Schema::table('signs', function (Blueprint $table) {
            $table->string('img')->default('profile.jpg');
        });
    }
};
