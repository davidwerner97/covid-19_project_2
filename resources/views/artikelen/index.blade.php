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
        <div>
            <button type="button" class="btn btn-primary text-whitebtn">
                <a href="/artikelen/create" class="btnCreateArtikel">
                    Create
                </a>
            </button>
        </div>

        <br>

        <div class="row rowArtikelen">
        @foreach ($artikelen as $artikel)
            <div class="col-4">
                <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $artikel->titel }}</h5>
                        <i class="card-text">{{ $artikel->datum }}</i>
                        <p class="card-text"> {{ $artikel->inhoud }}</p>
                        <a href="/artikelen/{{ $artikel->id }}" class="btn btn-primary">Lees meer</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>


@endsection

