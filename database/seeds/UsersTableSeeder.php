<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('zh_TW');

        foreach (range(1, 100) as $index) {
            $updatedAt = now()->subDays(rand(0, 500));
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make($faker->password),
                'phone' => $faker->phoneNumber,
                'description' => $faker->realText(rand(10, 100)),
                'sex' => ($index % 2 == 0) ? '男' : '女',
                'address' => $faker->address,
                'birth' => now()->subDays(rand(5840, 36500)),
                'created_at' => $updatedAt->subDays(rand(1, 3000)),
                'updated_at' => $updatedAt,
            ]);
        }

    }
}
