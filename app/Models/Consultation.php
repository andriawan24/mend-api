<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'users_id',
        'name',
        'age'
    ];

    public function results() {
        return $this->hasMany(ConsultationResults::class, 'consultants_id', 'id');
    }
}
