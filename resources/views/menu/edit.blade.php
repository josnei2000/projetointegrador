@extends ('layouts.layout')
@section ('title','edicaodecardapio')
@section ('content')
<form method="POST" action="{{route('menu.update', $menu->id)}}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
    <div class="card mb-3 m-4  w-90  px-4 py-4  ">
      <div class="d-flex flex-row">
        <div class="">

        </div>
        <div class="d-flex w-100 ">
          <div class="card-body w-100" style="">
            <h5 class="card-title"></h5>
            <ul class="list-group">
              <input class="list-group-item" name="name" type="text" placeholder="nome do cardapio" aria-label="">
              <input class="list-group-item" name="description" type="text" placeholder="descrição do cardapio" aria-label="">
              <li class="list-group-item">quantidade de itens</li>
              <li class="list-group-item">data de criação</li>
              <li class="list-group-item">data da ultima alteração</li>
              <li class="list-group-item">status</li>
            </ul>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button  type="submit" class="btn btn-danger me-md-2  btn-lg">CONFIRMAR CADASTRO</button>
            </div>
          </div>

        </div>
      </div>

@endsection
