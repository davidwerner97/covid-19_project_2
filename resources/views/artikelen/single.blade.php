@extends('layout')
@section('head')
    <style>
        .cards {
            display: flex;
            flex-wrap: wrap;
        }
        .mdc-card{
            float:left;
        }

        .element-card {
            width: 20em;
            margin: 16px;
        }

        .element-card > .mdc-card__media {
            height: 9em;
        }
        .mdc-card__media{
            text-align: left;
            margin: 10px;

        }
        .mdc-card__media-content{
            display: inline-block;
        }
    </style>
@endsection

@section('inhoud')

    <div class="card text-white bg-dark">
        <div class="card-header">
            <h1>{{ $artikel->titel }}</h1>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $artikel->inhoud }}</p>
            <p class="card-text"><small class="text-muted">{{ $artikel->datum }}</small></p>
            <a href="/artikelen/{{ $artikel->id }}/edit" class="btn btn-primary">Edit</a>

            <form method="POST" action="{{route('artikelen.delete', [$artikel->id])}}" >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Weet je dit zeker?')">Delete</button>
            </form>
        </div>
    </div>


@endsection

