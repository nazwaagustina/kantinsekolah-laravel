<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
   
    public function run()
    {
        Menu::create(['name' => 'Nasi Ayam Bumbu', 'price' => 10000 ]);
        Menu::create(['name' => 'Hotdog', 'price' => 8000 ]);
        // Tambahkan item menu lainnya
    }
}
