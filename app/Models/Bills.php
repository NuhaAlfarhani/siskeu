<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    // Primary key
    protected $primaryKey = 'bills_id';

    // key type
    protected $keyType = 'int';

    // Timestamps
    public $timestamps = false;

    // Fillable
    protected $fillable = [
        'bills_amount',
        'bills_due_date',
    ];

    // Relationship
    public function students() 
    {
        return $this->belongsTo(Students::class, 'nis', 'nis');
    }
}
