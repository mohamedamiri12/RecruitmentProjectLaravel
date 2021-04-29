<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mission extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    
    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function rating()
    {
        return $this->hasOne(Rating::class);
    }
    public function mission_payment()
    {
        return $this->hasOne(Mission_payment::class);
    }
}
