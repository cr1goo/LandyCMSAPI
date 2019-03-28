<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlocksContent extends Model
{
    public function blockContentParams(){
        return $this->hasMany(BlockContentParam::class, 'block_content_id');
    }
}
