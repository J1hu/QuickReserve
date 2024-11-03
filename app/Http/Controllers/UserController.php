<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function showAllUsers()
    {
        $users = User::orderBy('created_at', 'desc')->get();

        return view('users.index', ['users' => $users]);
    }

    public function createUser()
    {
        return view('users.create');
    }

    public function storeUser(Request $request)
    {
        try {
            // Validate the incoming request
            $validated = $request->validate([
                'name' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255',
                'email' => 'required|string|email|max:255|unique:users,email',
                'role' => 'required|string|in:admin,client,provider',
                'password' => 'required|string|min:8|max:255',
            ]);

            // Create the user
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'role' => $validated['role'],
                'password' => Hash::make($validated['password']),
            ]);

            return redirect()->route('showAllUsers')->with('success', 'User created successfully.');
        } catch (ValidationException $e) {

            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'There was an error creating the user. Please try again.')
                ->withInput();
        }
    }
}
