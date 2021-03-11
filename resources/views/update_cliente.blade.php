@extends('templates.template')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-lg-2 col-md-2"></div>
            <div class="col-lg-8 col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Editar Cliente</h4>
                  <p class="card-category">Altere aqui a ficha do cliente</p>
                </div>
                <div class="card-body table-responsive">
                <form method="POST" action="/clientes/{{"$cliente->id"}}">
                @method('PUT')
                @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nome</label>
                          <input value="{{"$cliente->nome"}}" type="text" name="nome" id="nome" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cnpj</label>
                          <input value="{{"$cliente->cnpj"}}" type="text" name="cnpj" id="cnpj" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                        <select name="status" id="status" class="form-control custom-select" aria-label="Status" required>
                          <option value="Ativo" selected>{{$cliente->status}}</option>
                          <option value="Inativo">Inativo</option>
                        </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <select name="representante_id" id="representante_id" class="form-control custom-select" aria-label="Representante" required>
                          <option value="{{"$representante->id"}}" selected>Representante</option>
                          @foreach($representantes as $rep)
                          <option value="{{"$rep->id"}}">{{$rep->nome}}</option>
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
