<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    protected function authorizeAdmin()
    {
        // Check if user has admin role
        if (!Auth::user()->hasRole('admin')) {
            abort(403, 'Unauthorized action.');
        }
    }
}
