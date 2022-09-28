@extends ('layouts.layout')
@section ('title','criaçãodecardapio')
@section ('content')
<form method="POST" action="{{route('menu.store')}}" enctype="multipart/form-data">
  @csrf
      <div class="row">
        <div class="d-flex w-100 ">
          <div class="card-body w-100" style="">
            <h5 class="card-title"></h5>
            <ul class="list-group">
              <input class="form-control" name="name" type="text"  aria-label="nome do cardapio" required>
              @error('name')
                <div class="text-danger">
                    {{message}}
                </div>
            @enderror
              <input class="form-control" name="description" type="text" aria-label="descrição do cardapio" required>
              @error('description')
                <div class="text-danger">
                    {{message}}
                </div>
            @enderror
            </ul>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button  type="submit" class="btn btn-danger me-md-2  btn-lg">CONFIRMAR CADASTRO</button>
            </div>
          </div>

        </div>
      </div>

@endsection
