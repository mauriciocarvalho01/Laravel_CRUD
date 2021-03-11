@extends('templates.template')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-rose">
                  <h4 class="card-title">Empresas Clientes</h4>
                  <p class="card-category">Clientes cadastrados</p>
                </div>
                <div class="card-body table-responsive">
                    @csrf
                  <table class="table table-hover">
                    <thead class="text-primary">
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Cnpj</th>
                      <th>Status</th>
                      <th>
                      <a href="{{url("clientes/adicionar")}}">
                          <span class="material-icons">
                          add_circle
                          </span>
                          </a>
                      </th>
                    </thead>
                    <tbody>
                    @foreach($cliente as $cli)
                      <tr>
                        <td>{{$cli->id}}</td>
                        <td>{{$cli->nome}}</td>
                        <td>{{$cli->cnpj}}</td>
                        <td>{{$cli->status}}</td>
                        <td>
                        <a href="{{url("clientes/$cli->id")}}">
                          <span class="material-icons">
                                visibility
                          </span>
                        <a href="{{url("clientes/$cli->id/alterar")}}">
                          <span class="material-icons">
                          mode
                          </span>
                        </a>
                        <a href="{{url("clientes/$cli->id")}}">
                        <span class="material-icons">
                            delete
                        </span>
                        </a>
                        </td>
                      </tr>
                      @endforeach
                      @if(!$cliente)
                      <td><p>Nenhum cliente encontrado!</p></td>
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
