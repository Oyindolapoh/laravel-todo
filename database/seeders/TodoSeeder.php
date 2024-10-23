<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodoSeeder extends Seeder
{
    public function run()
    {
        Todo::create([
            'title' => 'First Todo',
            'description' => 'This is the first todo item',
            'completed' => false,
        ]);

        Todo::create([
            'title' => 'Second Todo',
            'description' => 'This is the second todo item',
            'completed' => true,
        ]);
    }
}
