<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Department;

class School extends Model
{
    use HasFactory;
    protected $table = 'school';

    protected $fillable = [
        'school_name',
        'address'
    ];

    //A school has many departments
    public function department(){
        $this->hasMany(Department::class);
    }

}