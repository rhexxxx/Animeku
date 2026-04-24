<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Categories;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Nendroid',
                'slug' => 'nendroid',
                'image' => 'nendroid.png'
            ],
            [
                'name' => 'Scale Figures',
                'slug' => 'scale_figures',
                'image' => 'scale_figures.png'
            ],
            [
                'name' => 'Figma',
                'slug' => 'figma',
                'image' => 'figma.png'
            ],
            [
                'name' => 'Merchandise',
                'slug' => 'merchandise',
                'image' => 'merchandise.png'
            ],
            [
                'name' => 'Model Kit',
                'slug' => 'model_kit',
                'image' => 'model_kit.png'
            ],
            [
                'name' => 'Plush',
                'slug' => 'plush',
                'image' => 'plush.png'
            ],

        ];

        foreach ($categories as $category){
            Categories::create($category);
        }
        $mokit = Categories::where('name', "Model Kit")->first();
        $products = [
            [
                'category_id' => $mokit->id,
                'name' => 'RG 1/144 MSN-04 Sazabi',
                'price' => 170000,
                'stock' => 10,
                'series' => 'Mobile Suit Gundam: Char Counterattack',
                'brand' => 'Bandai',
                'image' => 'sazabi.png',
                'rating' => 5,
                'sold_count' => 124,
                'description' => 'The MSN-04 Sazabi is a mobile suit that appears in Mobile Suit Gundam: Char\'s Counterattack.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'MG 1/100 GAT-X105 Aile Strike Gundam Ver.RM',
                'price' => 550000,
                'stock' => 5,
                'series' => 'Mobile Suit Gundam: Seed',
                'brand' => 'Bandai',
                'image' => 'mg-aile-strike.jpg',
                'rating' => 5,
                'sold_count' => 210,
                'description' => 'A modernized version of the classic Strike Gundam with high detail and articulation.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'HG 1/144 Gundam Aerial',
                'price' => 220000,
                'stock' => 15,
                'series' => 'Mobile Suit Gundam: A Witch From Mercury',
                'brand' => 'Bandai',
                'image' => 'hg-aerial.jpg',
                'rating' => 5,
                'sold_count' => 530,
                'description' => 'The main mobile suit from Mobile Suit Gundam: The Witch from Mercury.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'PG 1/60 RX-78-2 Gundam Unleashed',
                'price' => 3500000,
                'stock' => 2,
                'series' => 'Mobile Suit Gundam',
                'brand' => 'Bandai',
                'image' => 'pg-unleashed.jpg',
                'rating' => 5,
                'sold_count' => 45,
                'description' => 'The ultimate Gunpla experience with a multi-layered internal frame.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'EG 1/144 RX-78-2 Gundam',
                'price' => 100000,
                'stock' => 50,
                'series' => 'Mobile Suit Gundam',
                'brand' => 'Bandai',
                'image' => 'eg-rx-78-2.jpg',
                'rating' => 5,
                'sold_count' => 342,
                'description' => 'The perfect starter kit. Requires no nippers or paint to build a great looking classic Gundam.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'HGCE 1/144 Destiny Gundam',
                'price' => 280000,
                'stock' => 12,
                'series' => 'Mobile Suit Gundam: Seed Destiny',
                'brand' => 'Bandai',
                'image' => 'hg-destiny.jpg',
                'rating' => 4,
                'sold_count' => 89,
                'description' => 'A highly articulated recreation of the Destiny Gundam featuring effect parts for the Wings of Light.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'MG 1/100 Gundam Barbatos',
                'price' => 650000,
                'stock' => 8,
                'series' => 'Mobile Suit Gundam: Iron Blooded Ophans',
                'brand' => 'Bandai',
                'image' => 'mg-barbatos.jpg',
                'rating' => 5,
                'sold_count' => 215,
                'description' => 'Features a fully detailed Gundam Frame internal skeleton and functional piston gimmicks.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'RG 1/144 Hi-Nu Gundam',
                'price' => 550000,
                'stock' => 5,
                'series' => 'Mobile Suit Gundam: Beltorchika Children',
                'brand' => 'Bandai',
                'image' => 'rg-hinu.jpg',
                'rating' => 5,
                'sold_count' => 176,
                'description' => 'One of the best Real Grades ever made, featuring incredible parts separation and articulation.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'PG 1/60 Strike Freedom Gundam',
                'price' => 3800000,
                'stock' => 2,
                'series' => 'Mobile Suit Gundam: Seed',
                'brand' => 'Bandai',
                'image' => 'pg-strike-freedom.jpg',
                'rating' => 5,
                'sold_count' => 14,
                'description' => 'The ultimate display piece featuring gold-plated inner frame parts and massive proportions.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'HGUC 1/144 Kshatriya',
                'price' => 600000,
                'stock' => 4,
                'series' => 'Mobile Suit Gundam: Unicorn',
                'brand' => 'Bandai',
                'image' => 'hg-kshatriya.jpg',
                'rating' => 4,
                'sold_count' => 45,
                'description' => 'A massive High Grade kit featuring four iconic binders that can open to reveal hidden sub-arms.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'MG 1/100 Wing Gundam Zero EW Ver.Ka',
                'price' => 850000,
                'stock' => 7,
                'series' => 'Mobile Suit Gundam: Wing Endless Waltz',
                'brand' => 'Bandai',
                'image' => 'mg-wing-zero-verka.jpg',
                'rating' => 5,
                'sold_count' => 130,
                'description' => 'A beautiful redesign by Hajime Katoki, featuring updated angel wings and improved transformation mechanisms.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'RG 1/144 Unicorn Gundam',
                'price' => 500000,
                'stock' => 15,
                'series' => 'Mobile Suit Gundam: Unicorn',
                'brand' => 'Bandai',
                'image' => 'rg-unicorn.jpg',
                'rating' => 4,
                'sold_count' => 310,
                'description' => 'Features the Advanced MS Joint system allowing a full transformation from Unicorn to Destroy mode at 1/144 scale.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'HG 1/144 Gundam Calibarn',
                'price' => 300000,
                'stock' => 20,
                'series' => 'Mobile Suit Gundam: The Witch From Mercury',
                'brand' => 'Bandai',
                'image' => 'hg-calibarn.jpg',
                'rating' => 5,
                'sold_count' => 420,
                'description' => 'The climactic mobile suit from The Witch from Mercury, equipped with the variable rod rifle.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'MG 1/100 Gundam Dynames',
                'price' => 600000,
                'stock' => 6,
                'series' => 'Mobile Suit Gundam: 00',
                'brand' => 'Bandai',
                'image' => 'mg-dynames.jpg',
                'rating' => 5,
                'sold_count' => 95,
                'description' => 'Features incredible sniper-posing capabilities and detailed full-shield gimmicks.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'FM 1/100 Gundam Aerial',
                'price' => 550000,
                'stock' => 11,
                'series' => 'Mobile Suit Gundam: The Witch From Mercury',
                'brand' => 'Bandai',
                'image' => 'fm-aerial.jpg',
                'rating' => 5,
                'sold_count' => 160,
                'description' => 'A 1/100 scale Aerial with easier assembly than an MG but gorgeous exterior detail and layering.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'HGCE 1/144 Mighty Strike Freedom Gundam',
                'price' => 400000,
                'stock' => 25,
                'series' => 'Mobile Suit Gundam: Seed Freedom',
                'brand' => 'Bandai',
                'image' => 'hg-mighty-strike.jpg',
                'rating' => 5,
                'sold_count' => 280,
                'description' => 'The newest upgrade to the Strike Freedom featuring the new Proud Defender backpack.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'MGEX 1/100 Strike Freedom Gundam',
                'price' => 2100000,
                'stock' => 3,
                'series' => 'Mobile Suit Gundam: Seed Destiny',
                'brand' => 'Bandai',
                'image' => 'mgex-strike-freedom.jpg',
                'rating' => 5,
                'sold_count' => 22,
                'description' => 'Features the most extreme metallic internal frame ever produced for a Gunpla, utilizing multiple gold coatings.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'RG 1/144 God Gundam',
                'price' => 450000,
                'stock' => 18,
                'series' => 'Mobile Fighter G Gundam',
                'brand' => 'Bandai',
                'image' => 'rg-god-gundam.jpg',
                'rating' => 5,
                'sold_count' => 205,
                'description' => 'Boasts some of the most dynamic and flexible articulation of any model kit on the market.',
            ],
            [
                'category_id' => $mokit->id,
                'name' => 'SD EX-Standard RX-0 Unicorn Gundam',
                'price' => 90000,
                'stock' => 30,
                'series' => 'Mobile Suit Gundam: Unicorn',
                'brand' => 'Bandai',
                'image' => 'sd-unicorn.jpg',
                'rating' => 3,
                'sold_count' => 415,
                'description' => 'A fun, quick-to-build super deformed version of the Unicorn Gundam in Destroy Mode.',
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
