<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnLevelUserToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // Migration (make:migration add_column_level_user_to_users_table)
    // Menambah kan kolom baru di user
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('level_user', ['admin','user'])->after('email');
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
            $table->dropColumn('level_user');
        });
    }
}
