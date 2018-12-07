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
        Comment::truncate();

        $faker = \Faker\Factory::create('zh_TW');

        foreach (range(1, 30) as $index) {
            $startAt = now()->subDays(rand(0, 20));

            foreach (range(1, rand(1, 5)) as $i) {
                $date = $startAt->addDays(rand(0, 15));
                Comment::create([
                    'user_id' => rand(1, 29),
                    'project_id' => $index,
                    'rating' => rand(1, 5),
                    'comment' => $faker->realText(rand(10, 50)),
                    'created_at' => $date,
                    'updated_at' => $date,
                ]);
            }
        }
    }
}

