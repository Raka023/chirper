<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    private string $messageRequired = 'Write something to chirp';
    private string $messageMax = 'Chrip cannot be more than 255 characters';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chirps = Chirp::latest()->take(50)->get();

        return view('home', [
            'chirps' => $chirps,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ], [
            'message.required' => $this->messageRequired,
            'message.max' => $this->messageMax,
        ]);

        Chirp::create($validated);

        return back()->with('success', 'Your chirp has been posted!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Chirp $chirp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirp $chirp)
    {
        return view('chirps.edit', [
            'chirp' => $chirp,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chirp $chirp)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ], [
            'message.required' => $this->messageRequired,
            'message.max' => $this->messageMax,
        ]);

        $chirp->update($validated);

        return redirect('/')->with('success', 'Your chirp has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirp $chirp)
    {
        $chirp->delete();

        return redirect('/')->with('success', 'Your chirp has been deleted!');
    }
}
