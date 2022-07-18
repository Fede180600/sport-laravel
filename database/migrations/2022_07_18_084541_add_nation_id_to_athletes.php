<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNationIdToAthletes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('athletes', function (Blueprint $table) {
            $table->unsignedBigInteger('nation_id')->nullable()->after('name');
            $table->foreign('nation_id')
            ->references('id')
            ->on('nations')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('athletes', function (Blueprint $table) {
            $table->dropForeign('athletes_nation_id_foreign');
            $table->dropColumn('nation_id');
        });
    }
}
