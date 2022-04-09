<?php

namespace App\Mail;

use App\Models\Player;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable {
    use Queueable, SerializesModels;

    public $player;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id) {
        $this->player = Player::findOrFail($id);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->view('email');
    }
}