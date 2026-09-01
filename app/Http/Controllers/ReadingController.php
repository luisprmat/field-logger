<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReadingRequest;
use App\Http\Requests\UpdateReadingRequest;
use App\Models\Meter;
use App\Models\Reading;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ReadingController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReadingRequest $request, Meter $meter): RedirectResponse
    {
        $data = $request->validated();
        $data['meter_id'] = $meter->id;

        Reading::create($data);

        return back()->with('status', __('Reading added'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meter $meter, Reading $reading): View
    {
        return view('readings.edit', compact('meter', 'reading'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReadingRequest $request, Meter $meter, Reading $reading): RedirectResponse
    {
        $reading->update($request->validated());

        return to_route('meters.show', $meter)->with('status', __('Reading updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meter $meter, Reading $reading): RedirectResponse
    {
        $reading->delete();

        return back()->with('status', __('Reading deleted'));
    }
}
