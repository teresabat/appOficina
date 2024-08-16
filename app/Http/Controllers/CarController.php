<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all()->map(function ($car) {
            // Garantir que o valor é convertido para float
            $car->orcamento = number_format((float)$car->orcamento, 2, ',', '.');
            return $car;
        });
        return view('index', compact('cars'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required',
            'marca' => 'required',
            'ano' => 'required|integer',
            'data_ingresso' => 'required|date',
            'orcamento' => 'required|numeric',
            'nome_mecanico' => 'required',
            'metodo_pagamento' => 'required',
        ]);

        $data = $request->except('_token');
        Car::create($data);

        return redirect()->route('index');
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('edit', compact('car'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'modelo' => 'required',
            'marca' => 'required',
            'ano' => 'required|integer',
            'data_ingresso' => 'required|date',
            'orcamento' => 'required|numeric', // Corrigido aqui
            'nome_mecanico' => 'required',
            'metodo_pagamento' => 'required',
        ]);

        $data = $request->except('_token');
        $car = Car::findOrFail($id);
        $car->update($data);

        return redirect()->route('index');
    }

    public function destroy($id)
    {
        Car::destroy($id);
        return redirect()->route('index');
    }
}
