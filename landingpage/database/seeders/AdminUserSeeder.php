<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate
        ([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'email_verified_at'=> now(),
            'password'=> Hash::make('default_admin_pass')
        ]);
    }
}
