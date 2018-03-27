<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBoolsToUsereventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('userevents', function (Blueprint $table) {
            $table->timestamp('starred_at')->nullable();
            $table->timestamp('hidden_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userevents', function (Blueprint $table) {
            $table->dropColumn('starred_at');
            $table->dropColumn('hidden_at');
        });
    }
}
