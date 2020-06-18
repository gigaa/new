<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advantage extends Model
{
    protected $fillable = [
       'title_ka', 'title_en','content_ka', 'content_en',
       'point1_ka','point1_en','point2_ka','point2_en','point3_ka','point3_en',
       'icon1','icon2','icon3','icon4',
       'txt1_ka', 'txt1_en', 'txt2_ka', 'txt2_en',
        'txt3_ka', 'txt3_en', 'txt4_ka', 'txt4_en', 
    ];
}
