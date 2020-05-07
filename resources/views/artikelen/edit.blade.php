<div class="row frmAnimal">
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Update Animal!</h1>
            </div>
            <form method="POST" action="/artikelen/{{ $artikel->id }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    Titel:
                    <input type="text" class="form-control form-control-user" name="titel" value="{{ $artikel->titel }}">
                </div>
                <div class="form-group">
                    Inhoud:
                    <input type="text" class="form-control form-control-user" name="inhoud" value="{{ $artikel->inhoud }}">
                </div>
                <div class="form-group">
                    Datum:
                    <input type="text" class="form-control form-control-user" name="datum" value="{{ $artikel->datum }}">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>
