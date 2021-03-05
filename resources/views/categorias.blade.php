@extends('templates.template')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Categorias</h4>
                  <p class="card-category">Categorias de produtos em estoque</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>Descrição</th>
                      <th>Status</th>
                      <th></th>
                    </thead>
                    <tbody>
                    @foreach($categoria as $cat)
                      <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->descricao}}</td>
                        <td>{{$cat->status}}</td>
                        <td>
                        <a href="{{url("categorias/$cat->id")}}">
                          <span class="material-icons">
                                visibility
                          </span>
                        </a>
                        <a href="">
                          <span class="material-icons">
                          add_circle
                          </span>
                        </a>
                        <a href="">
                          <span class="material-icons">
                          mode
                          </span>
                        </a>
                        <a href="">
                        <span class="material-icons">
                            delete
                        </span>
                        </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
