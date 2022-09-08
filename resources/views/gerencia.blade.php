@extends ('layouts.layout')
@section ('title','cardapio')
@section ('content')
    <div class="m-4 w-90 px-4 py-4 row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="drink.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">nome do cardapio</h5>
            <div class="d-grid gap-2">
      <button class="btn btn-light" type="button">editar/adicionar</button>
      <button class="btn btn-light" type="button">remover</button>
    </div>
          </div>
          <div class="card-footer">
            <small class="text-muted">data de criação</small>
          </div>
        </div>
      </div>
    </div>
  @endsection
