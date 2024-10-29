<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\School;

class Department extends Model
{
    use HasFactory;
    protected $table = 'departments';

    protected $fillable = [
        'department_logo',
        'department_name',
        'department_abbreviation',
        'school_id'
    ];

    //Each department belongs to a school
    public function school(){
        $this->belongsTo(School::class);
    }

}
