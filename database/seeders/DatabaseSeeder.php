<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Student::create([
            'name' => 'Student',
            'lastname' => '1',
            'address' => 'Address ',
            'classroom_id' => 1
        ]);
        Student::create([
            'name' => 'Student',
            'lastname' => '2',
            'address' => 'Address ',
            'classroom_id' => 2
        ]);
        Student::create([
            'name' => 'Student',
            'lastname' => '3',
            'address' => 'Address ',
            'classroom_id' => 2
        ]);
        Student::create([
            'name' => 'Student',
            'lastname' => '4',
            'address' => 'Address ',
            'classroom_id' => 3
        ]);
        Student::create([
            'name' => 'Student',
            'lastname' => '5',
            'address' => 'Address ',
            'classroom_id' => 1
        ]);
        Student::create([
            'name' => 'Student',
            'lastname' => '6',
            'address' => 'Address ',
            'classroom_id' => 3
        ]);
        Student::create([
            'name' => 'Student',
            'lastname' => '7',
            'address' => 'Address ',
            'classroom_id' => 4
        ]);
        Student::create([
            'name' => 'Student',
            'lastname' => '8',
            'address' => 'Address ',
            'classroom_id' => 1
        ]);
        Student::create([
            'name' => 'Student',
            'lastname' => '9',
            'address' => 'Address ',
            'classroom_id' => 5
        ]);
        Student::create([
            'name' => 'Student',
            'lastname' => '10',
            'address' => 'Address ',
            'classroom_id' => 4
        ]);

        Classroom::create([
            'course_name' => 'course 1',
            'room_name' => 'room 1 ',
        ]);
        Classroom::create([
            'course_name' => 'course 2',
            'room_name' => 'room 2 ',
        ]);
        Classroom::create([
            'course_name' => 'course 3',
            'room_name' => 'room 3 ',
        ]);
        Classroom::create([
            'course_name' => 'course 4',
            'room_name' => 'room 4 ',
        ]);
        Classroom::create([
            'course_name' => 'course 5',
            'room_name' => 'room 5 ',
        ]);
        Classroom::create([
            'course_name' => 'course 6',
            'room_name' => 'room 6 ',
        ]);
        Classroom::create([
            'course_name' => 'course 7',
            'room_name' => 'room 7 ',
        ]);
        Classroom::create([
            'course_name' => 'course 8',
            'room_name' => 'room 8 ',
        ]);
        Classroom::create([
            'course_name' => 'course 9',
            'room_name' => 'room 9 ',
        ]);
        Classroom::create([
            'course_name' => 'course 10',
            'room_name' => 'room 10 ',
        ]);
    }
}
