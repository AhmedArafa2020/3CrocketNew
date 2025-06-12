<?php

namespace App\Http\Controllers\Admin;

use App\Models\NewAboutSection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewAboutSectionController extends Controller
{

    public  function edit()
    {
        // Get the first and only "New About" section
        $newAboutSection = NewAboutSection::first();

        // Pass it to the view
        return view('admin.new_home.about.edit', compact('newAboutSection'));
    }

    public function update(Request $request)
    {
        $newAboutSection = NewAboutSection::first();

        if (!$newAboutSection) {
            return redirect()->back()->with('error', 'Section not found');
        }

        try {
            $validated = $request->validate([
                'sm_title' => 'required|string|max:255',
                'big_title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'image' => 'nullable|image',
                'overview_number' => 'nullable|string',
                'overview_text' => 'nullable|string',
                'btn_text' => 'nullable|string',
                'btn_link' => 'nullable|url',
                'feature_cards' => 'nullable|json', // 👈 this might fail silently if invalid
            ]);

            // Optional: dump to debug
            // dd($validated);

            if ($request->hasFile('image')) {
                $validated['image'] = $request->file('image')->store('uploads/about', 'public');
            }

            $newAboutSection->update($validated);

            return redirect()->back()->with('success', 'Updated!');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Exception: ' . $e->getMessage());
        }
    }

}
