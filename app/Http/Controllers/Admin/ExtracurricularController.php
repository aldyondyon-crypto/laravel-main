<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function index()
    {
        $extracurriculars = Extracurricular::latest()->get();

        return view('admin.extracurriculars.index', compact('extracurriculars'));
    }

    public function create()
    {
        return view('admin.extracurriculars.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'schedule' => 'nullable|string|max:255',
            'coach' => 'nullable|string|max:255',
            'instructor' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:50',
            'image' => 'nullable|image|max:5120',
            'photo' => 'nullable|image|max:5120',
        ]);

        $instructor = $request->input('instructor') ?: $request->input('coach') ?: '-';
        $location = $request->input('location') ?: '-';
        $schedule = $request->input('schedule') ?: '-';
        $description = $request->input('description') ?: '-';
        $icon = $request->input('icon') ?: 'activity';

        $photo = null;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('extracurriculars', 'public');
        } elseif ($request->hasFile('image')) {
            $photo = $request->file('image')->store('extracurriculars', 'public');
        }

        Extracurricular::create([
            'name' => $validated['name'],
            'description' => $description,
            'instructor' => $instructor,
            'schedule' => $schedule,
            'location' => $location,
            'icon' => $icon,
            'photo' => $photo,
        ]);

        return redirect()->route('admin.extracurriculars.index')->with('success', 'Ekstrakurikuler berhasil ditambahkan!');
    }

    public function edit(Extracurricular $extracurricular)
    {
        return view('admin.extracurriculars.form', compact('extracurricular'));
    }

    public function update(Request $request, Extracurricular $extracurricular)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'schedule' => 'nullable|string|max:255',
            'coach' => 'nullable|string|max:255',
            'instructor' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:50',
            'image' => 'nullable|image|max:5120',
            'photo' => 'nullable|image|max:5120',
        ]);

        $data = [
            'name' => $validated['name'],
            'description' => $request->input('description') ?: ($extracurricular->description ?: '-'),
            'instructor' => $request->input('instructor') ?: $request->input('coach') ?: ($extracurricular->instructor ?: '-'),
            'schedule' => $request->input('schedule') ?: ($extracurricular->schedule ?: '-'),
            'location' => $request->input('location') ?: ($extracurricular->location ?: '-'),
            'icon' => $request->input('icon') ?: ($extracurricular->icon ?: 'activity'),
        ];

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('extracurriculars', 'public');
        } elseif ($request->hasFile('image')) {
            $data['photo'] = $request->file('image')->store('extracurriculars', 'public');
        }

        $extracurricular->update($data);

        return redirect()->route('admin.extracurriculars.index')->with('success', 'Ekstrakurikuler berhasil diperbarui!');
    }

    public function destroy(Extracurricular $extracurricular)
    {
        $extracurricular->delete();

        return redirect()->route('admin.extracurriculars.index')->with('success', 'Ekstrakurikuler berhasil dihapus!');
    }
}
