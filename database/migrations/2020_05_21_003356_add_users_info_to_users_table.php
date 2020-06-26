<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersInfoToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('sex')->nullable()->after('name');
            $table->integer('age')->nullable()->after('sex');
            $table->string('throwing')->nullable()->after('age');
            $table->string('batting')->nullable()->after('throwing');
            $table->string('favorite_team')->nullable()->after('batting');
            $table->string('appeal')->nullable()->after('favorite_team');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('sex');
            $table->dropColumn('age');
            $table->dropColumn('throwing');
            $table->dropColumn('batting');
            $table->dropColumn('favorite_team');
            $table->dropColumn('appeal');
        });
    }
}
