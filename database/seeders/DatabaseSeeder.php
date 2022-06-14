<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use App\Models\Testimonial;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Team;
use App\Models\Count;
use App\Models\Product;
use Illuminate\Database\Seeder;



use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


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

        $serviceimage = File::allFiles(public_path('images/service'));
        foreach ($serviceimage as $key => $value) {
            $file = pathinfo($value);
                $filename = $file['filename'];
                $extension = $file['extension'];
                $base = $file['basename'];
                $path = $file['dirname'];
            
                File::copy($path.'/'.$base, 'public/storage/images/service/'.$base);
   
                Service::create([
                    'title'=>'Bank Perkreditan Rakyat (BPR)',
                    'image'=>'images/service/'.$base,
                    'subtitle'=>'Kami menyediakan solusi bagi BPR melalui produk SimfoniBPR',
                    'description'=>'lorem',
                ]);

               
                Service::create([
                    'title'=>'Lembaga Keuangan Masyarakat (LKM)',
                    'image'=>'images/service/'.$base,
                    'subtitle'=>'Kami menyediakan solusi bagi LKM melalui produk SimfoniLKM',
                    'description'=>'lorem',
                ]);

                Service::create([
                    'title'=>'Koperasi',
                    'image'=>'images/service/'.$base,
                    'subtitle'=>'Kami menyediakan solusi bagi Koperasi melalui produk SimfoniKoperasi',
                    'description'=>'lorem',
                ]);

                Service::create([
                    'title'=>'Bank Muamalat Watanwil (BMT)',
                    'image'=>'images/service/'.$base,
                    'subtitle'=>'Kami menyediakan solusi bagi BMT melalui produk SimfoniBMT',
                    'description'=>'lorem',
                ]);
        };
    



        $teamimage = File::allFiles(public_path('images/team/'));
            foreach ($teamimage as $key => $value) {
                
                $file = pathinfo($value);
                $filename = $file['filename'];
                $extension = $file['extension'];
                $base = $file['basename'];
                $path = $file['dirname'];
                
                File::copy($path.'/'.$base, 'public/storage/images/team/'.$base);

                Team::create([
                    'name'=>"tiohalu",
                    'image'=>'images/team/'.$base,
                    'position'=>'Backend Developer',
                ]);

                Team::create([
                    'name'=>"rajendra",
                    'image'=>'images/team/'.$base,
                    'position'=>'Frontend Developer',
                ]);

                Team::create([
                    'name'=>"neta",
                    'image'=>'images/team/'.$base,
                    'position'=>'Frontend Developer',
                ]);
            }

            // banner seeder
            $banner = File::allFiles(public_path('images/banner/'));
            foreach ($banner as $key => $value) {
                
                $file = pathinfo($value);
                $filename = $file['filename'];
                $extension = $file['extension'];
                $base = $file['basename'];
                $path = $file['dirname'];
                
                File::copy($path.'/'.$base, 'public/storage/images/banner/'.$base);

                Banner::create([
                    'title1'=>"PT.Multipilar Balantika",
                    'image1'=>'images/banner/'.$base,
                    'title2'=>'Coba CBS Kami Sekarang!',
                    'image2'=>'images/banner/'.$base,
                    'subtitle1'=>'Penyedia Core Banking System',
                    'description1'=>'Telah berpengalaman lebih dari 13 tahun membangun sistem untuk BPR, LKM dan Koperasi',
                ]);
            }   

        // blog seeder
        $blogimage = File::allFiles(public_path('images/blog'));
        foreach ($blogimage as $key => $value) {
            $file = pathinfo($value);
                $filename = $file['filename'];
                $extension = $file['extension'];
                $base = $file['basename'];
                $path = $file['dirname'];
            
                File::copy($path.'/'.$base, 'public/storage/images/blog/'.$base);
   
                Blog::create([
                    'title'=>'Blog 1',
                    'image'=>'images/blog/'.$base,
                    'content'=>'Kami menyediakan solusi bagi BPR melalui produk SimfoniBPR',
                    'category_id'=>1,
                    'tag_id'=>1,
                    'slug'=>'/blog',
                    'user_id'=>1,
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ]);

                Blog::create([
                    'title'=>'Blog 2',
                    'image'=>'images/blog/'.$base,
                    'content'=>'Kami menyediakan solusi bagi LKM melalui produk SimfoniLKM',
                    'category_id'=>1,
                    'tag_id'=>1,
                    'user_id'=>1,
                    'slug'=>'/blog',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ]);

                Blog::create([
                    'title'=>'Blog 3',
                    'image'=>'images/blog/'.$base,
                    'content'=>'Kami menyediakan solusi bagi Koperasi melalui produk SimfoniKoperasi',
                    'category_id'=>2,
                    'tag_id'=>2,
                    'slug'=>'/blog',
                    'user_id'=>1,
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ]);

                Blog::create([
                    'title'=>'Blog 4',
                    'image'=>'images/blog/'.$base,
                    'content'=>'Kami menyediakan solusi bagi BMT melalui produk SimfoniBMT',
                    'category_id'=>2,
                    'tag_id'=>2,
                    'user_id'=>1,
                    'slug'=>'/blog',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ]);
        };

        // testimonial seeder
        $testimonialimage = File::allFiles(public_path('images/testimonial'));
        foreach ($testimonialimage as $key => $value) {
            $file = pathinfo($value);
                $filename = $file['filename'];
                $extension = $file['extension'];
                $base = $file['basename'];
                $path = $file['dirname'];
            
                File::copy($path.'/'.$base, 'public/storage/images/testimonial/'.$base);
   
                Testimonial::create([
                    'name'=>'testimonial 1',
                    'image'=>'images/testimonial/'.$base,
                    'description'=>'Kami menyediakan solusi bagi BPR melalui produk SimfoniBPR',
                    'address'=>'Jl.Kemang Timur No.1',
                ]);

                Testimonial::create([
                    'name'=>'testimonial 2',
                    'image'=>'images/testimonial/'.$base,
                    'description'=>'Kami menyediakan solusi bagi LKM melalui produk SimfoniLKM',
                    'address'=>'Jl.mawar no.1',

                ]);

                Testimonial::create([
                    'name'=>'testimonial 3',
                    'image'=>'images/testimonial/'.$base,
                    'description'=>'Kami menyediakan solusi bagi Koperasi melalui produk SimfoniKoperasi',
                'address'=>'Jl.Kartika Timur No.1',
                ]);

                Testimonial::create([
                    'name'=>'testimonial 4',
                    'image'=>'images/testimonial/'.$base,
                    'description'=>'Kami menyediakan solusi bagi BMT melalui produk SimfoniBMT',
                    'address'=>'Jakarta Barat ',
                ]);

        };

        // gallery
        $galleryimage = File::allFiles(public_path('images/gallery'));
        foreach ($galleryimage as $key => $value) {
            $file = pathinfo($value);
                $filename = $file['filename'];
                $extension = $file['extension'];
                $base = $file['basename'];
                $path = $file['dirname'];
            
                File::copy($path.'/'.$base, 'public/storage/images/gallery/'.$base);
   
                Gallery::create([
                    'title'=>'Gallery 1',
                    'image'=>'images/gallery/'.$base,
                ]);

                Gallery::create([
                    'title'=>'Gallery 2',
                    'image'=>'images/gallery/'.$base,

                ]);

                Gallery::create([
                    'title'=>'Gallery 3',
                    'image'=>'images/gallery/'.$base,
                ]);

                Gallery::create([
                    'title'=>'Gallery 4',
                    'image'=>'images/gallery/'.$base,
                ]);

        };


        // count seeder
        $countimage = File::allFiles(public_path('images/background'));
        foreach ($countimage as $key => $value) {
            $file = pathinfo($value);
                $filename = $file['filename'];
                $extension = $file['extension'];
                $base = $file['basename'];
                $path = $file['dirname'];
            
                File::copy($path.'/'.$base, 'public/storage/images/background/'.$base);
   
                Count::create([
                    'klien'=>33,
                    'ahli'=>53,
                    'symfoni'=>35,
                    'mobile'=>5,
                    'background'=>'images/background/'.$base,
                ]);
        };


    

    // product seeder
    $productfile = File::allFiles(public_path('images/product'));
    foreach ($productfile as $key => $value) {
        $file = pathinfo($value);
            $filename = $file['filename'];
            $extension = $file['extension'];
            $base = $file['basename'];
            $path = $file['dirname'];
        
            File::copy($path.'/'.$base, 'public/storage/images/product/'.$base);
   
            Product::create([
                'banner'=>'images/product/'.$base,
                'tittle'=>'Product ',
                'image'=>'images/product/'.$base,
                'overview'=>'We have over 20 years of experience we’ll ensure you always get the best guidance. serve clients at every level of their organizations,',
            ]);
    }

    }}
