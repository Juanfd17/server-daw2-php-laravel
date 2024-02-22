<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use http\Client\Curl\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function crearToken(){
        if(!Auth::user()) return response()->json(['error' => 'No autenticado'], 401);

        $token = Auth::user()->tokens()->where('name', 'token-api')->first();

        $abilidades = $token->abilities;

        Auth::user()->tokens()->delete();

        $token = Auth::user()->createToken('token-api', $abilidades);

        return response()->json(['token' => $token->plainTextToken]);
    }

    public function token(){
        return view('token');
    }
}
