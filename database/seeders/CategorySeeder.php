<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Кресла',
            'image' => 'https://nordicdesign.ru/wp-content/uploads/2020/04/warmnordic-dwell-chair-interior.jpg',
            'description' => 'Уютные кресла для дома и офиса...',
        ]);
        DB::table('categories')->insert([
            'name' => 'Компьютерные Кресла',
            'image' => 'https://nordicdesign.ru/wp-content/uploads/2021/06/garsnas-armchair-office-lina-5.jpg',
            'description' => 'Компьютерные кресла для офиса...',
        ]);
        DB::table('categories')->insert([
            'name' => 'Диваны',
            'image' => 'https://nordicdesign.ru/wp-content/uploads/2021/04/handwark-modular-sofa-interior-2.jpg',
            'description' => 'Качественные диваны для дома...',
        ]);
        DB::table('categories')->insert([
            'name' => 'Шкафы',
            'image' => 'https://avatars.mds.yandex.net/get-mpic/5204767/img_id989655230992674932.jpeg/600x800',
            'description' => 'Современные шкафы для вашего дома...',
        ]);
        DB::table('categories')->insert([
            'name' => 'Компьютерные столы',
            'image' => 'https://avatars.mds.yandex.net/get-mpic/3732535/img_id7247172670942399031.jpeg/600x800',
            'description' => 'Просторные столы для комфортной работы и учебы...',
        ]);
        DB::table('categories')->insert([
            'name' => 'Декор и текстиль',
            'image' => 'https://nordicdesign.ru/wp-content/uploads/2020/01/warm-nordic-beak-bird-oiled-solid-teak-interior-7.jpg',
            'description' => 'Сделайте свой дом немного уютнее...',
        ]);
    }
}
