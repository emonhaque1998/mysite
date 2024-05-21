<?php

namespace App\Livewire\Contact;

use App\Jobs\MessageSendJob;
use App\Models\Message as ModelsMessage;
use Livewire\Component;

class Message extends Component
{
    public $name;
    public $email;
    public $phone_number;
    public $subject;
    public $message;

    public function sendMessage(){
        $result = ModelsMessage::create([
            "name" => $this->name,
            "email" => $this->email,
            "number" => $this->phone_number,
            "subject" => $this->subject,
            "message" => $this->message
        ]);

        if($result){
            MessageSendJob::dispatch($this->name, $this->email, $this->phone_number, $this->subject, $this->message);
            $this->reset();
        }
    }

    public function render()
    {
        return view('livewire.contact.message');
    }
}
