<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $slug)
    {
        // $services = Services::where('slug', $slug)->firstOrFail();
        // return view('services.view', compact('services'));
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

    public function softwareDevService() {
        $services = Services::where('is_active', true)->get();
        return view('services.software-dev', compact('services'));
    }

    public function mobileAppDevService() {
        return view('services.mobile-dev');
    }

    function webDevService() {
        return view('services.web-dev');
    }

    function webHostingService()  {
        return view('services.web-hosting');
    }

    function graphicDesign() {
        return view('services.graphic-design');
    }

    function marketingService() {
        return view('services.marketing');
    }
}
