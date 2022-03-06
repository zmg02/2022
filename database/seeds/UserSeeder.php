<?php

use App\Model\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,10000)->create();
        //未用
        // DB::table('user')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@outlook.com',
        //     'password' => Hash::make('password'),
        // ]);
    }
}
