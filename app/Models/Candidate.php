<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    // protected $fillable =[
    //     'id','title','position','details'
    //  ];
    protected $table = 'candidates';

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function menifesto()
    {
        return $this->hasOne(Menifesto::class);
    }
    public function declareresult() {
        return $this->hasOne(Declareresult::class);
    }
}
