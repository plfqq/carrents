<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class clients extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function rents()
    {
        return $this->hasMany(Rents::class, 'client_id', 'id');
    }

    public function Agreements()
    {
        return $this->hasMany(Agreements::class, 'client_id', 'id');
    }

}
