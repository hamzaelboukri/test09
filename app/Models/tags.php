<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'id_articels',
    ];

    public function articles(){
        return $this->belongsToMany(articels::class);
        
    }
}
