@extends ('layouts.layout')
@section ('title','menuprodutos')
@section ('content')


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
        <form action="{{route('menu.product.store', $menu->id)}}"method="POST">
          @csrf
        <select id="selectproducts" class="form-select" name="product_id">PRODUTO
          @foreach($addableProducts as $product)
            <option value="{{$product->id}}">{{$product->name}}</option>
          @endforeach
        </select>
        <button  type="submit" class="btn btn-danger   btn">adicionar produto</button>
      </form>
        <table class="table table-striped table-hover bg-light">
          <thead>
            <tr>
              <th scope="col">item</th>
              <th scope="col">produto</th>
              <th scope="col">descrição</th>
              <th scope="col">preço</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>testeproduto</td>
              <td>testedescrição</td>
              <td>R$0,00</td>
      </div>
    </div>
    </div>
  @endsection
