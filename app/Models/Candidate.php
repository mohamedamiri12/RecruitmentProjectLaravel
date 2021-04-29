<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
    public function contracts()
    {
        return $this->hasOne(Contract::class);
    }
    public function missions()
    {
        return $this->hasMany(Mission::class);
    }
}
