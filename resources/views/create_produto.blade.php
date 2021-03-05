@extends('templates.template')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-lg-2 col-md-2"></div>
            <div class="col-lg-8 col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Adicionar novo produto</h4>
                  <p class="card-category">Adicionar novo produto em estoque</p>
                </div>
                <div class="card-body table-responsive">
                <form method="POST" action="/produtos/adicionar">
                @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nome</label>
                          <input type="text" name="nome" id="nome" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Especificação</label>
                          <input type="text" name="especificacao" id="especificacao" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                        <select name="status" id="status" class="form-control custom-select" aria-label="Status" required>
                          <option value="Ativo" selected>Ativo</option>
                          <option value="Inativo">Inativo</option>
                        </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <select name="marca_id" id="marca_id" class="form-control custom-select" aria-label="Marca" required>
                          <option value="{{"$marca_padrao->id"}}" selected>{{$marca_padrao->descricao}}</option>
                          @foreach($marca as $marc)
                          <option value="{{"$marc->id"}}">{{$marc->descricao}}</option>
                          @endforeach
                        </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                        <select name="categoria_id" id="categoria_id" class="form-control custom-select" aria-label="Categoria" required>
                          <option value="{{"$categoria_padrao->id"}}" selected>{{$categoria_padrao->descricao}}</option>
                          @foreach($categoria as $cat)
                          <option value="{{"$cat->id"}}">{{$cat->descricao}}</option>
                          @endforeach
                        </select>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Cadastrar</button>
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
