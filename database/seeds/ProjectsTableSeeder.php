<?php

use App\Category;
use App\Project;
use Illuminate\Database\Seeder;

define('TOTAL', 10);

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        Project::truncate();

        $faker = \Faker\Factory::create('zh_TW');
        $categories = [
            '音樂', '攝影', '出版', '藝術', '設計',
            '飲食', '時尚', '教育', '科技','社會',
            '表演', '遊戲', '地方創生', '電影動畫', '插畫漫畫',
        ];
        $feedback = [
            'feedback_date' => \Carbon\Carbon::now()->addYear(3)->addHours(rand(0, 24))->
            addMinutes(rand(0, 59))->addSeconds(rand(0, 59)),
            'feedback_price' => rand(100,1000),
            'feedback_description' => $faker->realText(rand(10, 30)),
        ];
        $comment = [
            'username' =>$faker->name,
            'comment' => $faker->realText(rand(10, 20)),
            'rate' => rand(0,5),
        ];

        foreach ($categories as $name) {
            $category = Category::create([
                'name' => $name,
            ]);
            foreach (range(1, TOTAL) as $index) {
                Project::create([
                    'fundraiser' =>$faker->name,
                    'email'=>$faker->email,
                    'name' => $faker->realText(rand(10, 12)),
                    'category_id' => rand(1, 15),
                    'brief'=> $faker->realText(rand(10, 20)),
                    'description' => $faker->realText(rand(10, 100)),
                    'started_at' => now()->subDays(TOTAL - $index*8),
                    'ended_at' => now()->addDays(rand(30, 600)),
                    'curr_amount' => rand(1000, 99999999),
                    'goal_amount' => rand(100000, 99999999),
                    'relative_web' => $faker->url,
                    'feedback' => json_encode($feedback),
                    'backer' => rand(0,9999),
                    'comment' => json_encode($comment),
                ]);
            }
        }
    }
}

