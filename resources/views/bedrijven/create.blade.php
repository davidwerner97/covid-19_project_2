@extends('layout')
@section('head')
    <style>

    </style>
@endsection

@section('inhoud')
    <div id="content">
        <form method="post" action="{{route('bedrijven.store')}}">
            @csrf

            <div class="field">
                <label class="label" for="naam">naam bedrijf</label>

                <div class="control">
                    <input class="input @error('naam') is-danger @enderror" type="text" name="naam" id="naam"
                           value="{{old('naam')}}">
                    @error('naam')
                    <p class="alert is-danger">{{ $errors->first('naam') }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label" for="plaats">plaats</label>
                <div class="control">
                    <input class="input @error('plaats') is-danger @enderror" type="text" name="plaats" id="plaats"
                           value="{{old('plaats')}}">
                    @error('plaats')
                    <p class="alert is-danger">{{ $errors->first('plaats') }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label" for="postcode">postcode</label>
                <div class="control">
                    <input class="input @error('postcode') is-danger @enderror" type="text" name="postcode" id="postcode"
                           value="{{old('postcode')}}">
                    @error('postcode')
                    <p class="alert is-danger">{{ $errors->first('postcode') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="hnummer">huisnummer</label>
                <div class="control">
                    <input class="input @error('hnummer') is-danger @enderror" type="text" name="hnummer"
                           id="hnummer" value="{{old('hnummer')}}">
                    @error('hnummer')
                    <p class="alert is-danger">{{ $errors->first('hnummer') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="straat">straat</label>
                <div class="control">
                    <input class="input @error('straat') is-danger @enderror" type="text" name="straat" id="straat"
                           value="{{old('straat')}}">
                    @error('straat')
                    <p class="alert is-danger">{{ $errors->first('hnummer') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="telnummer">telnummer</label>
                <div class="control">
                    <input class="input @error('telnummer') is-danger @enderror" type="text" name="telnummer"
                           id="telnummer" value="{{old('telnummer')}}">
                    @error('telnummer')
                    <p class="alert is-danger">{{ $errors->first('telnummer') }}</p>
                    @enderror
                </div>
            </div>

            <br>
            <input type="submit">

        </form>
    </div>

@endsection