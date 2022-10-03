<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
     

        // User::create([

        //     "name" => "Muhammad Rizki",
        //     "email" => "rizki@gmail.com",
        //     "password"=> bcrypt("12345")
        // ]);

        // User::create([

        //     "name" => "Ocha",
        //     "email" => "ocha@gmail.com",
        //     "password"=> bcrypt("12345")
        // ]);

        

        Category::create([

            "name" => "Web Programming",
            "slug" => "web-programming"
            
        ]);
        Category::create([

            "name" => "Web Design",
            "slug" => "web-design"
            
        ]);

        Category::create([
            "name" => "Personal",
            "slug" => "personal"
            
        ]);

        User::factory(3)->create();

        Post::factory(40)->create();

        // Post::create([
        //     "title" =>"Judul Pertama",
        //     "slug" => "judul-pertama",
        //     "excerpt"=>"
        //     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque, quasi corrupti. Pariatur quam quibusdam consectetur earum consequatur quas hic iure." ,
        //     "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio minima eius, ipsam corrupti eligendi sint, quod harum tempora nemo doloribus eaque omnis laboriosam quisquam magni iure veniam natus corporis aliquid illo delectus, qui architecto soluta. Architecto commodi beatae ullam exercitationem illo repudiandae inventore, asperiores iusto repellat, laboriosam harum similique consequuntur?",

        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);

        
        // Post::create([
        //     "title" =>"Judul Kedua",
        //     "slug" => "judul-kedua",
        //     "excerpt"=>"
        //     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque, quasi corrupti. Pariatur quam quibusdam consectetur earum consequatur quas hic iure." ,
        //     "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio minima eius, ipsam corrupti eligendi sint, quod harum tempora nemo doloribus eaque omnis laboriosam quisquam magni iure veniam natus corporis aliquid illo delectus, qui architecto soluta. Architecto commodi beatae ullam exercitationem illo repudiandae inventore, asperiores iusto repellat, laboriosam harum similique consequuntur?",

        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);


        
        // Post::create([
        //     "title" =>"Judul Ketiga",
        //     "slug" => "judul-Ketiga",
        //     "excerpt"=>"
        //     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque, quasi corrupti. Pariatur quam quibusdam consectetur earum consequatur quas hic iure." ,
        //     "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio minima eius, ipsam corrupti eligendi sint, quod harum tempora nemo doloribus eaque omnis laboriosam quisquam magni iure veniam natus corporis aliquid illo delectus, qui architecto soluta. Architecto commodi beatae ullam exercitationem illo repudiandae inventore, asperiores iusto repellat, laboriosam harum similique consequuntur?",

        //     "category_id" => 2,
        //     "user_id" => 1
        // ]);

        // Post::create([
        //     "title" =>"Judul Keempat",
        //     "slug" => "judul-Keempat",
        //     "excerpt"=>"
        //     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque, quasi corrupti. Pariatur quam quibusdam consectetur earum consequatur quas hic iure." ,
        //     "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio minima eius, ipsam corrupti eligendi sint, quod harum tempora nemo doloribus eaque omnis laboriosam quisquam magni iure veniam natus corporis aliquid illo delectus, qui architecto soluta. Architecto commodi beatae ullam exercitationem illo repudiandae inventore, asperiores iusto repellat, laboriosam harum similique consequuntur?",

        //     "category_id" => 2,
        //     "user_id" => 2
        // ]);




        
    }
}
