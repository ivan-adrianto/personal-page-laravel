<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillabled = ['name', 'image', 'stack_id'];

    public function stack() {
        return $this->belongsTo(Stack::class);
    }
}
