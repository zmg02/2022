<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlertAdminPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin_permissions', function (Blueprint $table) {
            $table->renameColumn('create_time','created_at');
            $table->renameColumn('update_time','updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin_permissions', function (Blueprint $table) {
            $table->renameColumn('created_at','create_time');
            $table->renameColumn('updated_at','update_time');
        });
    }
}
