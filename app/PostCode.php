<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCode extends Model
{
    public function thana()
    {
        return $this->belongsTo('App\Thana', 'thana_id', 'id');
    }

    public function division()
    {
        return $this->belongsTo('App\Division', 'division_id', 'id');
    }
}
