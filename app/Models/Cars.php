<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Cars extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    public function rents()
    {
        return $this->hasMany(Rents::class, 'car_id', 'id');
    }

    public function agreements()
    {
        return $this->hasMany(Agreements::class, 'car_id', 'id');
    }
}
