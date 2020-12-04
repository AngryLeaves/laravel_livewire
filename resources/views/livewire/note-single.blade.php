<div>
    
    <div class="media">
        <img src="{{ asset('img/Avatar.jpg') }}" class="mr-3" alt="..." style="width: 70px; height:70px;">
        <div class="media-body">
            <h5 class="mt-0">{{ $note->user->name }}</h5>
            {{$note->body}}
        </div>
    </div>
</div>