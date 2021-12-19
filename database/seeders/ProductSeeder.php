<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        $group1 = Group::create([
            'name' => 'ბურგერი'
        ]);

        $arr1 = array("ორმაგი ბიგ მაკი", "ბიგ მაკი ბეკონით", "მაესტრო კლასიკი", "მაესტრო ჩიქენი", "მაესტრო ჩიზი");

        foreach ($arr1 as $item){
            Product::create([
                'group_id' => $group1->id,
                'name' => $item,
                'description' => Str::random(50),
                'price' => random_int(1, 50)
            ]);
        }

        $group2 = Group::create([
            'name' => 'სენდვიჩი'
        ]);

        $arr2 = array("ჩიქენ სენდვიჩი", "ფიშმაკი", "ტოსტი ბეკონით", "ჰამბურგერი", "ვეჯი ბურგერი");

        foreach ($arr2 as $item){
            Product::create([
                'group_id' => $group2->id,
                'name' => $item,
                'description' => Str::random(50),
                'price' => random_int(1, 50)
            ]);
        }

        $group3 = Group::create([
            'name' => 'ჩიზბურგერი'
        ]);

        $arr3 = array("ჩიზბურგერი", "ფილე-ო-ფიში", "მაკ ტოსტი", "ბიგ თეისთი", "ორმაგი ჩიზბურგერი");

        foreach ($arr3 as $item){
            Product::create([
                'group_id' => $group3->id,
                'name' => $item,
                'description' => Str::random(50),
                'price' => random_int(1, 50)
            ]);
        }
    }
}
