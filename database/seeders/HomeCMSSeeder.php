<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeCms;

class HomeCMSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeCms::create([
            "heading" => "Find Meeting Venues, Request Quotes, and Book Event Space",
            "sub_heading" => "No commission, no charges, no fees.",
            "banner_image" => "front/img/bann.webp",
            "section_one_heading" => "Discover More",
            "section_one_content" => "The world's top chains, brands, and venues want your meetings! Find out what the top
            chains and brands are doing to make every meeting and event a unique experience.",
            "section_two_heading" => "Put your Game face on at Graduate Hotels",
            "section_two_content" => "With hotels and resorts throughout the US and meeting space for 10 to 1000, there is a distinctive venue to match any event style and size.",
            "section_two_image" => "front/img/i1.webp",
            "blog_one_heading" => "Put your Game face on at Graduate Hotels",
            "blog_one_content" => "From strategic meetings to team-building events, we are here to help you score success every time!",
            "blog_one_image" => "front/img/i2.webp",
            "blog_two_heading" => "Put your Game face on at Graduate Hotels",
            "blog_two_content" => "From strategic meetings to team-building events, we are here to help you score success every time!",
            "blog_two_image" => "front/img/i2.webp",
            "blog_three_heading" => "Put your Game face on at Graduate Hotels",
            "blog_three_content" => "From strategic meetings to team-building events, we are here to help you score success every time!",
            "blog_three_image" => "front/img/i2.webp",
    
        ]);
    }
}
