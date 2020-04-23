@extends('temptemplate')
@section('head')
    <style>

    </style>
@endsection

@section('inhoud')
            <div id="content">

                <div class="field">
                    <label class="label" for="werknemer_vnaam">voornaam</label>

                    <div class="control">
                        <input class="input @error('werknemer_vnaam') is-danger @enderror" type="text"  name="werknemer_vnaam" id="vnaam" value="{{old('werknemer_vnaam')}}">
                        @error('werknemer_vnaam')
                        <p class="alert is-danger">{{ $errors->first('werknemer_vnaam') }}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="werknemer_anaam">achternaam</label>
                    <div class="control">
                        <input class="input @error('werknemer_anaam') is-danger @enderror" type="text"  name="werknemer_anaam" id="anaam" value="{{old('werknemer_anaam')}}">
                        @error('werknemer_anaam')
                        <p class="alert is-danger">{{ $errors->first('werknemer_anaam') }}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="werknemer_plaats">plaats</label>
                    <div class="control">
                        <input class="input @error('werknemer_anaam') is-danger @enderror" type="text"  name="werknemer_anaam" id="anaam" value="{{old('werknemer_anaam')}}">
                        @error('werknemer_anaam')
                        <p class="alert is-danger">{{ $errors->first('werknemer_anaam') }}</p>
                        @enderror
                    </div>
                </div>
            </div>
@endsection
