@extends ('layouts.layout')
@section ('title','funcionarios')
@section ('content')
<body class="vw-100 vh-100 myBackground">
  <div class="container">
  @foreach($users as $user)
  <div class="card mb-3 m-4  w-90  px-4 py-4  ">
          <div class="d-flex flex-row">
            <div class="">
              <img src="cardapio.jpg" style="width: 250px; heigth:250px" class="img-fluid rounded-start" alt="...">
            </div>
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
                </ul>
                <p class="card-text"><small class="text-muted">ativo desde 00/00/00</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
</body>
@endsection
