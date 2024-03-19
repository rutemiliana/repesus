<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Affiliation;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $affiliations = Affiliation::all();
        //dd($affiliations);
        return view('auth.register', ['affiliations' => $affiliations]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'cpf' => ['required', 'string', 'max:11','unique:'.User::class],
            'dateOfBirth' => ['required', 'date'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'lattes' => ['required', 'string', 'max:255'],
            'orcid' => ['required', 'string', 'max:200'],
            'affiliationId' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        //dd($request->affiliationId);

        $user = User::create([
            'name' => $request->name,
            'cpf' => $request->cpf,
            'dateOfBirth' => $request->dateOfBirth,
            'email' => $request->email,
            'lattes' => $request->lattes,
            'orcid' => $request->orcid,
            'affiliation_id' => $request->affiliationId,
            'access_level_id' => 2,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
