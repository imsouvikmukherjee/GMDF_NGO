<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        $request->session()->put('usertype', $request->user()->usertype);
        $request->session()->put('schoolname', $request->user()->schoolname);
        $request->session()->put('name', $request->user()->name);
        $request->session()->put('email', $request->user()->email);
        $request->session()->put('contact', $request->user()->contact);

       

        if($request->user()->usertype==='Superadmin'){
            return redirect()->intended(route('admin.dashboard', absolute: false));
        }elseif($request->user()->usertype==='School'){
            return redirect()->intended(route('admin.dashboard', absolute: false));

        }elseif($request->user()->usertype==='Student'){
            return redirect()->intended(route('school.schoolhome', absolute: false));

        }elseif($request->user()->usertype==='Teacher'){
            return redirect()->intended(route('admin.dashboard', absolute: false));

        }else{
            return redirect()->back();
        }
       
        
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $request->session()->forget('usertype');
        $request->session()->forget('schoolname');
        $request->session()->forget('name');
        $request->session()->forget('email');
        $request->session()->forget('contact');

        return redirect('/');
    }
}
