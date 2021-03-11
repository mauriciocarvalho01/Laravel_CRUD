@extends('templates.template')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-info">
                  <h4 class="card-title">Empresa:  {{$cliente->nome}}</h4>
                  <p class="card-category">Status: {{$cliente->status}}</p>
                  <p class="card-category">Representante: {{$representante->status}}</p>
                </div>
                <div class="card-body table-responsive">
                  @csrf
                  <table class="table table-hover">
                    <thead class="text-primary">
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Cpf</th>
                      <th>Status</th>
                      <th></th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$representante->id}}</td>
                        <td>{{$representante->nome}}</td>
                        <td>{{$representante->cpf}}</td>
                        <td>{{$representante->status}}</td>
                        <td>
                        <a href="{{url("clientes/$cliente->id/alterar")}}">
                          <span class="material-icons">
                          mode
                          </span>
                        </a>
                        <a href="{{url("clientes/$cliente->id")}}">
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
