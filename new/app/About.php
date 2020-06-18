<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
         'title_ka','text_ka','title_en','text_en',
    ];

}
