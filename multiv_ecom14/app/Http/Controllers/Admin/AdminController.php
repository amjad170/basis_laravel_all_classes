<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    // Admin dashboard
    public function admin_dashboard(){
        return view('admin.index');
    }

    // Admin login
    public function adminlogin(){
        return view('admin.admin_login');
    }

    // Admin logout
    public function adminlogout(Request $request): RedirectResponse
    {
            Auth::guard('web')->logout();
    
            $request->session()->invalidate();
    
            $request->session()->regenerateToken();
    
            return redirect('/admin/login');
    }
}
