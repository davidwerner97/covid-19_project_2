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



    <div class="row frmAnimal">
        <div class="col-lg-12">

            <div class="card text-white bg-dark">
                <div class="card-body">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Create Artikel!</h1>
                </div>
                <form method="POST" action="{{route('artiekelen.store')}}">
                    @csrf
                    <div class="form-group">
                        Titel:
                        <input type="text" class="form-control form-control-user @error('titel') border-danger @enderror" name="titel" value="{{ old('titel') }}">

                        @error('titel')
                        <p class="fieldError">{{ $errors->first('titel') }}</p>
                        @enderror

                    </div>
                    <div class="form-group">
                        Datum:
                        <input type="date" class="form-control form-control-user @error('datum') border-danger @enderror" name="datum" value="{{ old('datum') }}">

                        @error('datum')
                        <p class="fieldError">{{ $errors->first('datum') }}</p>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Inhoud</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1 @error('inhoud') border-danger @enderror" name="inhoud" value="{{ old('inhoud') }}" rows="5"></textarea>

                        @error('inhoud')
                        <p class="fieldError">{{ $errors->first('inhoud') }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="label" for="bedrijf_id">Bedrijf_id:</label>
                        <select  id="bedrijven" class="form-control input @error('bedrijf_if') is-danger @enderror" name="bedrijf_id" value="{{old('bedrijf_id')}}">
                            @foreach($bedrijven as $key=>$value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                        @error('bedrijf_id')
                        <p class="fieldError">{{$errors->first('bedrijf_id')}}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
        </div>
    </div>
@endsection
