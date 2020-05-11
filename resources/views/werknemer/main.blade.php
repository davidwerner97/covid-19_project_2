@extends('layout')
@section('head')
    <style>
        .mdc-card {
            float: left;
            background: #2b2b2b;
        }

        .card-text {
            color: white;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
        }

        .element-card {
            width: 20em;
            margin: 16px;
        }

        .element-card > .mdc-card__media {
            height: 9em;
        }

        .mdc-card__media {
            text-align: left;
            margin: 10px;

        }

        .mdc-card__media-content {
            display: inline-block;
        }

        #content {
            width: 100%;
        }
    </style>
@endsection

@section('inhoud')

    <div id="content">
        <div id="status">
            @if (!empty($status))
                <div class="mdc-card element-card earth">
                    <div class="mdc-card__media">
                        <div class="mdc-card__media-content">
                            <div class="mdc-typography--headline4">{{ $status->titel}}</div>
                            <div class="mdc-typography--headline9">{{ $status->beschrijving}}</div>
                            <div class="mdc-typography--headline9">{{$status->datum}}</div>
                            <a href="{{$status->deletepath()}}">delete</a> <a href="{{$status->editpath()}}">edit</a>
                        </div>
                    </div>
                </div>
                @else
                    er zijn geen statusen
                @endif

        </div>

        <div id="artiekelen">
            @if (!empty($artikelen))
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
            @else
                er zijn geen artiekelen
            @endif
        </div>
    </div>

@endsection
