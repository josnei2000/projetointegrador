@extends ('layouts.layout')
@section ('title','cadastro')
@section ('content')
  <div class="container-fluid h-100 d-flex justify-content-center align-items-center ">
    <div class=" w-75  px-4 py-4 d-flex bg-light justify-content-center align-items-center">
      <div class="text-center opacity-100">
        <h1>CADASTRO DE PESSOAS/EMPRESAS</h1>
        <form method="POST" action="{{route('user.store')}}">
          @csrf
        <form class="row g-3">
          <div class="col-md-6">
            <label for="for="validationServer01"" class="form-label">nome</label>
            <input class="form-control" id=id="validationServer01" name="name" required>
          </div>

          <div class="col-md-6">
            <label for="validationServerUsername" class="form-label">usuario</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend3"></span>
              <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
              <div id="validationServerUsernameFeedback" class="invalid-feedback">
              </div>
            </div>
            </div>
          <div class="col-md-6">
            <label for="validationServer02" class="form-label">senha</label>
            <input type="password" class="form-control" id="validationServer02" name="password" required>
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">endereço</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="">
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">CNPJ</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">cidade</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">telefone</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">E-mail</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">nome do responsavel</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="">
          </div>
          <button  type="submit" class="btn btn-light btn-lg">CONFIRMAR CADASTRO</button>
        </form>
      </div>
    </div>
  </div>

@endsection
