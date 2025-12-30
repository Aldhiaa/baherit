<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    /**
     * Display a listing of customers.
     */
    public function index(Request $request)
    {
        $query = Customer::query();

        // Search functionality
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        $customers = $query->ordered()->paginate(15);

        return view('admin.customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new customer.
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created customer.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'website_url' => 'nullable|url|max:255',
            'display_order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        // Handle logo upload
        $logoPath = $request->file('logo_path')->store('customers/logos', 'public');

        Customer::create([
            'name' => $validated['name'],
            'logo_path' => $logoPath,
            'website_url' => $validated['website_url'] ?? null,
            'display_order' => $validated['display_order'] ?? 0,
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('admin.customers.index')
            ->with('success', 'Customer added successfully!');
    }

    /**
     * Show the form for editing a customer.
     */
    public function edit(Customer $customer)
    {
        return view('admin.customers.edit', compact('customer'));
    }

    /**
     * Update the specified customer.
     */
    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'website_url' => 'nullable|url|max:255',
            'display_order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        // Handle logo upload if new file provided
        if ($request->hasFile('logo_path')) {
            // Delete old logo
            if ($customer->logo_path) {
                Storage::disk('public')->delete($customer->logo_path);
            }
            $logoPath = $request->file('logo_path')->store('customers/logos', 'public');
            $customer->logo_path = $logoPath;
        }

        $customer->update([
            'name' => $validated['name'],
            'website_url' => $validated['website_url'] ?? null,
            'display_order' => $validated['display_order'] ?? 0,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.customers.index')
            ->with('success', 'Customer updated successfully!');
    }

    /**
     * Remove the specified customer.
     */
    public function destroy(Customer $customer)
    {
        // Delete logo file
        if ($customer->logo_path) {
            Storage::disk('public')->delete($customer->logo_path);
        }

        $customer->delete();

        return redirect()->route('admin.customers.index')
            ->with('success', 'Customer deleted successfully!');
    }
}
