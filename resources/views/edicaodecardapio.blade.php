@extends ('layout')
@section ('title','edicaodecardapio')

    <div class="card mb-3 m-4  w-90  px-4 py-4  ">
      <div class="d-flex flex-row">
        <div class="">
          <img src="fritas.jpg" style="width: 500px; heigth:500px" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="d-flex w-100 ">
          <div class="card-body w-100" style="">
            <h5 class="card-title">nome do cardapio</h5>
            <ul class="list-group">
              <li class="list-group-item">quantidade de itens</li>
              <li class="list-group-item">data de criação</li>
              <li class="list-group-item">data da ultima alteração</li>
              <li class="list-group-item">status</li>
            </ul>
            <p class="card-text"><small class="text-muted">ativo desde 00/00/00</small></p>
          </div>
        </div>
      </div>
    <div class="m-4  w-90  px-4 py-4 bg-light">
      <h1>produtos do cardapio </h1>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-danger me-md-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button">+NOVO PRODUTO
        </button>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <input class="form-control" type="text" placeholder="nome do produto" aria-label="nome do produto">
                <div class="mb-3">
                  <label for="descrição do produto" class="form-label">descrição do produto</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <input class="form-control" type="text" placeholder="preço do produto" aria-label="preço do produto">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">FECHAR</button>
                <button type="button" class="btn btn-primary">CONFIRMAR</button>
              </div>
            </div>
          </div>
        </div>
      </div>
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
            <td>testeproduto</td>
            <td>testedescrição</td>
            <td>R$0,00</td>
            <td>
              <button type="button" class="btn btn-danger bi bi-wrench-adjustable" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              </button>
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">produto</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <input class="form-control" type="text" placeholder="nome do produto" aria-label="nome do produto">
                      <div class="mb-3">
                        <label for="descrição do produto" class="form-label">descrição do produto</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <input class="form-control" type="text" placeholder="preço do produto" aria-label="preço do produto">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">FECHAR</button>
                      <button type="button" class="btn btn-primary">CONFIRMAR</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td><button type="button" class="btn btn-danger" <td><i class="bi bi-trash3-fill"></i></td>
            </button></td>
          <tr>
            <th scope="row">2</th>
            <td>testeproduto</td>
            <td>testedescrição</td>
            <td>R$0,00</td>
            <td>
              <button type="button" class="btn btn-danger bi bi-wrench-adjustable" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              </button>
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">produto</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <input class="form-control" type="text" placeholder="nome do produto" aria-label="nome do produto">
                      <div class="mb-3">
                        <label for="descrição do produto" class="form-label">descrição do produto</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <input class="form-control" type="text" placeholder="preço do produto" aria-label="preço do produto">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">FECHAR</button>
                      <button type="button" class="btn btn-primary">CONFIRMAR</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td><button type="button" class="btn btn-danger" <td><i class="bi bi-trash3-fill"></i></td>
            </button></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>testeproduto</td>
            <td>testedescrição</td>
            <td>R$0,00</td>
            <td>
              <button type="button" class="btn btn-danger bi bi-wrench-adjustable" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              </button>
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">produto</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <input class="form-control" type="text" placeholder="nome do produto" aria-label="nome do produto">
                      <div class="mb-3">
                        <label for="descrição do produto" class="form-label">descrição do produto</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
        <a class="navbar-brand" href="#">cardápios</a>              <input class="form-control" type="text" placeholder="preço do produto" aria-label="preço do produto">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">FECHAR</button>
                      <button type="button" class="btn btn-primary">CONFIRMAR</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td><button type="button" class="btn btn-danger" <td><i class="bi bi-trash3-fill"></i></td>
            </button></td>
          </tr>
          <tr>
          <tr>
            <th scope="row">4</th>
            <td>testeproduto</td>
            <td>testedescrição</td>
            <<a class="navbar-brand" href="#">cardápios</a>td>R$0,00</td>
            <td>
              <button type="button" class="btn btn-danger bi bi-wrench-adjustable" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              </button>
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">produto</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <input class="form-control" type="text" placeholder="nome do produto" aria-label="nome do produto">
                      <div class="mb-3">
                        <label for="descrição do produto" class="form-label">descrição do produto</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <input class="form-control" type="text" placeholder="preço do produto" aria-label="preço do produto">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">FECHAR</button>
                      <button type="button" class="btn btn-primary">CONFIRMAR</button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td><button type="button" class="btn btn-danger" <td><i class="bi bi-trash3-fill"></i></td>
            </button></td>
          </tr>
    </div>
    </div>
  </body>
</html>
@endsection
