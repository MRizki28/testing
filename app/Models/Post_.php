<?php

namespace App\Models;



class Post
{
    private static $blog_post = [
        [
            
            "tittle" =>"Ocha cantik",
            "slugs" =>"ocha-cantik",
            "author"=>"Muhammad Rizki",
            "body"=>" Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aut laudantium perspiciatis vitae, nisi tempore autem modi sint adipisci recusandae culpa corrupti ad, veritatis iste voluptates nemo voluptatum est earum illo nulla consequatur minima sunt. Ipsum unde porro provident? Dolore nobis provident tempore? Amet voluptate tempora ad magnam placeat fugit dolor voluptatum assumenda quod, nam, aut numquam! Expedita, sint odit, quo quae earum eaque laborum delectus corrupti quisquam ea consequatur officia, nulla recusandae? Saepe sapiente excepturi impedit repellendus pariatur voluptatum."
        ],
        [
            "tittle" =>"Ocha langsing",
            "slugs" =>"ocha-langsing",
            "author"=>"Rizki",
            "body"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque error laboriosam ut et sint cumque nostrum perspiciatis maiores rerum, doloremque quod unde nulla aut quibusdam atque, provident quasi ad, dolores similique quos reprehenderit soluta obcaecati? Impedit assumenda corporis molestiae rerum! In debitis assumenda numquam quae ullam amet ex suscipit beatae rem molestias laborum, nihil exercitationem ducimus, labore necessitatibus alias sed velit adipisci error excepturi a atque at. Rerum, cumque molestiae labore, eius aut in iusto consequuntur laboriosam voluptatibus aliquid, consectetur velit vero. Praesentium, consequuntur culpa similique omnis beatae fuga recusandae itaque vero! Nisi corporis cumque animi vero, repudiandae alias sapiente!"
        ]
        ];


public static function all()
{
    return collect(self::$blog_post);
}

public static function find($slugs)
{
    $posts =static::all();
    // $post = [];

    //     foreach ($posts as $p) {

    //     if($p["slugs"]=== $slugs){
    //         $post = $p;
    //     }
        
    // }

    return $posts->firstWhere('slugs', $slugs);
}
}

