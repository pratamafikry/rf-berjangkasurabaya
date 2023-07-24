<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Team;
use App\Models\Driver;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(15)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' => 'Fikry Galih Pratama',
        //     'email' => 'pratamafikry009@gmail.com',
        //     'password' => bcrypt('password')
        // ]);
        // User::create([
        //     'name' => 'Adelia Tasya Virginia',
        //     'email' => 'adeliatasyav@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        Post::factory(20)->create();
        Team::factory(5)->create();
        Driver::factory(5)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, alias.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius aperiam est explicabo placeat voluptates nihil! Temporibus sequi animi consectetur sed optio voluptatum corrupti assumenda, adipisci laudantium ad debitis cupiditate dolor quidem corporis fugiat eius! Atque laudantium molestiae, iste deleniti soluta eum dolore voluptas vitae quod temporibus dolorum officiis ullam cum necessitatibus.</p><p>A quam incidunt recusandae eius velit quos ratione necessitatibus facere possimus tenetur numquam blanditiis obcaecati ipsum ex voluptatibus laborum at fuga assumenda modi, vitae provident corporis? Error voluptate odit non, optio vero libero earum possimus obcaecati temporibus autem commodi, ipsa fugiat voluptatem, esse vitae nobis reprehenderit beatae ratione veritatis tempore debitis iusto eius! Obcaecati expedita fuga exercitationem ipsum aliquam earum, eius, cum deserunt quia odit distinctio nulla cupiditate quisquam facilis ratione ipsa sint nam, ea voluptatibus incidunt dolores quibusdam ducimus? Delectus illo, commodi voluptatum alias, quam ab voluptatem in error, quae ex expedita eum cumque nesciunt ipsa tempora quibusdam consequuntur.</p><p>necessitatibus exercitationem iste aperiam eum, quam illo qui nobis possimus, corporis cum veritatis labore voluptates quisquam et explicabo beatae aliquid quidem quo quis sapiente pariatur impedit perferendis! Nisi accusantium veniam, quis obcaecati nesciunt nam distinctio cupiditate laboriosam error quidem doloribus consequuntur doloremque. Unde, in voluptatibus! Voluptates, voluptate?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, alias.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius aperiam est explicabo placeat voluptates nihil! Temporibus sequi animi consectetur sed optio voluptatum corrupti assumenda, adipisci laudantium ad debitis cupiditate dolor quidem corporis fugiat eius! Atque laudantium molestiae, iste deleniti soluta eum dolore voluptas vitae quod temporibus dolorum officiis ullam cum necessitatibus.</p><p>A quam incidunt recusandae eius velit quos ratione necessitatibus facere possimus tenetur numquam blanditiis obcaecati ipsum ex voluptatibus laborum at fuga assumenda modi, vitae provident corporis? Error voluptate odit non, optio vero libero earum possimus obcaecati temporibus autem commodi, ipsa fugiat voluptatem, esse vitae nobis reprehenderit beatae ratione veritatis tempore debitis iusto eius! Obcaecati expedita fuga exercitationem ipsum aliquam earum, eius, cum deserunt quia odit distinctio nulla cupiditate quisquam facilis ratione ipsa sint nam, ea voluptatibus incidunt dolores quibusdam ducimus? Delectus illo, commodi voluptatum alias, quam ab voluptatem in error, quae ex expedita eum cumque nesciunt ipsa tempora quibusdam consequuntur.</p><p>necessitatibus exercitationem iste aperiam eum, quam illo qui nobis possimus, corporis cum veritatis labore voluptates quisquam et explicabo beatae aliquid quidem quo quis sapiente pariatur impedit perferendis! Nisi accusantium veniam, quis obcaecati nesciunt nam distinctio cupiditate laboriosam error quidem doloribus consequuntur doloremque. Unde, in voluptatibus! Voluptates, voluptate?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, alias.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius aperiam est explicabo placeat voluptates nihil! Temporibus sequi animi consectetur sed optio voluptatum corrupti assumenda, adipisci laudantium ad debitis cupiditate dolor quidem corporis fugiat eius! Atque laudantium molestiae, iste deleniti soluta eum dolore voluptas vitae quod temporibus dolorum officiis ullam cum necessitatibus.</p><p>A quam incidunt recusandae eius velit quos ratione necessitatibus facere possimus tenetur numquam blanditiis obcaecati ipsum ex voluptatibus laborum at fuga assumenda modi, vitae provident corporis? Error voluptate odit non, optio vero libero earum possimus obcaecati temporibus autem commodi, ipsa fugiat voluptatem, esse vitae nobis reprehenderit beatae ratione veritatis tempore debitis iusto eius! Obcaecati expedita fuga exercitationem ipsum aliquam earum, eius, cum deserunt quia odit distinctio nulla cupiditate quisquam facilis ratione ipsa sint nam, ea voluptatibus incidunt dolores quibusdam ducimus? Delectus illo, commodi voluptatum alias, quam ab voluptatem in error, quae ex expedita eum cumque nesciunt ipsa tempora quibusdam consequuntur.</p><p>necessitatibus exercitationem iste aperiam eum, quam illo qui nobis possimus, corporis cum veritatis labore voluptates quisquam et explicabo beatae aliquid quidem quo quis sapiente pariatur impedit perferendis! Nisi accusantium veniam, quis obcaecati nesciunt nam distinctio cupiditate laboriosam error quidem doloribus consequuntur doloremque. Unde, in voluptatibus! Voluptates, voluptate?</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, alias.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius aperiam est explicabo placeat voluptates nihil! Temporibus sequi animi consectetur sed optio voluptatum corrupti assumenda, adipisci laudantium ad debitis cupiditate dolor quidem corporis fugiat eius! Atque laudantium molestiae, iste deleniti soluta eum dolore voluptas vitae quod temporibus dolorum officiis ullam cum necessitatibus.</p><p>A quam incidunt recusandae eius velit quos ratione necessitatibus facere possimus tenetur numquam blanditiis obcaecati ipsum ex voluptatibus laborum at fuga assumenda modi, vitae provident corporis? Error voluptate odit non, optio vero libero earum possimus obcaecati temporibus autem commodi, ipsa fugiat voluptatem, esse vitae nobis reprehenderit beatae ratione veritatis tempore debitis iusto eius! Obcaecati expedita fuga exercitationem ipsum aliquam earum, eius, cum deserunt quia odit distinctio nulla cupiditate quisquam facilis ratione ipsa sint nam, ea voluptatibus incidunt dolores quibusdam ducimus? Delectus illo, commodi voluptatum alias, quam ab voluptatem in error, quae ex expedita eum cumque nesciunt ipsa tempora quibusdam consequuntur.</p><p>necessitatibus exercitationem iste aperiam eum, quam illo qui nobis possimus, corporis cum veritatis labore voluptates quisquam et explicabo beatae aliquid quidem quo quis sapiente pariatur impedit perferendis! Nisi accusantium veniam, quis obcaecati nesciunt nam distinctio cupiditate laboriosam error quidem doloribus consequuntur doloremque. Unde, in voluptatibus! Voluptates, voluptate?</p>'
        // ]);
    }
}
