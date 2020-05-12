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
        <div class="mdc-card element-card earth">
            <div class="mdc-card__media">
                <div class="mdc-card__media-content">
                    <div class="mdc-typography--headline4">{{ $bedrijf->naam }}</div>
                    <div class="mdc-typography--headline9">{{ $bedrijf->plaats}}</div>
                    <div class="mdc-typography--headline9">{{$bedrijf->postcode}}</div>
                    <div class="mdc-typography--headline9">{{$bedrijf->straat. ' ' . $bedrijf->hnummer}}</div>
                    <div class="mdc-typography--headline9">{{$bedrijf->telnummer}}</div>
                    <a href="{{$bedrijf->deletepath()}}"><i aria-hidden="true" class="material-icons mdc-button__icon"><!---->delete<!----></i></a> <a href="{{$bedrijf->editpath()}}"><i aria-hidden="true" class="material-icons mdc-button__icon"><!---->edit<!----></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
