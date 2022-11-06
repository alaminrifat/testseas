<?php

namespace Database\Seeders;

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => "admin1",
            'email' => "admin1@mail.com",
            'password' => Hash::make('12345678'),
            // $teacher->save();
        ]);

        DB::table('admins')->insert([
            'name' => "admin2",
            'email' => "admin2@mail.com",
            'password' => Hash::make('12345678'),
            // $teacher->save();
        ]);
    }
}
