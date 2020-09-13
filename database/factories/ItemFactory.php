<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
    	'codeno'=>$faker->codeno,
        'name' =>$faker->name,
        'photo'=>'backendtemplate/categoryimg/'. $faker->image('public/backendtemplate/categoryimg',100,100,null,false),
        'price'=>$faker->price,
        'discount'=>$faker->discount,
        'description'=>$faker->description,
        'brand_id'=>random_int(\DB::table('brands')->min('id'),\DB::table('brands')->max('id')),
        'subcategory_id' =>random_int(\DB::table('subcategories')->min('id'),\DB::table('subcategories')->max('id')),
    ];
});
