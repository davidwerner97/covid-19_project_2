
    <div class="row frmAnimal">
        <div class="col-lg-6">
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
                        Inhoud:
                        <input type="text" class="form-control form-control-user @error('inhoud') border-danger @enderror" name="inhoud" value="{{ old('inhoud') }}">

                        @error('inhoud')
                        <p class="fieldError">{{ $errors->first('inhoud') }}</p>
                        @enderror

                    </div>
{{--                    <div class="form-group">--}}
{{--                        Datum:--}}
{{--                        <input type="date" class="form-control form-control-user @error('datum') border-danger @enderror" name="datum" value="{{ old('datum') }}">--}}

{{--                        @error('datum')--}}
{{--                        <p class="fieldError">{{ $errors->first('datum') }}</p>--}}
{{--                        @enderror--}}

{{--                    </div>--}}
{{--             /--}}
                    <div class="form-group">
                        <label class="label" for="bedrijf_id">bedrijf_id:</label>
                        <div class="control">
                            <select id="bedrijven" class="input @error('bedrijf_if') is-danger @enderror" name="bedrijf_id" value="{{old('bedrijf_id')}}">
                                @foreach($bedrijven as $key=>$value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                            </select>
                            @error('bedrijf_id')
                            <p class="fieldError">{{$errors->first('bedrijf_id')}}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
