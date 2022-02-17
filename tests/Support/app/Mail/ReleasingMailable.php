<?php

namespace Hammerstone\Sidecar\PHP\Tests\Support\App\Mail;

use Hammerstone\Sidecar\PHP\Contracts\Queue\RunInLambda;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReleasingMailable extends Mailable implements ShouldQueue, RunInLambda
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->view('email', ['content' => 'My name is Rod, and I like to party.']);
    }
}
