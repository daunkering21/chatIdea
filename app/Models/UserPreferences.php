<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPreferences extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'notification_sound',
        'notification_mute',
        'theme',
        'language',
    ];
    protected $table = 'user_preferences';
}
