@extends('layout')
@section('head')
@endsection

@section('inhoud')

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="statuses">
                    @if (!empty($status))

                        <div class="col-sm-6">
                            <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $status->titel}}</h5>
                                    <i class="card-text">{{ Str::of($status->beschrijving)->limit(100)}}</i>
                                    <p class="card-text">{{$status->datum}}</p>
                                    <a href="{{$status->deletepath()}}" class="btn btn-primary">delete</a> <a href="{{$status->editpath()}}" class="btn btn-primary">edit</a>
                                </div>
                            </div>
                        </div>
                    @else
                        er zijn geen statusen
                    @endif
                </div>
            </div>
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <div class="artiekelen">
                    @if (!empty($artikelen))
                        @foreach($artikelen as $artikel)
                            <div class="col-sm-6">
                                <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $artikel->titel }}</h5>
                                        <i class="card-text">{{ $artikel->datum }}</i>
                                        <p class="card-text">{{ Str::of($artikel->inhoud)->limit(100) }}</p>
                                        <a href="/artikelen/{{ $artikel->id }}" class="btn btn-primary">Lees meer</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        er zijn geen artiekelen
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a href="/status/create" class="btn btn-primary">Maak nieuwe status</a>
                <br>
                <a href="/status" class="btn btn-primary">zie alle statussen</a>
            </div>
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <a href="/artiekelen" class="btn btn-primary">zie all nieuws</a>
            </div>
        </div>
    </div>

@endsection
