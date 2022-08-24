@extends ('layouts.layout')
@section ('title','produtos')
@section ('content')

@foreach($product as $product)
<table class="table table-striped table-hover bg-light">
  <thead>
    <tr>
      <th scope="col">item</th>
      <th scope="col">produto</th>
      <th scope="col">descrição</th>
      <th scope="col">preço</th>
      <th scope="col">editar/novo</th>
      <th scope="col">remover</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->price_cents}}</td>
      <td>
        <button type="button" class="btn btn-danger bi bi-wrench-adjustable" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        </button>
      </td>
      <td><button type="button" class="btn btn-danger" <td=""><i class="bi bi-trash3-fill"></i></button></td>
    </tr>
  </tbody>
</table>
@endforeach

@endsection
