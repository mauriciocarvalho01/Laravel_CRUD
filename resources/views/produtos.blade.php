@extends('templates.template')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Produtos</h4>
                  <p class="card-category">Produtos em estoque</p>
                </div>
                <div class="card-body table-responsive">
                    @csrf
                  <table class="table table-hover">
                    <thead class="text-primary">
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Status</th>
                      <th>
                      <a href="{{url("produtos/adicionar")}}">
                          <span class="material-icons">
                          add_circle
                          </span>
                          </a>
                      </th>
                    </thead>
                    <tbody>
                    @foreach($produto as $prod)
                      <tr>
                        <td>{{$prod->id}}</td>
                        <td>{{$prod->nome}}</td>
                        <td>{{$prod->status}}</td>
                        <td>
                        <a href="{{url("produtos/$prod->id")}}">
                          <span class="material-icons">
                                visibility
                          </span>
                        <a href="{{url("produtos/$prod->id/alterar")}}">
                          <span class="material-icons">
                          mode
                          </span>
                        </a>
                        <a href="{{url("produtos/$prod->id")}}">
                        <span class="material-icons">
                            delete
                        </span>
                        </a>
                        </td>
                      </tr>
                      @endforeach
                      @if(!$produto)
                      <td><p>Nenhum produto encontrado!</p></td>
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
