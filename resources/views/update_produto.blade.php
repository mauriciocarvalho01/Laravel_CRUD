@extends('templates.template')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-lg-2 col-md-2"></div>
            <div class="col-lg-8 col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Editar produto</h4>
                  <p class="card-category">Editar produto em estoque</p>
                </div>
                <div class="card-body table-responsive">
                <form method="POST" action="/produtos/{{"$produto->id"}}">
                @method('PUT')
                @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nome</label>
                          <input value="{{"$produto->nome"}}" type="text" name="nome" id="nome" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Especificação</label>
                          <input value="{{"$produto->especificacao"}}" type="text" name="especificacao" id="especificacao" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                        <select name="status" id="status" class="form-control custom-select" aria-label="Status" required>
                          <option value="Ativo" selected>{{$produto->status}}</option>
                          <option value="Inativo">Inativo</option>
                        </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <select name="marca_id" id="marca_id" class="form-control custom-select" aria-label="Marca" required>
                          <option value="{{"$produto_marca->id"}}" selected>{{$produto_marca->descricao}}</option>
                          @foreach($marca as $marc)
                          <option value="{{"$marc->id"}}">{{$marc->descricao}}</option>
                          @endforeach
                        </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <select name="categoria_id" id="categoria_id" class="form-control custom-select" aria-label="Categoria" required>
                          <option value="{{"$produto_categoria[0]->id"}}" selected>{{$produto_categoria[0]->descricao}}</option>
                          @foreach($categoria as $cat)
                          <option value="{{"$cat->id"}}">{{$cat->descricao}}</option>
                          @endforeach
                        </select>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Editar</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-2"></div>
          </div>
        </div>
      </div>
@endsection
