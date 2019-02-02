<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendReport extends Mailable
{
    use Queueable, SerializesModels;
    public $excelfilePath;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($excelfilePath)
    {
        $this->excelfilePath = $excelfilePath;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->markdown('email.send');
        return $this->markdown('email.send')
            ->attach($this->excelfilePath.'/MCC Acquisition '.date("M d Y").'.xls', [
                'as' => 'MCC Acquisition '.date("M d Y").'.xls',
                'mime' => 'application/excel',
            ]);
    }
}
