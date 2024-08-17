@extends('layout')

@section('content')
    <h1 class="my-4">Lista de Carros</h1>

    <a href="{{ route('create') }}" class="btn btn-primary mb-3">Adicionar Novo</a>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-end mb-4">
                <form method="GET" action="{{ route('index') }}" class="w-100">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome_mecanico">Buscar por Nome do Mecânico:</label>
                            <input type="text" id="nome_mecanico" name="nome_mecanico" class="form-control" value="{{ request('nome_mecanico') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>&nbsp;</label>
                            <button type="submit" class="btn btn-primary form-control">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table" style="text-align:center">
                <thead>
                    <tr>
                        <th>Modelo</th>
                        <th>Marca</th>
                        <th>Ano</th>
                        <th>Data de Ingresso</th>
                        <th>Orçamento</th>
                        <th>Nome do Mecânico</th>
                        <th>Método de Pagamento</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cars as $car)
                        <tr>
                            <td>{{ $car->modelo }}</td>
                            <td>{{ $car->marca }}</td>
                            <td>{{ $car->ano }}</td>
                            <td>{{ $car->data_ingresso }}</td>
                            <td>{{ Number::currency($car->orcamento, 'BRL') }}</td>
                            <td>{{ $car->nome_mecanico }}</td>
                            <td>{{ $car->metodo_pagamento }}</td>
                            <td>
                                <a href="{{ route('edit', $car->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('destroy', $car->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
