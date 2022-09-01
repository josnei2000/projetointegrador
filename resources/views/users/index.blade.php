@extends ('layouts.layout')
@section ('title','funcionarios')
@section ('content')

  @foreach($users as $user)

            <div class="d-flex w-100 ">
              <div class="card-body w-100" style="">
                <h5 class="card-title">{{$user->name}}</h5>
                <ul class="list-group">
                    <li class="list-group-item">CARGO:{{$user->tipo}}</li>
                    <li class="list-group-item">18 ANOS</li>
                    <li class="list-group-item">ENDEREÇO</li>
                    <li class="list-group-item">TELEFONE:{{$user->phone}}</li>
                    <li class="list-group-item">CPF:{{$user->cpf}}</li>
                    <li class="list-group-item">EMAIL:{{$user->email}}</li>
                    <li class="list-group-item">TIPO:{{$user->isManager() ? 'Gerente' : 'Funcionário'}}</li>
                </ul>
                <p class="card-text"><small class="text-muted">ativo desde 00/00/00</small></p>
                <form method="POST" action="{{route('user.destroy', $user->id)}}">
                  @csrf
                  @method("delete")
                  <button type="button" type="submit" class="btn btn-secondary">EXCLUIR</button>

                  <button type="button" type="submit" class="btn btn-primary">EDITAR</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

@endsection
