<?php
use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {
        Schedule::factory()->count(5)->create();
    }
}

