<?php

namespace App;

use App\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Facades\DB;

class Movie extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title'
    ];

    protected $hidden = [
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    public function reviews() {
        return $this->hasMany(Review::class, 'movies_id', 'id')->orderBy('created_at', 'desc');
    }
}
