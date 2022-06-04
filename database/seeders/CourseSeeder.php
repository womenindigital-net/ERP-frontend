<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Course::factory()->count(10)->create();
        $courses = ['Course 001', 'Course 002', 'Course 003', 'Course 004', 'Course 005'];

        for ($i = 0; $i < 10; $i++) {
            $custom[] = [
                'title' => "Course _$i",
                'amount'=> rand(100, 1000),
                'duration' => rand(50, 1000),
                'parent_course_id' => null
            ];

            dd($custom);

            $custom[] = [
                'title' => "Course _$i",
                'amount'=> rand(100, 1000),
                'duration' => rand(50, 1000),
                'parent_course_id' => Course::inRandomOrder()->first()->id
            ];
        }
        dd($custom);
        DB::table('courses')->insert($custom ?? []);
    }
}
