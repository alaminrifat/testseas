<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
        DB::table('teachers')->insert([
            'name' => "Teacher02",
            'email' => "email002@mail.com",
            'password' => Hash::make('12345678'),
            // $teacher->save();
        ]);

        DB::table('teachers')->insert([
            'name' => "Teacher03",
            'email' => "email003@mail.com",
            'password' => Hash::make('12345678'),
            // $teacher->save();
        ]);

        
    }
}
