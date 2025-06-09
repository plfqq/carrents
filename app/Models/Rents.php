<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Rents extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    public function cars()
    {
        return $this->belongsTo(Cars::class, 'car_id', 'id');
    }
    public function Agreements()
    {
        return $this->hasOne(Agreements::class, 'rent_id', 'id');
    }

      public function clients()
    {
        return $this->belongsTo(clients::class, 'client_id', 'id');
    }

}
