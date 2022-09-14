@extends ('layouts.layout')
@section ('title', 'produtos')
@section ('content')
<div class="container-fluid h-100 d-flex justify-content-center align-items-center ">
  <div class=" w-75  px-4 py-4 d-flex bg-light">
    <div class="text-center opacity-100">
      <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
        @csrf


      <div class="row g-3">
            <div class="card">
              <label for="imagem" class="form-label">Imagem</label>
              <input type="file" name="image" class="form-control" accept="image/*">
              @error('image')
              <div class="text-danger">
                {{message}}
                </div>
                  @enderror
            </div>


                <div class="col-md-12">
                  <label class="form-label">nome</label>
                  <input class="form-control" type="text" name="name" aria-label="nome do produto" required>
              @error('name')
              <div class='text-danger'>
                {{$message}}
                </div>
                @enderror
                </div>

              <div class="col-md-12">
                <label for="descrição do produto" class="form-label">descrição do produto</label>
                <input class="form-control" type="text" name="description" aria-label="nome do produto">
                @error('description')
                <div class='text-danger'>
                  {{$message}}
                </div>
                  @enderror
                </div>


                <div class="col-md-12">
                  <label  class="form-label">preço do produto</label>
              <input class="form-control" type="text" name="price_cents" aria-label="preço do produto">
              @error('price_cents')
              <div class='text-danger'>
                {{$message}}
              </div>
                @enderror
                  </div>



              <button  type="submit" class="btn btn-danger me-md-2  btn-lg">CONFIRMAR CADASTRO</button>
        </div>
          </form>
            </div>
              </div>
                </div>

@endsection
