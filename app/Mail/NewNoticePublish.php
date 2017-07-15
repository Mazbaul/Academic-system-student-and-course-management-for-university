<?php

namespace App\Mail;

use App\Notice;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class NewNoticePublish extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    Public $notice;
    public function __construct(Notice $notice)
    {
         $this->notice=$notice;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->markdown('email.notice.NewNoticePublish');
    }
}
