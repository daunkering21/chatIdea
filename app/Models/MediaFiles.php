<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaFiles extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'chatroom_id',
        'file_type',
        'file_url',
    ];
    protected $table = 'media_files';
}
