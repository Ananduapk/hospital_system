<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; // Import the DB facade

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Insert default roles
        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'Patient'],
            ['id' => 2, 'name' => 'Doctor']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Remove default roles
        DB::table('roles')->whereIn('id', [1, 2])->delete();
    }
}
