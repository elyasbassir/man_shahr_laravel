<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider_model extends Model
{
    use HasFactory;
    protected $table = 'slider';
    public $timestamps = false;
    protected $fillable=[
        'hash_id_city',
        'owner_address ',
        'owner_phone',
        'owner_name',
        'slider_image_name',
        'hash_id_slider',
    ];

    static public function find_slider_with_hash_id_city($hash_id_city){
        return self::where('hash_id_city',$hash_id_city)->get();
    }

}
