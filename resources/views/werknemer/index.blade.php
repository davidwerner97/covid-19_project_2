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
            <div id="content">
                    @foreach ($werknemers as $werknemer)
                    <div class="mdc-card element-card earth">
                        <div class="mdc-card__media">
                            <div class="mdc-card__media-content">
                                <div class="mdc-typography--headline4">{{ $werknemer->vnaam .' ' . $werknemer->anaam }}</div>
                                <div class="mdc-typography--headline9">{{ $werknemer->functie}}</div>
                                <div class="mdc-typography--headline9">{{$werknemer->plaats. ' ' . $werknemer->postcode}}</div>
                                <div class="mdc-typography--headline9">{{$werknemer->straat. ' ' . $werknemer->hnummer}}</div>
                                <div class="mdc-typography--headline9">{{$werknemer->telnummer}}</div>
                                <a href="{{$werknemer->path()}}"><i aria-hidden="true" class="material-icons mdc-button__icon"><!---->pageview<!----></i></a> <a href="{{$werknemer->deletepath()}}"><i aria-hidden="true" class="material-icons mdc-button__icon"><!---->delete<!----></i></a> <a href="{{$werknemer->editpath()}}"><i aria-hidden="true" class="material-icons mdc-button__icon"><!---->edit<!----></i></a>

                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
@endsection
