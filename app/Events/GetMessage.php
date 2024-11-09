<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class GetMessage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct($user, $messages)
    {
        $this->user = $user;
        $this->userMessage = $messages;
    }

    public $user;
    public $userMessage;

    public function broadcastOn(): array
    {
        return [
            new Channel('getMessages'),
        ];
    }
    public function broadcastAs()
    {
        return 'get.messages';
    }
}
