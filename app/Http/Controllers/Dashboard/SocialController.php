<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socials = Social::get();
        return view('dashboard.social.index', compact('socials'));
    }

    
    public function create()
    {
        $siteNames=['facebook','twitter','instagram','linkedin','youtube'];
        return view('dashboard.social.create',compact('siteNames'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'site_name' => 'required|in:facebook,instagram,twitter,linkedin,youtube|unique:socials',
            'link' => 'required',
        ]);

        Social::create($request->all());

        return redirect()->route('socials.index')
            ->with('success', 'Social link created successfully.');
    }

    // public function show(Social $social)
    // {
    //     $siteNames = ['facebook', 'instagram', 'twitter', 'linkedin'];
    //     return view('socials.edit', compact('social', 'siteNames'));
    // }

    public function edit(Social $social)
    {
        $siteNames=['facebook','twitter','instagram','linkedin','youtube'];
        return view('dashboard.social.edit', compact('social', 'siteNames'));
    }

    public function update(Request $request, Social $social)
    {
        $request->validate([
            'site_name' => 'required|in:facebook,instagram,twitter,linkedin,youtube|unique:socials,site_name,'.$social->id,
            'link' => 'required',
        ]);

        $social->update($request->all());

        return redirect()->route('socials.index')
            ->with('success', 'Social link updated successfully');
    }

    public function destroy(Social $social)
    {
        $social->delete();

        return redirect()->route('socials.index')
            ->with('success', 'Social link deleted successfully');
    }
}
