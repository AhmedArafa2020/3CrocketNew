<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewBrandsSection;
use Illuminate\Http\Request;

class NewBrandsController extends Controller
{

    public function index()
    {
        //
    }


    public function edit()
    {


        $section = NewBrandsSection::firstOrCreate([], [
            'sm_title' => 'Our Accreditations',
            'big_title' => 'The Most Accreditation School in the Middle East ISO 21001, STEM',
            'description' => '3C Online Coding School is the most accredited coding school in the Middle East, officially certified .by ISO 21001 and STEM.org These global accreditations ensure that our programs meet the highest international standards in .educational management and STEM (Science, Technology, Engineering, and Math) learning They guarantee a high-quality learning experience that’s carefully designed to meet the needs of .every student',
            'logos' => [
                "/assets/Landing_1/assets/images/brand/brand-2/1.svg",
                "/assets/Landing_1/assets/images/brand/brand-2/2.svg",
                "/assets/Landing_1/assets/images/brand/brand-2/3.svg",
                "/assets/Landing_1/assets/images/brand/brand-2/4.svg",
                "/assets/Landing_1/assets/images/brand/brand-2/5.svg",
            ],
        ]);

        return view('admin.new_home.brands.edit', compact('section'));
    }

    public function update(Request $request)
    {

        $section = NewBrandsSection::first();

        $validated = $request->validate([
            'sm_title' => 'required|string|max:255',
            'big_title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'logos' => 'nullable|string', // Textarea input as JSON string
        ]);

        // Validate logos JSON manually
        $decodedLogos = json_decode($validated['logos'], true);
        if (!is_array($decodedLogos)) {
            return redirect()->back()->with('error', 'The logos must be a valid JSON array.');
        }

        $section = NewBrandsSection::first(); // or findOrFail($id)

        if (!$section) {
            return redirect()->back()->with('error', 'Section not found.');
        }

        $section->update([
            'sm_title' => $validated['sm_title'],
            'big_title' => $validated['big_title'],
            'description' => $validated['description'],
            'logos' => $decodedLogos, // Save as array
        ]);

        return back()->with('success', 'Brands Accreditation  section updated.');
    }



}
