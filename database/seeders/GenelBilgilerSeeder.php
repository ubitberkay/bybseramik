<?php

namespace Database\Seeders;

use App\Models\GenelBilgiler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenelBilgilerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GenelBilgiler::create([
            'title' => 'Hakkımızda',
            'content' => ''
        ]);
    }
}
