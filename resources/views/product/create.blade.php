@extends ('layouts.layout')
@section ('title', 'produtos')
@section ('content')
<form method="POST" action="{{route('product.store')}}">
    @csrf


              <h5 class="modal-title" id="staticBackdropLabel">produto</h5>

            </div>
            <div class="modal-body">

              <input class="form-control" type="text" name="name" aria-label="nome do produto">
              @error('name')
              <div class='text-danger'>
                {{$message}}
              </div>
                @enderror
              <div class="mb-3">
                <label for="descrição do produto" class="form-label">descrição do produto</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <input class="form-control" type="text" name="price_cents" aria-label="preço do produto">
            </div>
            <div class="footer">

              <button type="submit" class="btn btn-primary">CONFIRMAR</button>
            </div>
          </form>
        
@endsection
