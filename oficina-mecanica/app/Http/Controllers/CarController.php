<?php

namespace App\Http\Controllers;

use App\Helpers\NumberHelper;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
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
