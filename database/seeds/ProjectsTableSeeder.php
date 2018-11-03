<?php

use App\Category;
use App\Project;
use Illuminate\Database\Seeder;

define('TOTAL', 20);
class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('zh_TW');
        Category::truncate();
        Project::truncate();

        //TODO:建立seeding
        foreach (range(1,15)as $i){
            $category = Category::create([
                'name' => '分類'.$i,
            ]);
            foreach (range(1, TOTAL) as $index) {
                $date = \Carbon\Carbon::now()->subDays(TOTAL - $index)->
                addHours(rand(0,24))->addMinutes(rand(0, 59))->addSeconds(rand(0,59));
                Project::create([
                    'name' => $faker->realText(rand(10, 20)),
                    'category_id' => $category->id,
                    'description' => $faker->realText(rand(10, 100)),
                    'started_at' => $date->subDays(TOTAL - $index)->
                addHours(rand(0,24))->addMinutes(rand(0, 59))->addSeconds(rand(0,59)),
                    'ended_at' => $date
                ]);
            }
        }
    }
}
