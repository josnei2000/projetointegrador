@extends ('layouts.layout')
@section ('title','cadastro')
@section ('content')

  <div class="d-flex h-100 m-2 position-absolute justify-content-center align-items-center">
    <div class="p-4 w-60 bg-light">






<h1  title=:)s2>CADASTRO DE PESSOAS/EMPRESAS</h1>
    <form method="POST" action="{{route('user.store')}}">
      @csrf

  <div class="col-md-4">
    <label for="validationServer01" class="form-label">primeiro nome</label>
    <input type="text" class="form-control is-valid" id="validationServer01" name="name" required>
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">sobrenome</label>
    <input type="text" class="form-control is-valid" id="validationServer02" name="lastname" required>
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">usuario</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3"></span>
      <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">cidade </label>
    <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer04" class="form-label">estado</label>
    <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">...</option>
      <option>...</option>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Zip</label>
    <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
    <div id="validationServer05Feedback" class="invalid-feedback">
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
