@extends('layout')
@section('head')

@endsection

@section('inhoud')
    <div id="content">
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
    </div>
@endsection
