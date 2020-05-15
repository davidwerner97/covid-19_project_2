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
        <form method="post" action="/artikelen">
            @csrf
            @method('PUT')


            <div class="field">
                <label class="label" for="titel">titel</label>
                <div class="control">
                    <input class="input @error('titel') is-danger @enderror" type="text" name="titel" id="titel"
                           value="{{$artikel->titel}}">
                    @error('titel')
                    <p class="alert is-danger">{{ $errors->first('titel') }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label" for="inhoud">inhoud</label>
                <div class="control">
                    <input class="input @error('inhoud') is-danger @enderror" type="text" name="inhoud"
                           id="inhoud" value="{{$artikel->inhoud}}">
                    @error('inhoud')
                    <p class="alert is-danger">{{ $errors->first('inhoud') }}</p>
                    @enderror
                </div>
            </div>
            <div class="field">
                <label class="label" for="datum">datum</label>
                <div class="control">
                    <input class="input @error('datum') is-danger @enderror" type="date" name="datum"
                           id="datum" value="{{$artikel->datum}}">
                    @error('datum')
                    <p class="alert is-danger">{{ $errors->first('datum') }}</p>
                    @enderror
                </div>
            </div>
            {{--<div class="field">
                <label class="label" for="bedrijf_id">bedrijf</label>
                <div class="control">
                    <select id="bedrijven" class="input @error('bedrijf_id') is-danger @enderror" name="bedrijf_id" id="bedrijf_id" value="{{old('bedrijf_id')}}" >
                        @foreach($artikel as $key=>$value)

                            <option value="{{$key}}" {{($key==$artikel->bedrijf_id)? 'selected' : '' }}>{{$value}}</option>

                        @endforeach
                    </select>
                    @error('bedrijf_id')
                    <p class="alert is-danger">{{ $errors->first('bedrijf_id') }}</p>
                    @enderror
                </div>
            </div>--}}
            <input type="submit">

        </form>
    </div>

@endsection






