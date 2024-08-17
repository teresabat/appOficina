@extends('layout')

@section('content')
    <h1 class="my-4">Adicionar Novo Carro</h1>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" class="form-control" id="modelo" required>
        </div>
        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" name="marca" class="form-control" id="marca" required>
        </div>
        <div class="form-group">
            <label for="ano">Ano</label>
            <input type="number" name="ano" class="form-control" id="ano" required>
        </div>
        <div class="form-group">
            <label for="data_ingresso">Data de Ingresso</label>
            <input type="date" name="data_ingresso" class="form-control" id="data_ingresso" required>
        </div>
        <div class="form-group">
            <label for="orcamento">Orçamento</label>
            <input type="number" step="0.01" name="orcamento" class="form-control" id="orcamento" required>
        </div>
        <div class="form-group">
            <label for="nome_mecanico">Nome do Mecânico</label>
            <input type="text" name="nome_mecanico" class="form-control" id="nome_mecanico" required>
        </div>
        <div class="form-group">
            <label for="metodo_pagamento">Método de Pagamento</label>
            <select name="metodo_pagamento" id="metodo_pagamento" class="form-control">
              <option value="Pix">Pix</option>
              <option value="Dinheiro">Dinheiro</option>
              <option value="Débito">Débito</option>
              <option value="Crédito">Crédito</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('cars.index') }}" class="btn btn-secondary">Voltar ao Índice</a>

    </form>
@endsection
