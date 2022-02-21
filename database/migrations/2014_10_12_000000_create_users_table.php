<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //注意：关于int类型全都当做主键，添加了unsigned not null auto_increment primary key，设置default后就好
            $table->id();
            $table->string('name',55);
            $table->string('email', 100)->unique();
            $table->string('phone', 30)->unique();
            $table->string('password', 32);
            $table->string('icon')->comment('头像');
            $table->string('session_id', 32);
            $table->tinyInteger('is_admin')->default(0)->comment('是否管理员');
            $table->tinyInteger('is_vip')->default(0)->comment('是否VIP');
            $table->tinyInteger('is_active')->default(0)->comment('是否活跃用户');
            $table->tinyInteger('is_verify')->default(0)->comment('是否验证');
            $table->tinyInteger('status')->default(1)->comment('用户状态：1正常 2禁用 3申请恢复');
            $table->unsignedInteger('order_count')->default(0)->comment('订单总数');
            $table->unsignedInteger('payment_count')->default(0)->comment('付款完成订单总数');
            $table->decimal('payment_price', 10 ,2)->default('0')->comment('付款完成订单总额');
            $table->string('come_from', 55)->default('PC')->comment('来源');
            $table->smallInteger('login_count')->default(0)->comment('登录次数');
            $table->unsignedInteger('last_login_time')->comment('最后一次登录时间');
            $table->string('last_login_ip', 20)->comment('最后一次登录IP');
            $table->unsignedInteger('create_time');
            $table->unsignedInteger('update_time');
            //->charset('utf8')->collation('utf8_general_ci')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
