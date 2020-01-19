<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thana extends Model
{
    public function PostCode()
    {
        return $this->hasMany(PostCode::class);
    }

    public function countries()
    {
        return $this->belongsTo('App\District', 'district_id', 'id');
    }
}
