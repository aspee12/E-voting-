<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menifesto extends Model
{
    use HasFactory;
    protected $table = 'menifestos';

    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }
}
