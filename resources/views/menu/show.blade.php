@extends ('layouts.layout')
@section ('title','menuprodutos')
@section ('content')

<div class="container">
  <div class='row'>
<h2>cardapio:
  <strong> {{$menu->name}}</strong>
</h2>
<div class="d-flex flex-row">
  <ul class="list-group w-100">
    <li class="list-group-item"><strong>Descrição: </strong>{{$menu->description}}</li>
    <li class="list-group-item"><strong>Status: </strong>{{$menu->is_active ? 'Ativo' : 'Inativo'}}</li>
  </ul>
</div>
<div class='d-flex flex-column'>
  <h2>Produtos do cardápio</h2>
  <form method="POST" action="{{route('menu.product.store', $menu->id)}}" method="post">
    @csfr
    @method('PUT')
    <div class="mb-3 d-flex flex-row gap-3">
      <div>
        <label for="selectproducts">Adicionar produto:</label>
        <select id="selectproducts" class="form-select" name="product_id">
          @foreach($addableProducts as $product)
            <option value="{{$product->id}}">{{$product->name}}</option>
          @endforeach
        </select>
      </div>
        </form>
      <div class="d-flex align-items-end">
        <button type="submit" class="btn btn-succsses rounded" title="adicionar produto">
          <i class="bi bi-clipboard-plus"></i>
        </button>
      </div>
    </div>
</div>
</div>
</div>
@endsection
