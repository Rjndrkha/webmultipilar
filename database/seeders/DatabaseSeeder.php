<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use App\Models\Testimonial;
use App\Models\Gallery;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        // user seeder
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // category seeder
        DB::table('categories')->insert([
            'name' => 'Category 1',
            'slug' => 'category-1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Category 2',
            'slug' => 'category-2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // tag seeder
        DB::table('tags')->insert([
            'name' => 'Tag 1',
            'slug' => 'tag-1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tags')->insert([
            'name' => 'Tag 2',
            'slug' => 'tag-2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // service seeder
        DB::table('services')->insert([
            'title'=>'Bank Perkreditan Rakyat (BPR)',
             'image'=>'images',
              'subtitle'=>'Kami menyediakan solusi bagi BPR melalui produk SimfoniBPR',
              'description'=>'lorem',
        ]);

        DB::table('services')->insert([
            'title'=>'Lembaga Keuangan Masyarakat (LKM)',
             'image'=>'images',
              'subtitle'=>'Kami menyediakan solusi bagi LKM melalui produk SimfoniLKM',
              'description'=>'lorem',
        ]);
         DB::table('services')->insert([
            'title'=>'Koperasi',
             'image'=>'images',
              'subtitle'=>'Kami menyediakan solusi bagi Koperasi melalui produk SimfoniKoperasi',
              'description'=>'lorem',
        ]);

          DB::table('services')->insert([
            'title'=>'Bank Muamalat Watanwil (BMT)',
             'image'=>'images',
              'subtitle'=>'Kami menyediakan solusi bagi BMT melalui produk SimfoniBMT',
              'description'=>'lorem',
        ]);
        
        // Team Seeder
        DB::table('teams')->insert([
            'name'=>'Team 1',
             'image'=>'images',
              'position'=>'CEO',
        ]);
        DB::table('teams')->insert([
            'name'=>'Team 2',
             'image'=>'images',
              'position'=>'COO',
        ]);
                DB::table('teams')->insert([
            'name'=>'Team 3',
             'image'=>'images',
              'position'=>'CTO',
        ]);




       

        // banner seeder factory
        Banner::factory(1)->create();

        // blog seeder factory
        Blog::factory(6)->create();

        // testimonial seeder factory
        Testimonial::factory(6)->create();

        // Gallery seeder factory
        Gallery::factory(6)->create();

    }
}
