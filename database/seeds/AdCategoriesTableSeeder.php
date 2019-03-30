<?php

use Illuminate\Database\Seeder;

class AdCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\AdCategory::create([
            'title'=> 'Vehicles',
            'slug'=>'vehicles',
            'description'=>'Information about the vehicles',
            'avatar'=>'img/product01.png'
        ]);

        App\AdCategory::create([
            'title'=>'Mobile Phones and Tablets',
            'slug'=>'mobile-phones-and-tablets',
            'description'=>'Information about mobile phones and tablets',
            'avatar'=>'img/product01.png'
        ]);

        App\AdCategory::create([
           'title'=>'Home Furniture and Garden',
           'slug'=>'home-furniture-and-garden',
           'description'=>'Information about home furniture and garden',
           'avatar'=>'img/product01.png'
        ]);

        App\AdCategory::create([
            'title'=>'Real Estate',
            'slug'=>'real-estate',
            'description'=>'Information about real estate business',
            'avatar'=>'img/product01.png'
        ]);

        App\AdCategory::create([
            'title'=>'Electronic Video',
            'slug'=>'electronic-video',
            'description'=>'Information about electronic videos',
            'avatar'=>'img/product01.png'
        ]);

        App\AdCategory::create([
            'title'=>'Job Services',
            'slug'=>'job-services',
            'description'=>'description and information about job services',
            'avatar'=>'img/product01.png'
        ]);

        App\AdCategory::create([
            'title'=>'Hobbies, Art, Sport',
            'slug'=>'hobbies-art-sport',
            'description'=>'Information about hobbies art and sport',
            'avatar'=>'img/product01.png'
        ]);

        App\AdCategory::create([
            'title'=>'Animals and Pets',
            'slug'=>'animals-and-pets',
            'description'=>'Information and description of animals and pet category',
            'avatar'=>'img/product01.png'
        ]);

    }
}
