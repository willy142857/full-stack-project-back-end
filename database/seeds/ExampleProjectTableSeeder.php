<?php

use App\Category;
use App\Feedback;
use App\Project;
use Illuminate\Database\Seeder;

class ExampleProjectTableSeeder extends Seeder
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
            Category::create([
                'name' => $name,
            ]);
        }

    }
}
