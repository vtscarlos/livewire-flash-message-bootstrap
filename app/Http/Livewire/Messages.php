<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Messages extends Component
{

    public $success  = '';
    public $error = '';
    protected $listeners = ['success' => 'setMessageSuccess' , 'error' => 'setMessageError'];

    public function render()
    {
        return view('livewire.messages');
    }

    public function setMessageSuccess($message)
    {
        $this->success  = $message;
    }
    public function setMessageError($message)
    {
        $this->error  = $message;
    }
}
