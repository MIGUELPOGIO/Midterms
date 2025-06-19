<?php
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\User;
use App\Models\Course;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::inRandomOrder()->limit(5)->get();

        foreach ($users as $user) {
            Student::factory()->create([
                'user_id' => $user->id,
                'course_id' => rand(1, 5),
            ]);
        }
    }
}
