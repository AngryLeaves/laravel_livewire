<div>
    @if(session()->has('message'))
        <div class="alert alert-success">{{session()->get('message')}}</div>
    @endif
    <livewire:note-create />
    @foreach($notes as $note)
       <livewire:note-single :note="$note" :key="$note->id" />
           <hr>
    @endforeach

    {{ $notes->links() }}
</div>
