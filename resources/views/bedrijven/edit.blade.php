@extends('layout')

@section('head')
    <style>

    </style>
@endsection

@section('inhoud')

    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Bedrijf aanpassen</h1>

            <form method="POST" action="{{route('bedrijven.update', $bedrijf)}}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="naam">Naam</label>

                    <div class="control">
                        <input class="input @error('naam') is-danger @enderror" type="text" name="naam" id="naam" value="{{$bedrijf->naam}}">
                        @error('naam')
                        <p class="alert is-danger">{{ $errors->first('naam') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="plaats">Plaats</label>

                    <div class="control">
                        <textarea class="textarea" name="plaats" id="plaats">{{$bedrijf->plaats}}</textarea>
                        @error('plaats')
                        <p class="alert is-danger">{{ $errors->first('plaats') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="postcode">Postcode</label>

                    <div class="control">
                        <textarea class="textarea" name="postcode" id="postcode">{{$bedrijf->postcode}}</textarea>
                        @error('postcode')
                        <p class="alert is-danger">{{ $errors->first('postcode') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="hnummer">Huisnummer</label>

                    <div class="control">
                        <textarea class="textarea" name="hnummer" id="hnummer">{{$bedrijf->hnummer}}</textarea>
                        @error('hnummer')
                        <p class="alert is-danger">{{ $errors->first('hnummer') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="straat">Straat</label>
                    <div class="control">
                        <textarea class="textarea" name="straat" id="straat">{{$bedrijf->straat}}</textarea>
                        @error('straat')
                        <p class="alert is-danger">{{ $errors->first('straat') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="datum">Telefoonnummer</label>

                    <div class="control">
                        <textarea class="textarea" name="telnummer" id="telnummer">{{$bedrijf->telnummer}}</textarea>
                        @error('telnummer')
                        <p class="alert is-danger">{{ $errors->first('telnummer') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>


@endsection