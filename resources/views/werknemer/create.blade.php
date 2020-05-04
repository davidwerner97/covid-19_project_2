@extends('layout')
@section('head')
    <style>

    </style>
@endsection

@section('inhoud')
    <div id="content">
        <form method="post" action="{{route('werknemer.store')}}">
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
            <div class="field">
                <label class="label" for="telnummer">functie</label>
                <div class="control">
                    <input class="input @error('functie') is-danger @enderror" type="text" name="functie"
                           id="functie" value="{{old('functie')}}">
                    @error('functie')
                    <p class="alert is-danger">{{ $errors->first('functie') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="bedrijf_id">bedrijf</label>
                <div class="control">
                    <input class="input @error('bedrijf_id') is-danger @enderror" type="text" list="bedrijven" name="bedrijf_id" id="bedrijf_id" value="{{old('bedrijf_id')}}">
                    <datalist id="bedrijven">
                        @foreach($bedrijven as $key=>$value)

                            <option value="{{$key}}">{{$value}}</option>

                        @endforeach
                    </datalist>
                    @error('bedrijf_id')
                    <p class="alert is-danger">{{ $errors->first('bedrijf_id') }}</p>
                    @enderror
                </div>
            </div>

            <br>
            <input type="submit">

        </form>
    </div>

@endsection
