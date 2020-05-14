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

<div>
    <button><a href="/artikelen/create">Create</a></button>
</div>

{{--@foreach($artikelen as $artikel)

    <div class="card text-white bg-dark mb-3" style="width: 18rem;">
        <div class="card-body" >
            <h5 class="card-title"></h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $artikel->datum }}</h6>
            <p class="card-text">{{ $artikel->inhoud }}</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>

@endforeach--}}

<div id="content">
    @foreach ($artikelen as $artikel)
        <div class="mdc-card element-card earth" onclick="window.location='/artikelen/{{ $artikel->id }}';">
            <div class="mdc-card__media">
                <div class="mdc-card__media-content">
                    <div class="mdc-typography--headline4">{{ $artikel->titel }}</div>
                    <div class="mdc-typography--headline9">{{ $artikel->datum }}</div>
                    <div class="mdc-typography--headline9">{{ $artikel->inhoud }}</div>

                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection

