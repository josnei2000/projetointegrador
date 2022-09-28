@extends ('layouts.layout')
@section ('title','funcionarios')
@section ('content')

  @foreach($users as $user)

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">{{$user->name}}</h5>
          <ul class="list-group">
              <li class="list-group-item">CARGO:{{$user->tipo}}</li>
              <li class="list-group-item">18 ANOS</li>
              <li class="list-group-item">ENDEREÇO</li>
              <li class="list-group-item">TELEFONE:{{$user->phone}}</li>
              <li class="list-group-item">CPF:{{$user->cpf}}</li>
              <li class="list-group-item">EMAIL:{{$user->email}}</li>
              <li class="list-group-item">TIPO:{{$user->is_manager() ? 'Gerente' : 'Funcionário'}}</li>
          </ul>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>

          <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary">EDITAR</a>

          <form
            method="POST" action="{{route('user.destroy', $user->id)}}">
            @csrf
            @method('delete')
          <button type="submit" class="btn btn-secondary">EXCLUIR</button>
        </form>
        </div>
      </div>
    </div>
  </div>
      @endforeach

@endsection
