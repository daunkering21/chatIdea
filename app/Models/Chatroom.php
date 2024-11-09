<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'type',
        'max_user',
        'password',
        'created_by',
    ];
    protected $table = 'chatrooms';
}
