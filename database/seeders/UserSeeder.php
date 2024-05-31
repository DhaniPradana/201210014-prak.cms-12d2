<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = "Albert Chandra";
        $user->email = "albert.ch@mercubuana-yogya.ac.id";
        $user->password = bcrypt("1234");
        $user->phone = "123456789";
        $user->alamat = "Yogyakarta";
        $user->role = "admin";
        $user->save();
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
