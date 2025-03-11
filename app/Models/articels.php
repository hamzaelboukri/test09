<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articels extends Model
{
    use HasFactory;
    protected $fillable = [
        'titel',
        'contnt',
        'id_tags',
    ];


    public function tags(){
        return $this->belongsToMany(tags::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
