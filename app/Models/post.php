<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table="posts";
    use HasFactory;
    public function title()
    {
        return $this->hasMany(title::class);
    }
}
