<?php
namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class WelcomeMail extends Mailable {

use Queueable, SerializesModels;

public $user;

public function __construct($user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->view('email.welcome');
    }
}
