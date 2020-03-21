<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $fillable = [
        // Empty
    ];

    protected $hidden = [
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    public function movie() {
        return $this->belongsTo(Movie::class, 'movies_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
