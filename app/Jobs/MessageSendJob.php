<?php

namespace App\Jobs;

use App\Mail\MessageMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class MessageSendJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $name;
    public $email;
    public $phone_number;
    public $subject;
    public $message;
    /**
     * Create a new job instance.
     */
    public function __construct($name, $email, $phone_number, $subject, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->subject = $subject;
        $this->message = $message;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to("emonhaque.net@gmail.com")
        ->send(new MessageMail($this->name, $this->email, $this->phone_number, $this->subject, $this->message));
    }
}
