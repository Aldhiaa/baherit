<?php

namespace Modules\Services\App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Services\Models\Service;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::where('is_active', true)
            ->orderBy('order')
            ->get();

        

        $featuredServices = Service::where('is_active', true)
            ->where('is_featured', true)
            ->orderBy('order')
            ->take(3)
            ->get();

        return view('services::index', compact('services', 'featuredServices'));
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $otherServices = Service::where('is_active', true)
            ->where('id', '!=', $service->id)
            ->orderBy('order')
            ->take(4)
            ->get();

        return view('service::show', compact('service', 'otherServices'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {}
}
