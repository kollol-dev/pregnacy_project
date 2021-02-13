<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'patient_id',
        'result',
        'pregnancy_week',
        'age',
        'carrying_first_child',
        'height',
        'weight',
        'bmi',
        'bp',
        'have_proteinuria',
        'have_STI',
        'have_heart_diseases',
        'have_kidney_diseases',
        'have_hypothyroidism',
        'have_anemia',
        'have_previous_miscarriage',
        'have_previous_cs',
        'is_carrying_twin_or_multiple',
        'glucose_before_fasting',
        'glucose_after_fasting',
    ];

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }
}
