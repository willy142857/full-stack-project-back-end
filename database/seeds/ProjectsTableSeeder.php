<?php

use App\Category;
use App\Comment;
use App\Feedback;
use App\Project;
use Illuminate\Database\Seeder;



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
        foreach (range(1, 50) as $index) {
            $startAt = now()->subDays(rand(30, 400));
            $endAt = now()->addDays(rand(30, 200));
            Project::create([
                'raising_user_id' => rand(1, 100),
                'fundraiser' => $faker->name,
                'email' => $faker->email,
                'name' => $faker->realText(rand(10, 12)),
                'category_id' => rand(1, 15),
                'brief' => $faker->realText(rand(10, 20)),
                'description' => $faker->realText(rand(10, 100)),
                'started_at' => $startAt,
                'ended_at' => $endAt,
                'curr_amount' => rand(100, 9999999) * 10,
                'goal_amount' => rand(10000, 9999999) * 10,
                'relative_web' => $faker->url,
                'backer' => rand(0, 9999),
            ]);
            foreach (range(1, rand(1, 5)) as $i) {
                Feedback::create([
                    'project_id' => $index,
                    'date' => $endAt->addDays(rand(10, 100)),
                    'price' => rand(10, 9999) * 10,
                    'description' => $faker->realText(rand(10, 50)),
                    'backer' => rand(0, 999),
                ]);
            }

            foreach (range(1, rand(1, 5)) as $i) {
                $date = $startAt->addDays(rand(0, 15));
                Comment::create([
                    'user_id' => rand(1, 100),
                    'project_id' => $index,
                    'rating' => rand(1, 5),
                    'comment' => $faker->realText(rand(10, 50)),
                    'created_at' => $date,
                    'updated_at' => $date->addDays(rand(0, 15)),
                ]);
            }
        }
    }
}

