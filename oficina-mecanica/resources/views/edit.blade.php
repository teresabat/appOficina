@extends('layout')

@section('content')
    <h1 class="my-4">Editar Carro</h1>
    <form action="{{ route('update', $car->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" class="form-control" id="modelo" value="{{ $car->modelo }}" required>
        </div>
        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" name="marca" class="form-control" id="marca" value="{{ $car->marca }}" required>
        </div>
        <div class="form-group">
            <label for="ano">Ano</label>
            <input type="number" name="ano" class="form-control" id="ano" value="{{ $car->ano }}" required>
        </div>
        <div class="form-group">
            <label for="data_ingresso">Data de Ingresso</label>
            <input type="date" name="data_ingresso" class="form-control" id="data_ingresso" value="{{ $car->data_ingresso }}" required>
        </div>
        <div class="form-group">
            <label for="orcamento">Orçamento</label>
            <input type="number" step="0.01" name="orcamento" class="form-control" id="orcamento" value="{{ $car->orcamento }}" required>
        </div>
        <div class="form-group">
            <label for="nome_mecanico">Nome do Mecânico</label>
            <input type="text" name="nome_mecanico" class="form-control" id="nome_mecanico" value="{{ $car->nome_mecanico }}" required>
        </div>
        <div class="form-group">
            <label for="metodo_pagamento">Método de Pagamento</label>
            <select name="metodo_pagamento" id="metodo_pagamento" class="form-control">
                <option value="Pix" {{ $car->metodo_pagamento == 'Pix' ? 'selected' : '' }}>Pix</option>
                <option value="Dinheiro" {{ $car->metodo_pagamento == 'Dinheiro' ? 'selected' : '' }}>Dinheiro</option>
                <option value="Débito" {{ $car->metodo_pagamento == 'Débito' ? 'selected' : '' }}>Débito</option>
                <option value="Crédito" {{ $car->metodo_pagamento == 'Crédito' ? 'selected' : '' }}>Crédito</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        <a href="{{ route('cars.index') }}" class="btn btn-secondary">Voltar ao Índice</a>

    </form>
@endsection
