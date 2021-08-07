<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolRecordType extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'school_record_id']; 

    public function period()
    {
        return $this->hasOne(SchoolRecord::class);
    }
}
 