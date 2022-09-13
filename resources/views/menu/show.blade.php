@extends ('layouts.layout')
@section ('title',menuprodutos')
@section ('content')
@foreach ()

    <div class="card mb-3 m-4  w-90  px-4 py-4  ">
      <div class="d-flex flex-row">
        <div class="">
          <img src="fritas.jpg" style="width: 500px; heigth:500px" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="d-flex w-100 ">
          <div class="card-body w-100" style="">
            <h5 class="card-title">nome do cardapio</h5>
              <strong>{{$menu->name}}</strong>
            <ul class="list-group">
              <li class="list-group-item">quantidade de itens</li>
              <li class="list-group-item">data de criação</li>
              <li class="list-group-item">data da ultima alteração</li>
              <li class="list-group-item"><strong>descrição: </strong>{{$menu->description}}</li>
            </ul>
            <p class="card-text"><small class="text-muted">ativo desde 00/00/00</small></p>
          </div>
        </div>
      </div>
    <div class="m-4  w-90  px-4 py-4 bg-light">
      <h1>produtos do cardapio </h1>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <!-- <form action="{{route('menu.product.store', $)}}" -->
        <select   >PRODUTO
        </select>
      </div>
    </div>
    </div>
  @endsection
