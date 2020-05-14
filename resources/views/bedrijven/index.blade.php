@extends('layout')
@section('head')
@endsection

@section('inhoud')
    <div id="content">
        <div class="row">
            @foreach($bedrijven as $bedrijf)
                <div class="col-3">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-body">
                            <div class="card-title">{{$bedrijf->naam}}</div>
                            <div class="mdc-typography--headline9">{{ $bedrijf->plaats}}</div>
                            <div class="mdc-typography--headline9">{{$bedrijf->postcode}}</div>
                            <div class="mdc-typography--headline9">{{$bedrijf->straat. ' ' . $bedrijf->hnummer}}</div>
                            <div class="mdc-typography--headline9">{{$bedrijf->telnummer}}</div>
                            <a href="{{$bedrijf->path()}}"><i aria-hidden="true" class="btn btn-primary">
                                    <!---->pageview<!----></i></a><a href="{{$bedrijf->deletepath()}}"><i
                                        aria-hidden="true" class="btn btn-danger"><!---->delete<!----></i></a>
                            <a href="{{$bedrijf->editpath()}}"><i aria-hidden="true"
                                                                  class="btn btn-primary"><!---->edit
                                    <!----></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
