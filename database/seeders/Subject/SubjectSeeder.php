<?php

namespace Database\Seeders\Subject;

use App\Models\Subject\Subject;
use Database\Seeders\BaseSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try
        {
            Subject::query()->create([
                'name' => 'Алгебра'
            ]);
        }catch (\Exception $exception)
        {
            echo $exception->getMessage();
        }
    }
}
