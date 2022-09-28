@extends ('layouts.layout')
@section ('title','cardapio')
@section ('content')
@foreach ($menu as $menu)
<form method="POST" action ="{{route('menu.destroy', $menu->id)}}">
  @csrf
  @method('delete')
<div class="container">
  <div class='row'>
     <div class='col-6'>
          <div class='card'>
            <div class="card-body">
              <h5 class="card-title">{{$menu->name}}</h5>
                <div class="d-grid gap-2">
                  <button class="btn btn-light" href="{{route('menu.edit', $menu->id)}}" type="button">editar/adicionar</button>
                  <button class="btn btn-light" href="{{route('menu.show', $menu->id)}}" type="button">visualizar</button>
                  <button class="btn btn-danger" type="submit">remover</button>
                </div>
              <div class="card-footer">
              <small class="text-muted">{{$menu->description}}</small>
              </div>
            </div>
          </div>
     </div>
   </div>
</div>
</form>






<!-- <div class="container">
  <div class="m-4 w-90 px-4 py-4 row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">{{$menu->name}}</h5>
            <div class="d-grid gap-2">
              <button class="btn btn-light" type="button">editar/adicionar</button>
              <button class="btn btn-light" type="button">remover</button>
            </div>

          <div class="card-footer">
          <small class="text-muted">{{$menu->description}}</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="m-4 w-90 px-4 py-4 row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <div class="d-grid gap-2 col-6 mx-auto">
            <a class="btn btn-danger" href="{{route('menu.create', $menu->id)}}" type="button">criar novo</a>
            <button class="btn btn-danger" href="{{route('menu.edit', $menu->id)}}" type="button">editar</button>
          </div>
        </div>

        <div class="card-footer">
        </div>
      </div>
    </div>
  </div>
</div> -->
    @endforeach
  @endsection
