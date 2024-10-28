<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    // Primary key
    protected $primaryKey = 'nis';

    // non-incrementing or non-numeric primary key
    public $incrementing = false;
    
    // key type
    protected $keyType = 'int';

    // Timestamps
    public $timestamps = true;
    
    // Fillable
    protected $fillable = [
        'nis',
        'students_name',
        'students_gender',
        'students_birthdate',
        'students_grade',
        'students_parent',
    ];

    // Relationship
    public function bills() 
    {
        return $this->hasOne(Bills::class, 'nis', 'nis');
    }
}
