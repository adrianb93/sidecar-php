<?php

namespace Hammerstone\Sidecar\PHP\Tests\Support\App\Mail;

use Hammerstone\Sidecar\PHP\Contracts\Queue\RunInLambda;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReleasingWithDelayMailable extends Mailable implements ShouldQueue, RunInLambda
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->view('email', ['content' => "No, Kevin, I know, for a fact, you don't party."]);
    }
}
