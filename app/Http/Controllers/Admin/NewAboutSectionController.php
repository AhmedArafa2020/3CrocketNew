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

        $validated = $request->validate([
            'sm_title' => 'required|string|max:255',
            'big_title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            // 'overview_icon' => 'nullable|string',
            'overview_number' => 'nullable|string',
            'overview_text' => 'nullable|string',
            'btn_text' => 'nullable|string',
            'btn_link' => 'nullable|url',
            'feature_cards' => 'nullable|json',
        ]);

        $newAboutSection->update($validated);

        if (!$newAboutSection) {
            return redirect()->route('admin.new_about.edit')->with('error', 'Section not found');
        }
        return redirect()->route('admin.new_about.edit')->with('success', 'About section updated successfully!');

    }
}
