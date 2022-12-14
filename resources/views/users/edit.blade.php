@extends ('layouts.layout')
@section ('title','cadastro')
@section ('content')

  <div class="d-flex h-100 m-2 position-absolute justify-content-center align-items-center">
    <div class="p-4 w-60 bg-light">
<h1  title=:)s2>EDIÇÃO DE CADASTRO DE PESSOAS/EMPRESAS</h1>
    <form method="POST" action="{{route('user.update',$user->id)}}">
      @csrf
      @method('PUT')

  <div class="col-md-12">
    <label for="name" class="form-label"> nome</label>
    <input type="text" class="form-control is-valid" id="name" name="name" value="{{$user->name}}" required>
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-12">
    <label for="email" class="form-label">email</label>
    <input type="text" class="form-control is-valid" id="email" name="email" value="{{$user->email}}" required>
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-12">
    <label for="email_verified_at" class="form-label">verificação do email</label>
    <input type="text" class="form-control is-valid" id="email_verified_at" name="email_verified_at" value="{{$user->email_verified_at}}" required>
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-12">
    <label for="cpf" class="form-label">cpf</label>
    <input type="text" class="form-control is-valid" id="cpf" name="cpf" value="{{$user->cpf}}" required>
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-12">
    <label for="phone" class="form-label">telefone</label>
    <input type="text" class="form-control is-valid" id="phone" name="phone" value="{{$user->phone}}" required>
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-12">
    <label for="type" class="form-label">cargo</label>
    <input type="text" class="form-control is-valid" id="type" name="type" value="{{$user->type}}" required>
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-12">
    <label for="cnpj" class="form-label">cnpj</label>
    <input type="text" class="form-control is-valid" id="cnpj" name="cnpj" value="{{$user->establishment()->first()->cnpj}}" required>
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-12">
    <label for="trading_name" class="form-label">nome comercial</label>
    <input type="text" class="form-control is-valid" id="trading_name" name="trading_name" value="{{$user->establishment()->first()->trading_name}}" required>
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-12">
    <label for="company_name" class="form-label">razão social</label>
    <input type="text" class="form-control is-valid" id="company_name" name="company_name" value="{{$user->establishment()->first()->company_name}}" required>
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-md-12">
    <label for="address" class="form-label">Endereço</label>
    <input type="text" class="form-control is-valid" id="address" name="address" value="{{$user->establishment()->first()->address}}" required>
    <div class="valid-feedback">
    </div>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback">
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>


@endsection
