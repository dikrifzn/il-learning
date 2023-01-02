<?php

namespace Database\Seeders;

use App\Models\Submission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Submission::insert([
            [
                'name' => "Modul 1",
                'deadline' => "2023-01-10",
                "lecturer_id" => 1,
                "course_id" => 1,
                "classroom_id" => 1,
            ],
            [
                'name' => "Modul 2",
                'deadline' => "2023-01-10",
                "lecturer_id" => 1,
                "course_id" => 1,
                "classroom_id" => 1,
            ],
            [
                'name' => "Modul 3",
                'deadline' => "2023-01-10",
                "lecturer_id" => 1,
                "course_id" => 1,
                "classroom_id" => 1,
            ],
        ]);
    }
}
