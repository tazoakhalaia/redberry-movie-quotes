<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Translate extends Model
{
    use HasTranslations;
    public $translatable = ['title_en'];
}
