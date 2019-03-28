<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    public function contentTypes(){
        return $this->belongsToMany(ContentType::class, 'blocks_contents');
    }
}
