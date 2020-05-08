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
            font-size: x-large;

        }
        .mdc-card__media-content{
            display: inline-block;
        }
    </style>
@endsection

@section('inhoud')
    <div id="content">
        <ul>
        @foreach ($status as $status)
            <div class="mdc-card element-card earth">
                <div class="mdc-card__media">
                    <div class="mdc-card__media-content">
                        <div class="mdc-typography--headline4">{{ $status->titel}}</div>
                        <div class="mdc-typography--headline9">{{ $status->beschrijving}}</div>
                        <div class="mdc-typography--headline9">{{$status->datum}}</div>
                        <a href="{{$status->path()}}">view</a> <a href="{{$status->deletepath()}}">delete</a> <a href="{{$status->editpath()}}">edit</a>
                    </div>
                </div>
            </div>
        </ul>
        @endforeach
    </div>
@endsection
