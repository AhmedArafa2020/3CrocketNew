<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHeroSectionRequest;
use App\Http\Requests\UpdateHeroSectionRequest;
use App\Models\HeroSection;
use Illuminate\Http\Request;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $this->authorize('admin_hero_lists');
        $hero = HeroSection::first();

        return view('admin.hero.edit', [
            'pageTitle' => trans('admin/main.hero_section'),
            'hero' => $hero
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHeroSectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHeroSectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeroSection  $heroSection
     * @return \Illuminate\Http\Response
     */
    public function show(HeroSection $heroSection)
    {
        //
    }

    // Show the Hero Section form for editing
    public function edit()
    {
        $heroSection = HeroSection::first(); // Fetch the first hero section
        return view('admin.hero.edit', compact('heroSection'));
    }

    /**
     * Update the specified resource in storage.

     */
    // Update the Hero Section
    public function update(Request $request, HeroSection $heroSection)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'button_text' => 'required|string|max:100',
        ]);

        $heroSection->update($request->only(['title', 'description', 'button_text']));

        return redirect()->route('hero.edit')->with('success', 'Hero Section updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeroSection  $heroSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeroSection $heroSection)
    {
        //
    }
}
