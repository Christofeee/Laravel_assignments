<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cars;

class carsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = cars::get();
        // dd($cars);
        return view('cars', [
            'cars' => $cars
        ]);
    }

    // public function index()
    // {
    //     $cars = cars::get();
    //     $car_name = $cars->car_names;
    //     $image_name = $cars->image_names;
    //     $description = $cars->description;
    //     // dd($cars);
    //     return view('cars', [
    //         // 'cars' => $cars
    //         'car_name' => $car_name,
    //         'image_name' => $image_name,
    //         'description' => $description
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
