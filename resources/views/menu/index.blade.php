@extends ('layouts.layout')
@section ('title','cardapio')
@section ('content')
@foreach ($menu as $menu)
<div class="container">
  <div class='row'>
     <div class='col-6'>
        <div class='card'>
          <div class="card-body">
            <h5 class="card-title">{{$menu->name}}</h5>
              <div class="d-grid gap-2">
                <a class="btn btn-light" href="{{route('menu.edit', $menu->id)}}" type="button">editar/adicionar</a>
                <a class="btn btn-light" href="{{route('menu.show', $menu->id)}}" type="button">visualizar</a>
                <form method="POST" action ="{{route('menu.destroy', $menu->id)}}">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger" type="submit">remover</button>
                </form>
              </div>
              <div class="card-footer">
                <small class="text-muted">{{$menu->description}}</small>
              </div>
          </div>
        </div>
     </div>
   </div>
</div>

@endforeach
@endsection
