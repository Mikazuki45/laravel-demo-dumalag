<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'sender_name', 'content'];

    // Define a relationship if needed, for example, User relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
