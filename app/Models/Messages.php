<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;
    protected $fillable = [
        'chatroom_id',
        'sender_id',
        'message_type',
        'attachment_url',
        'content',
    ];
    protected $table = 'messages';
}
