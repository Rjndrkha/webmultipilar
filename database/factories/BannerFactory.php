<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Http\Models\Banner;

class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

       
        return [
            
            'image1' => $this->faker->image('public/storage/images',400,300, true, true) ,
            'image2' => $this->faker->image('public/storage/images',400,300, true, true) ,
            'title1' => 'PT.Multipilar Balantika',
            'subtitle1' => 'Penyedia Core Banking System',
            'description1' => 'Telah berpengalaman lebih dari 13 tahun membangun sistem untuk BPR, LKM dan Koperasi',
            'title2' => 'Coba CBS Kami Sekarang!',
        ];
    }
}
