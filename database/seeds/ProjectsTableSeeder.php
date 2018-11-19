<?php

use App\Category;
use App\Comment;
use App\Feedback;
use App\Project;
use Illuminate\Database\Seeder;

define('TOTAL', 50);

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
        Feedback::truncate();

        $faker = \Faker\Factory::create('zh_TW');
        $categories = [
            '音樂',
            '攝影',
            '出版',
            '藝術',
            '設計',
            '飲食',
            '時尚',
            '教育',
            '科技',
            '社會',
            '表演',
            '遊戲',
            '地方創生',
            '電影動畫',
            '插畫漫畫',
        ];

        foreach ($categories as $name) {
            $category = Category::create([
                'name' => $name,
            ]);
        }
        foreach (range(1, TOTAL) as $index) {
            Project::create([
                'fundraiser' => $faker->name,
                'email' => $faker->email,
                'name' => $faker->realText(rand(10, 12)),
                'category_id' => rand(1, 15),
                'brief' => $faker->realText(rand(10, 20)),
                'description' => $faker->realText(rand(10, 100)),
                'started_at' => now()->subDays(TOTAL - $index * 8),
                'ended_at' => now()->addDays(rand(30, 600)),
                'curr_amount' => rand(1000, 99999999),
                'goal_amount' => rand(100000, 99999999),
                'relative_web' => $faker->url,
                'backer' => rand(0, 9999),
            ]);
            foreach (range(1, rand(1, 5)) as $i) {
                Feedback::create([
                    'project_id' => $index,
                    'date' => now()->addDays(rand(600, 1000)),
                    'price' => rand(100, 99999),
                    'description' => $faker->realText(rand(10, 50)),
                    'backer' => rand(0, 999),
                ]);
            }

            foreach (range(1, rand(1, 5)) as $i) {
                $date = now()->addDays(rand(30, 600));
                Comment::create([
                    'user_id' => 1,
                    'project_id' => $index,
                    'rating' => rand(1, 5),
                    'comment' => $faker->realText(rand(10, 50)),
                    'created_at' => $date,
                    'updated_at' => $date->addDays(rand(0, 30)),
                ]);
            }
        }
    }
}

