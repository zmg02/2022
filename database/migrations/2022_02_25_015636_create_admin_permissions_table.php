<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_permissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('parent_id');
            $table->string('name')->default('')->comment('名称');
            $table->string('slug')->default('')->comment('转换名称中的空格，大小写');
            $table->string('http_method')->default('');
            $table->text('http_path');
            $table->smallInteger('order')->default(0)->comment('排序');
            $table->unsignedInteger('create_time');
            $table->unsignedInteger('update_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_permissions');
    }
}
