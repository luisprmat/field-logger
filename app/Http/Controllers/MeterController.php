<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMeterRequest;
use App\Http\Requests\UpdateMeterRequest;
use App\Models\Meter;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MeterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $meters = Meter::withCount('readings')
            ->orderBy('name')
            ->paginate(15);

        return view('meters.index', compact('meters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('meters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMeterRequest $request): RedirectResponse
    {
        $meter = Meter::create($request->validated());

        return redirect()->route('meters.show', $meter)->with('status', __('Meter created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Meter $meter): View
    {
        $meter->load(['readings' => fn ($q) => $q->latest('noted_at')]);

        return view('meters.show', compact('meter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meter $meter): View
    {
        return view('meters.edit', compact('meter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMeterRequest $request, Meter $meter): RedirectResponse
    {
        $meter->update($request->validated());

        return to_route('meters.show', $meter)->with('status', __('Meter updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meter $meter): RedirectResponse
    {
        $meter->delete();

        return to_route('meters.index')->with('status', __('Meter deleted'));
    }
}
