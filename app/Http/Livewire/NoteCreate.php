<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NoteCreate extends Component
{
    public $body;

    public function createNote()
    {

        $this->validate([
            'body'   => 'required|min:6|max:100',
        ]);

        if(auth()->check()){
            auth()->user()->notes()->create([
                'body' => $this->body,
                'user_id' =>auth()->user()->id,
            ]);
            $this->body = "";
            $this->emit('noteCreated');
        }
    }

    public function render()
    {
        return view('livewire.note-create');
    }
}
