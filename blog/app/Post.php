<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'id', 'judul','tgl_post',"kategori",'created_at'
    ];
}
