<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewPostNotification implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

  public $message;
  public $badge;

  public function __construct($badge, $message)
  {
      $this->message = $message;
      $this->badge = $badge;
  }

  public function broadcastOn()
  {
      return ['my-channel-'.$this->badge];
  }

  public function broadcastAs()
  {
      return 'my-event';
  }
}
