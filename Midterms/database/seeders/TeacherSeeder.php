<?php
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Course;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::inRandomOrder()->limit(5)->get();

        foreach ($users as $user) {
            Teacher::factory()->create([
                'user_id' => $user->id,
                'course_id' => rand(1, 5), // adjust as needed
            ]);
        }
    }
}
