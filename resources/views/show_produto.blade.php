@extends('templates.template')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Produto</h4>
                  <p class="card-category">Produto em estoque</p>
                </div>
                <div class="card-body table-responsive">
                  @csrf
                  <table class="table table-hover">
                    <thead class="text-primary">
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Especificação</th>
                      <th>Marca</th>
                      <th>Categoria</th>
                      <th>Status</th>
                      <th></th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$produto->id}}</td>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->especificacao}}</td>
                        <td>{{$produto_marca->descricao}}</td>
                        <td>
                        <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{$produto_categoria[0]->descricao}}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @foreach($produto_categoria as $pc)
                          <a class="dropdown-item" href="#">{{$pc->descricao}}</a>
                        @endforeach
                        </div>
                      </div>
                        </td>
                        <td>{{$produto->status}}</td>
                        <td>
                        <a href="{{url("produtos/$produto->id/alterar")}}">
                          <span class="material-icons">
                          mode
                          </span>
                        </a>
                        <a href="{{url("produtos/$produto->id")}}">
                        <span class="material-icons js">
                            delete
                        </span>
                        </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
