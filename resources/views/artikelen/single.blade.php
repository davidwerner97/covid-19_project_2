<div>
    <div>
        <h6>{{ $artikel->titel }}</h6>
    </div>
    <div class="card-body">
        <p>Datum:: {{ $artikel->datum }}</p>
        <p class="mb-0">Inhoud: {{ $artikel->inhoud }}</p>  </div>
    </div>

    <div>
        {{--<a href="/artikelen/{{ $artikel->id }}/edit"> Update Animal</a>--}}
        <form method="POST" action="{{route('artikelen.delete', [$artikel->id])}}" >
            @csrf
            @method('DELETE')
            <button type="submit"  onclick="return confirm('Weet je dit zeker?')"> Delete</button>
        </form>
    </div>

</div>
