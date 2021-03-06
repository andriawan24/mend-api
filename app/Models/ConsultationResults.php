<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationResults extends Model
{
    use HasFactory;

    protected $fillable = [
        'consultants_id',
        'diseases_id',
        'possibility'
    ];

    public function disease() {
        return $this->hasOne(Disease::class, 'id', 'diseases_id');
    }
}
