<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'name' => 'Comprar uma bola de futebol',
                'description' => 'Pro muleque que fica enchendo o saco'
            ],
            [
                'name' => 'Comprar café branco',
                'description' => 'Cafézinho da tarde'
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
