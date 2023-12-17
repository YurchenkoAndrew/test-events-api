<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition(): array
    {
        // Получаем случайного пользователя
        $user = User::inRandomOrder()->first();

        // Получаем нескольких других случайных пользователей
        $memberIds = User::inRandomOrder()->limit(3)->pluck('id')->toArray();

        return [
            'title' => $this->faker->word(),
            'text' => $this->faker->text(),
            'user_id' => $user->id,
            'member_ids' => $memberIds,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
