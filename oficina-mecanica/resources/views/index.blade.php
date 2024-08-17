@extends('layout')

@section('content')
    <h1 class="my-4">Lista de Carros</h1>
    <a href="{{ route('create') }}" class="btn btn-primary mb-3">Adicionar Novo</a>
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
@endsection
