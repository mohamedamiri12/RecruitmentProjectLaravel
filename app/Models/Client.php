<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }
    public function missions()
    {
        return $this->hasMany(Mission::class);
    }
}
