<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Declareresult extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function resultState(){
        return $this->state;
    }
    public function candidate() {
        return $this->belongsTo(Candidate::class);
    }
}
