<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'description', 'full_code', 'techonologies_used'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function techonologies()
    {
        return $this->belongsToMany(Technology::class);
    }
}
