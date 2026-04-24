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
       $products = [
            [
                'name' => 'RG 1/144 MSN-04 Sazabi',
                'price' => 170000,
                'stock' => 10,
                'series' => 'Real Grade (RG)',
                'brand' => 'Bandai',
                'image' => 'sazabi.png',
                'rating' => 5,
                'sold_count' => 124,
                'description' => 'The MSN-04 Sazabi is a mobile suit that appears in Mobile Suit Gundam: Char\'s Counterattack.',
            ],
            [
                'name' => 'MG 1/100 GAT-X105 Aile Strike Gundam Ver.RM',
                'price' => 550000,
                'stock' => 5,
                'series' => 'Master Grade (MG)',
                'brand' => 'Bandai',
                'image' => 'mg-aile-strike.jpg',
                'rating' => 5,
                'sold_count' => 210,
                'description' => 'A modernized version of the classic Strike Gundam with high detail and articulation.',
            ],
            [
                'name' => 'HG 1/144 Gundam Aerial',
                'price' => 220000,
                'stock' => 15,
                'series' => 'High Grade (HG)',
                'brand' => 'Bandai',
                'image' => 'hg-aerial.jpg',
                'rating' => 5,
                'sold_count' => 530,
                'description' => 'The main mobile suit from Mobile Suit Gundam: The Witch from Mercury.',
            ],
            [
                'name' => 'PG 1/60 RX-78-2 Gundam Unleashed',
                'price' => 3500000,
                'stock' => 2,
                'series' => 'Perfect Grade (PG)',
                'brand' => 'Bandai',
                'image' => 'pg-unleashed.jpg',
                'rating' => 5,
                'sold_count' => 45,
                'description' => 'The ultimate Gunpla experience with a multi-layered internal frame.',
            ],
            [
                'name' => 'EG 1/144 RX-78-2 Gundam',
                'price' => 100000,
                'stock' => 50,
                'series' => 'Entry Grade (EG)',
                'brand' => 'Bandai',
                'image' => 'eg-rx-78-2.jpg',
                'rating' => 5,
                'sold_count' => 342,
                'description' => 'The perfect starter kit. Requires no nippers or paint to build a great looking classic Gundam.',
            ],
            [
                'name' => 'HGCE 1/144 Destiny Gundam',
                'price' => 280000,
                'stock' => 12,
                'series' => 'High Grade (HG)',
                'brand' => 'Bandai',
                'image' => 'hg-destiny.jpg',
                'rating' => 4,
                'sold_count' => 89,
                'description' => 'A highly articulated recreation of the Destiny Gundam featuring effect parts for the Wings of Light.',
            ],
            [
                'name' => 'MG 1/100 Gundam Barbatos',
                'price' => 650000,
                'stock' => 8,
                'series' => 'Master Grade (MG)',
                'brand' => 'Bandai',
                'image' => 'mg-barbatos.jpg',
                'rating' => 5,
                'sold_count' => 215,
                'description' => 'Features a fully detailed Gundam Frame internal skeleton and functional piston gimmicks.',
            ],
            [
                'name' => 'RG 1/144 Hi-Nu Gundam',
                'price' => 550000,
                'stock' => 5,
                'series' => 'Real Grade (RG)',
                'brand' => 'Bandai',
                'image' => 'rg-hinu.jpg',
                'rating' => 5,
                'sold_count' => 176,
                'description' => 'One of the best Real Grades ever made, featuring incredible parts separation and articulation.',
            ],
            [
                'name' => 'PG 1/60 Strike Freedom Gundam',
                'price' => 3800000,
                'stock' => 2,
                'series' => 'Perfect Grade (PG)',
                'brand' => 'Bandai',
                'image' => 'pg-strike-freedom.jpg',
                'rating' => 5,
                'sold_count' => 14,
                'description' => 'The ultimate display piece featuring gold-plated inner frame parts and massive proportions.',
            ],
            [
                'name' => 'HGUC 1/144 Kshatriya',
                'price' => 600000,
                'stock' => 4,
                'series' => 'High Grade (HG)',
                'brand' => 'Bandai',
                'image' => 'hg-kshatriya.jpg',
                'rating' => 4,
                'sold_count' => 45,
                'description' => 'A massive High Grade kit featuring four iconic binders that can open to reveal hidden sub-arms.',
            ],
            [
                'name' => 'MG 1/100 Wing Gundam Zero EW Ver.Ka',
                'price' => 850000,
                'stock' => 7,
                'series' => 'Master Grade (MG)',
                'brand' => 'Bandai',
                'image' => 'mg-wing-zero-verka.jpg',
                'rating' => 5,
                'sold_count' => 130,
                'description' => 'A beautiful redesign by Hajime Katoki, featuring updated angel wings and improved transformation mechanisms.',
            ],
            [
                'name' => 'RG 1/144 Unicorn Gundam',
                'price' => 500000,
                'stock' => 15,
                'series' => 'Real Grade (RG)',
                'brand' => 'Bandai',
                'image' => 'rg-unicorn.jpg',
                'rating' => 4,
                'sold_count' => 310,
                'description' => 'Features the Advanced MS Joint system allowing a full transformation from Unicorn to Destroy mode at 1/144 scale.',
            ],
            [
                'name' => 'HG 1/144 Gundam Calibarn',
                'price' => 300000,
                'stock' => 20,
                'series' => 'High Grade (HG)',
                'brand' => 'Bandai',
                'image' => 'hg-calibarn.jpg',
                'rating' => 5,
                'sold_count' => 420,
                'description' => 'The climactic mobile suit from The Witch from Mercury, equipped with the variable rod rifle.',
            ],
            [
                'name' => 'MG 1/100 Gundam Dynames',
                'price' => 600000,
                'stock' => 6,
                'series' => 'Master Grade (MG)',
                'brand' => 'Bandai',
                'image' => 'mg-dynames.jpg',
                'rating' => 5,
                'sold_count' => 95,
                'description' => 'Features incredible sniper-posing capabilities and detailed full-shield gimmicks.',
            ],
            [
                'name' => 'FM 1/100 Gundam Aerial',
                'price' => 550000,
                'stock' => 11,
                'series' => 'Full Mechanics (FM)',
                'brand' => 'Bandai',
                'image' => 'fm-aerial.jpg',
                'rating' => 5,
                'sold_count' => 160,
                'description' => 'A 1/100 scale Aerial with easier assembly than an MG but gorgeous exterior detail and layering.',
            ],
            [
                'name' => 'HGCE 1/144 Mighty Strike Freedom Gundam',
                'price' => 400000,
                'stock' => 25,
                'series' => 'High Grade (HG)',
                'brand' => 'Bandai',
                'image' => 'hg-mighty-strike.jpg',
                'rating' => 5,
                'sold_count' => 280,
                'description' => 'The newest upgrade to the Strike Freedom featuring the new Proud Defender backpack.',
            ],
            [
                'name' => 'MGEX 1/100 Strike Freedom Gundam',
                'price' => 2100000,
                'stock' => 3,
                'series' => 'Master Grade Extreme (MGEX)',
                'brand' => 'Bandai',
                'image' => 'mgex-strike-freedom.jpg',
                'rating' => 5,
                'sold_count' => 22,
                'description' => 'Features the most extreme metallic internal frame ever produced for a Gunpla, utilizing multiple gold coatings.',
            ],
            [
                'name' => 'RG 1/144 God Gundam',
                'price' => 450000,
                'stock' => 18,
                'series' => 'Real Grade (RG)',
                'brand' => 'Bandai',
                'image' => 'rg-god-gundam.jpg',
                'rating' => 5,
                'sold_count' => 205,
                'description' => 'Boasts some of the most dynamic and flexible articulation of any model kit on the market.',
            ],
            [
                'name' => 'SD EX-Standard RX-0 Unicorn Gundam',
                'price' => 90000,
                'stock' => 30,
                'series' => 'SD Gundam',
                'brand' => 'Bandai',
                'image' => 'sd-unicorn.jpg',
                'rating' => 3,
                'sold_count' => 415,
                'description' => 'A fun, quick-to-build super deformed version of the Unicorn Gundam in Destroy Mode.',
            ]
        ];
        $categories = [
            [
                'name' => 'Nendroid',
                'image' => 'nendroid.png'
            ],
            [
                'name' => 'Scale Figures',
                'image' => 'scale_figures.png'
            ],
            [
                'name' => 'Figma',
                'image' => 'figma.png'
            ],
            [
                'name' => 'Merchandise',
                'image' => 'merchandise.png'
            ],
            [
                'name' => 'Model Kit',
                'image' => 'model_kit.png'
            ],
            [
                'name' => 'Plush',
                'image' => 'plush.png'
            ],

        ];

        foreach ($products as $product) {
            Product::create($product);
        }
        foreach ($categories as $category){
            Categories::create($category);
        }
    }
}
