<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chirps = [
            [
                'id' => 1,
                'author' => 'John Doe',
                'message' => 'Hello world!',
                'time' => '5 minutes ago',
            ],
            [
                'id' => 2,
                'author' => 'John Doe',
                'message' => 'Hello there!',
                'time' => '30 minutes ago',
            ],
            [
                'id' => 3,
                'author' => 'John Doe',
                'message' => 'Hello everyone!',
                'time' => '1 hour ago',
            ],
        ];

        return view('home', [
            'chirps' => $chirps,
        ]);
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
