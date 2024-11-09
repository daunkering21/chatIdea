<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChatroom extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'chatroom_id',
        'invitation_status',
        'role',
    ];
    protected $table = 'user_chatrooms';
}
