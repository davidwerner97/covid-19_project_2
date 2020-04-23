@extends('layout')
@section('head')
    <style>

    </style>
@endsection

@section('inhoud')
    <div id="content">
        <form method="post" action="/werknemer/">
            @csrf

            <div class="field">
                <label class="label" for="vnaam">voornaam</label>

                <div class="control">
                    <input class="input @error('vnaam') is-danger @enderror" type="text" name="vnaam" id="vnaam"
                           value="{{old('vnaam')}}">
                    @error('vnaam')
                    <p class="alert is-danger">{{ $errors->first('vnaam') }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label" for="anaam">achternaam</label>
                <div class="control">
                    <input class="input @error('anaam') is-danger @enderror" type="text" name="anaam" id="anaam"
                           value="{{old('anaam')}}">
                    @error('anaam')
                    <p class="alert is-danger">{{ $errors->first('anaam') }}</p>
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
                    <input class="input @error('postcode') is-danger @enderror" type="text" name="postcode"
                           id="postcode" value="{{old('postcode')}}">
                    @error('postcode')
                    <p class="alert is-danger">{{ $errors->first('postcode') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="hnummer">huisnummer</label>
                <div class="control">
                    <input class="input @error('hnummer') is-danger @enderror" type="text" name="hnummer" id="hnummer"
                           value="{{old('hnummer')}}">
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
                    <p class="alert is-danger">{{ $errors->first('straat') }}</p>
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
            <input name="bedrijf_id">
            <input type="submit">

        </form>
    </div>

@endsection
