<?php

namespace App\Http\Controllers;

use App\Models\Risk;
use Illuminate\Http\Request;

class RiskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $risks = Risk::all();
        return response()->json(['risks' => $risks], 200);
    }

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
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'role' => 'required|string|max:255',
        ]);

        // Create a new Risk instance and store it in the database
        $risk = Risk::create($request->all());

        // Return a JSON response indicating success
        return response()->json(['risk' => $risk], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Risk $risk)
    {
       // Return a JSON response with the specified risk
       return response()->json(['risk' => $risk], 200);
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
    public function update(Request $request, Risk $risk)
    {
               // Validate the incoming request data
               $request->validate([
                'name' => 'required|string|max:255',
                'title' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'role' => 'required|string|max:255',
            ]);
    
            // Update the risk instance with the new data
            $risk->update($request->all());
    
            // Return a JSON response indicating success
            return response()->json(['risk' => $risk], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Risk $risk)
    {
        // Delete the specified risk from the database
        $risk->delete();

        // Return a JSON response indicating success
        return response()->json(['message' => 'Risk deleted successfully'], 200);
    }
}
