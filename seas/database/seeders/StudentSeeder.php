<?php

namespace Database\Seeders;
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => "Student",
            'email' => "email002@mail.com",
            'password' => Hash::make('12345678'),
            // $teacher->save();
        ]);

        DB::table('students')->insert([
            'name' => "Student03",
            'email' => "email003@mail.com",
            'password' => Hash::make('12345678'),
            // $teacher->save();
        ]);
    }
}
