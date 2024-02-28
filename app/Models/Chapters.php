<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapters extends Model
{
    use HasFactory;

    protected $table='chapters';
    protected $fillable=[
        'user_id',
        'chapter_name',
        'chapter_image'
    ];

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
