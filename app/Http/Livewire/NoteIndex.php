<?php

namespace App\Http\Livewire;

use App\Note;
use Livewire\Component;
use Livewire\WithPagination;

class NoteIndex extends Component
{

    // use WithPagination;
    protected $paginationTheme = 'bootstrap';
    // public $notes;
    protected $listeners = [
        'noteCreated',
    ];

    public function noteCreated()
    {
        $this->notes = Note::latest()->get();
        // dd($note);
        
    }

    public function handleNoteCreated()
    {
        session()->flash('message','留言创建成功');
    }
     


    public function render()
    {
        return view('livewire.note-index',[
            'notes'  =>Note::latest()->paginate(5),
        ]);
    }


    //生命周期函数
    //初始化函数(只运行一次)
    public function mount(){}
    //每次更新数据的时候加载（updated之后调用）
    public function hydrate(){}
    //更新前调用函数
    public function updating(){}
    //更新后调用函数
    public function updated(){}


}
