<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::truncate();
        // Post::truncate();
        // Category::truncate();
        $user = User::factory()->create([
            'name'=> 'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id'=> $user->id
        ]);

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name'=>'Personal',
        //     'slug'=>'personal'
        // ]);

        // $family = Category::create([
        //     'name'=>'Family',
        //     'slug'=>'family'
        // ]);

        // $work = Category::create([
        //     'name'=>'Work',
        //     'slug'=>'work'
        // ]);

        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt'=>'Lorem ipsum dolor sit amet.',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic aut a quisquam ad libero, tempore sequi ut minima fuga dolores ratione consectetur assumenda, nesciunt nemo voluptates architecto totam officiis! Aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam accusantium voluptates quae molestiae! Illum est, similique fugiat vel ad error odio laboriosam maxime temporibus accusamus quod debitis? Sit, optio. A.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ipsam, dignissimos beatae neque illo adipisci non consectetur, cum commodi assumenda temporibus. Dicta, quaerat omnis doloribus consequatur eveniet non voluptatibus maiores?</p>'
        // ]);

        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt'=>'Lorem ipsum dolor sit amet.',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic aut a quisquam ad libero, tempore sequi ut minima fuga dolores ratione consectetur assumenda, nesciunt nemo voluptates architecto totam officiis! Aliquid!Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam accusantium voluptates quae molestiae! Illum est, similique fugiat vel ad error odio laboriosam maxime temporibus accusamus quod debitis? Sit, optio. A.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ipsam, dignissimos beatae neque illo adipisci non consectetur, cum commodi assumenda temporibus. Dicta, quaerat omnis doloribus consequatur eveniet non voluptatibus maiores?</p>'
        // ]);




    }
}
