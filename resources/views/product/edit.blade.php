@extends ('layouts.layout')
@section ('title', 'edicao de produtos')
@section ('cotent')

<form method="POST" action="{{route('product.update', $product->id)}}">
    @csrf
    @method('PUT')

              <h5 class="modal-title" id="staticBackdropLabel">produto</h5>
              <button type="button" class="btn-close"  aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <input class="form-control" type="text" name="name" value="{{$product->name}}" aria-label="nome do produto">
              <div class="mb-3">
                <label for="descrição do produto" class="form-label">descrição do produto</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <input class="form-control" type="text" name="price_cents" aria-label="preço do produto">
            </div>
            <div class="footer">
              <button type="button" type="submit" class="btn btn-secondary">FECHAR</button>
              <button type="button" type="submit" class="btn btn-primary">CONFIRMAR</button>
            </div>
          </div>
        </div>

@endsection
