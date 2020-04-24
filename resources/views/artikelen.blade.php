<div>
    <button><a href="/artikelen/create">Create</a></button>
</div>

@foreach($artikelen as $artikel)
    <div  class="card border-left-primary shadow h-100 py-2" style="cursor: pointer;" onclick="window.location='/artikelen/{{ $artikel->id }}';">
        <div>
            <a>{{ $artikel->titel }}</a>
        </div>
        <div>
            <a>{{ $artikel->datum }}</a>
        </div>
        <div>
            <a>{{ $artikel->inhoud }}</a>
        </div>
    </div>
    <br>
@endforeach

