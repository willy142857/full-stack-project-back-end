<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProjectsTableSeeder::class);
        $this->call(Example1ProjectTableSeeder::class);
        $this->call(Example2ProjectTableSeeder::class);
        $this->call(Example3ProjectTableSeeder::class);
        $this->call(Example4ProjectTableSeeder::class);
        $this->call(Example5ProjectTableSeeder::class);
        $this->call(Example6ProjectTableSeeder::class);
        $this->call(Example7ProjectTableSeeder::class);
        $this->call(Example8ProjectTableSeeder::class);
        $this->call(Example9ProjectTableSeeder::class);
        $this->call(Example10ProjectTableSeeder::class);
        $this->call(Example11ProjectTableSeeder::class);
        $this->call(Example12ProjectTableSeeder::class);
        $this->call(Example13ProjectTableSeeder::class);
        $this->call(Example14ProjectTableSeeder::class);
        $this->call(Example15ProjectTableSeeder::class);
    }
}
