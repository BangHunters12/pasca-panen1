<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Controllers\Controller;
use App\Models\Petani;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
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
        $request->validate([
        'nama_lengkap' => ['required', 'string', 'max:255'],
        'username'     => ['required', 'string', 'max:255', 'unique:petani'],
        'gender'       => ['required', 'in:Laki-laki,Perempuan'],
        'email'        => ['required', 'string', 'email', 'max:255', 'unique:petani'],
        'no_telp'      => ['required', 'string', 'max:15'],
        'alamat'       => ['required', 'string'],
        'password'     => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

    $petani = Petani::create([
        'nama_lengkap' => $request->nama_lengkap,
        'username'     => $request->username,
        'gender'       => $request->gender,
        'email'        => $request->email,
        'no_telp'      => $request->no_telp,
        'alamat'       => $request->alamat,
        'password'     => Hash::make($request->password),
        'role'         => 'petani',
    ]);

    Auth::login($petani);

    return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
