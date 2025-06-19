<?php
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Schedule;
use App\Models\Student;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        Course::factory()->count(5)->create()->each(function ($course) {
            $course->schedule_id = Schedule::inRandomOrder()->first()->id ?? null;
            $course->student_id = Student::inRandomOrder()->first()->id ?? null;
            $course->save();
        });
    }
}
