<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function thanas()
    {
        return $this->hasMany(Thana::class);
    }

    public function division()
    {
        return $this->belongsTo('App\Division', 'division_id', 'id');
    }

}
