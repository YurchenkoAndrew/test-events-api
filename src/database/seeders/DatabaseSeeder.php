<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Создаем 10 пользователей
        $users = User::factory(10)->create();

        // Для каждого пользователя создаем профиль
        foreach ($users as $user) {
            Profile::factory()->create(['user_id' => $user->id]);
        }

        Event::factory(10)->create();
    }
}
