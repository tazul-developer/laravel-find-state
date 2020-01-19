<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCode extends Model
{
    public function thana()
    {
        return $this->belongsTo('App\Thana', 'thana_id', 'id');
    }
}
