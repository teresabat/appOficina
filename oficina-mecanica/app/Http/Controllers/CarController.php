<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;

class CarController extends Controller
{
    public function index(Request $request)
    {
        // Inicia a consulta para o modelo Car
        $query = Car::query();

        // Adiciona o filtro baseado na entrada do usuário para nome_mecanico
        if ($request->filled('nome_mecanico')) {
            $query->where('nome_mecanico', 'like', '%' . $request->input('nome_mecanico') . '%');
        }

        // Obtém a lista de carros sem formatação
        $cars = $query->get();

        // Retorna a view com a lista de carros
        return view('index', compact('cars'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(StoreCarRequest $request)
    {
        Car::create($request->validated());
        return redirect()->route('index');
    }

    public function edit($id)
    {
        $car = Car::find($id);
        return view('edit', compact('car'));
    }

    public function update(UpdateCarRequest $request, $id)
    {
        $car = Car::find($id);
        $car->update($request->validated());
        return redirect()->route('index');
    }

    public function destroy($id)
    {
        Car::destroy($id);
        return redirect()->route('index');
    }
}
