<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();
        
        $products = [
            [
                'name' => 'Ноутбук HP Pavilion',
                'description' => '15.6" Full HD, Intel Core i5, 8GB RAM, 256GB SSD',
                'price' => 49999.99,
                'category_id' => $categories->where('name', 'легкий')->first()->id
            ],
            [
                'name' => 'Смартфон Samsung Galaxy S21',
                'description' => '6.2" AMOLED, 128GB, 5G',
                'price' => 69999.99,
                'category_id' => $categories->where('name', 'хрупкий')->first()->id
            ],
            [
                'name' => 'Холодильник LG',
                'description' => 'No Frost, 350L, A++',
                'price' => 89999.99,
                'category_id' => $categories->where('name', 'тяжелый')->first()->id
            ],
            [
                'name' => 'Планшет iPad Pro',
                'description' => '12.9" Retina, M1, 256GB',
                'price' => 129999.99,
                'category_id' => $categories->where('name', 'хрупкий')->first()->id
            ],
            [
                'name' => 'Стиральная машина Bosch',
                'description' => '7kg, A+++, EcoSilence Drive',
                'price' => 45999.99,
                'category_id' => $categories->where('name', 'тяжелый')->first()->id
            ],
            [
                'name' => 'Наушники Sony WH-1000XM4',
                'description' => 'Беспроводные, шумоподавление',
                'price' => 29999.99,
                'category_id' => $categories->where('name', 'хрупкий')->first()->id
            ],
            [
                'name' => 'Микроволновка Samsung',
                'description' => '28L, Grill, Smart Defrost',
                'price' => 15999.99,
                'category_id' => $categories->where('name', 'тяжелый')->first()->id
            ],
            [
                'name' => 'Умные часы Apple Watch',
                'description' => 'Series 7, GPS, 41mm',
                'price' => 39999.99,
                'category_id' => $categories->where('name', 'хрупкий')->first()->id
            ],
            [
                'name' => 'Пылесос Dyson',
                'description' => 'Беспроводной, V11',
                'price' => 59999.99,
                'category_id' => $categories->where('name', 'легкий')->first()->id
            ],
            [
                'name' => 'Кофемашина DeLonghi',
                'description' => 'Автоматическая, капучино',
                'price' => 79999.99,
                'category_id' => $categories->where('name', 'тяжелый')->first()->id
            ],
            [
                'name' => 'Фотоаппарат Sony A7 III',
                'description' => 'Беззеркальный, 24MP',
                'price' => 159999.99,
                'category_id' => $categories->where('name', 'хрупкий')->first()->id
            ],
            [
                'name' => 'Игровая консоль PS5',
                'description' => 'Digital Edition, 825GB',
                'price' => 39999.99,
                'category_id' => $categories->where('name', 'легкий')->first()->id
            ],
            [
                'name' => 'Монитор Dell 27"',
                'description' => '2K, 144Hz, G-Sync',
                'price' => 34999.99,
                'category_id' => $categories->where('name', 'хрупкий')->first()->id
            ],
            [
                'name' => 'Принтер HP LaserJet',
                'description' => 'Лазерный, МФУ, WiFi',
                'price' => 19999.99,
                'category_id' => $categories->where('name', 'тяжелый')->first()->id
            ],
            [
                'name' => 'Клавиатура Razer',
                'description' => 'Механическая, RGB',
                'price' => 12999.99,
                'category_id' => $categories->where('name', 'легкий')->first()->id
            ],
            [
                'name' => 'Мышь Logitech G Pro',
                'description' => 'Беспроводная, RGB',
                'price' => 9999.99,
                'category_id' => $categories->where('name', 'легкий')->first()->id
            ],
            [
                'name' => 'Колонки JBL',
                'description' => 'Bluetooth, 40W',
                'price' => 14999.99,
                'category_id' => $categories->where('name', 'хрупкий')->first()->id
            ],
            [
                'name' => 'Электросамокат Xiaomi',
                'description' => '30km/h, 30km пробег',
                'price' => 39999.99,
                'category_id' => $categories->where('name', 'легкий')->first()->id
            ],
            [
                'name' => 'Робот-пылесос iRobot',
                'description' => 'WiFi, картография',
                'price' => 49999.99,
                'category_id' => $categories->where('name', 'легкий')->first()->id
            ],
            [
                'name' => 'Умный дом Xiaomi',
                'description' => 'Комплект датчиков и ламп',
                'price' => 15999.99,
                'category_id' => $categories->where('name', 'хрупкий')->first()->id
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
