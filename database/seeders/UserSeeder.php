<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "Alen";
        $user->email = "alen1@gmail.com";
        $user->password = Hash::make("alen");
        $user->save();

        $user = new User();
        $user->name = "Petar";
        $user->email = "petar1@gmail.com";
        $user->password = Hash::make("petar");
        $user->save();

        $user = new User();
        $user->name = "Luka";
        $user->email = "luka1@gmail.com";
        $user->password = Hash::make("luka");
        $user->save();

        $user = new User();
        $user->name = "Marko";
        $user->email = "marko1@gmail.com";
        $user->password = Hash::make("marko");
        $user->save();
    }
}
