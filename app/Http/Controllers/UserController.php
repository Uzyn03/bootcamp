<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menampilkan view dengan data pengguna
    //return view('users.index');
    
        $users = User::all(); // Ambil semua data pengguna
    return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|min:5|confirmed',
            'password_confirmation'=> 'required'

        ]);
        // Simpan data ke database
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('users.index')->with('success', 'Data berhasil ditambahkan');
    }
    
    //submit data
        // dd('form tersubmit');

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $email)
    {
        //
        $user = User::where('email', $email)->first();
        return view('users.edit', compact('user'));
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
        if (Auth::id() == $id){
            return redirect()->route('users.index');
        }

        User::destroy($id);
        return redirect()->route('users.index');
    }
}
