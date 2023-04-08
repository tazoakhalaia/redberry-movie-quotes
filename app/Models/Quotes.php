<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movies;

class Quotes extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'img',
        'movie_id',
    ];

    public function movie(){
        return $this->belongsTo(Movies::class);
    }
}
