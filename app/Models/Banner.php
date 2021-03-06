<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = ['title1', 'image1', 'subtitle1','description1', 'title2', 'image2','created_at','updated_at'];

    // coloum tidak wajib di isi
    protected $guarded = [];
    // colum wajib di isi
    
}
