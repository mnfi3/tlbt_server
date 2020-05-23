<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsTrailAndPasswordPlainToMemberAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('member_apps', function (Blueprint $table) {
            $table->boolean('is_trail')->default(0)->after('auth_at');
            $table->string('plain_password')->default('')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('member_apps', function (Blueprint $table) {
            //
        });
    }
}
