<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Joaopaulolndev\FilamentGeneralSettings\Models\GeneralSetting;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;
    public $success = false;

    protected $rules = [
        'name'    => 'required|string|max:255',
        'subject' => 'required|string|max:255',
        'email'   => 'required|email|max:255',
        'message' => 'required|string|max:5000',
    ];

    public function submit(): void
    {
        $details = $this->validate();

        Mail::to(GeneralSetting::value('support_email'))
            ->send(new ContactMail($details));

        $this->reset(['name', 'email', 'subject', 'message']);

        $this->success = true;
    }

    public function render(): View
    {
        return view('livewire.contact-form');
    }
}
