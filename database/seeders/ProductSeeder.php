<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Onigiri', 'price' => 3000, 'stock' => 20, 'photo' => 'img/onigiri.jpeg', 'description' => 'Nasi kepal jepang yang dibungkus dengan nori dan diisi dengan berbagai macam isian.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jus', 'price' => 5000, 'stock' => 30, 'photo' => 'img/jus.jpg', 'description' => 'Minuman segar yang terbuat dari berbagai macam buah segar.','created_at' => now(), 'updated_at' => now()],
            ['name' => 'Martabak manis', 'price' => 2000, 'stock' => 35, 'photo' => 'img/martabak.jpg', 'description' => 'Martabak dengan isian manis seperti coklat, keju, dan kacang.','created_at' => now(), 'updated_at' => now()],
            ['name' => 'Brownies', 'price' => 3000, 'stock' => 15, 'photo' => 'img/brownies.jpeg', 'description' => 'Kue coklat yang lembut dan manis, cocok untuk cemilan.','created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kue soes', 'price' => 2000, 'stock' => 25, 'photo' => 'img/kue soes.jpeg', 'description' => 'Kue berbentuk bundar dengan isian vla yang lembut dan manis.','created_at' => now(), 'updated_at' => now()],
            ['name' => 'Risol', 'price' => 3000, 'stock' => 40, 'photo' => 'img/risol.jpg', 'description' => 'Gorengan berisi sayuran dan daging yang dibungkus dengan kulit tipis dan digoreng.','created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sosis', 'price' => 3000, 'stock' => 25, 'photo' => 'img/sosis.jpg', 'description' => 'Sosis yang dapat dinikmati sebagai cemilan atau pelengkap makanan.','created_at' => now(), 'updated_at' => now()],
            ['name' => 'nasi ayam bumbu', 'price' => 10000, 'stock' => 30, 'photo' => 'img/nasi ayam bumbu.jpeg', 'description' => 'Nasi dan Ayam bumbu yang disajikan dengan bumbu rempah yang khas dan menggugah selera.','created_at' => now(), 'updated_at' => now()],
            ['name' => 'bakwan', 'price' => 1000, 'stock' => 45, 'photo' => 'img/bakwan.jpg', 'description' => 'Gorengan renyah yang terbuat dari campuran sayuran segar dan tepung, cocok dinikmati sebagai camilan atau lauk.','created_at' => now(), 'updated_at' => now()],
            ['name' => 'dimsum', 'price' => 2000, 'stock' => 45, 'photo' => 'img/dimsum.jpg', 'description' =>  'Dimsum dengan isian ayam yang lezat.','created_at' => now(), 'updated_at' => now()],
            ['name' => 'pie', 'price' => 2000, 'stock' => 45, 'photo' => 'img/pie.jpg', 'description' =>  'Pie buah dengan isian apel.','created_at' => now(), 'updated_at' => now()],
            ['name' => 'putu ayu.jpg', 'price' => 1000, 'stock' => 45, 'photo' => 'img/putu ayu.jpg', 'description' =>   'Kue tradisional dengan taburan kelapa.','created_at' => now(), 'updated_at' => now()],

            // Tambahkan data produk lainnya sesuai kebutuhan

        ]);
    }
}

