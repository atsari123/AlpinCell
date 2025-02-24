<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 5);
        $query = User::query();
        if ($request->has('search') && ($request->search != '')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%')
                ->orWhere('phone_number', 'like', '%' . $request->search . '%');
        }
        $users = $query->get();
        $users = $query->paginate($perPage);


        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stores = Store::all();
        dd($stores);
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'store_id' => 'required|exists:stores,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|in:0,1',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        // Create the user
        User::create($validatedData);

        return redirect()->route('indexuser')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('users.index')->with('error', 'User not found.');
        }

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return abort(404, '|User Tidak Ditemukan');
        }

        $registeredEmails = User::all();
        $stores = Store::all();

        return view('user.edit', compact('user', 'registeredEmails','stores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'store_id'=>'required|exists:stores,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|in:0,1',
        ]);

        $user->update($validatedData);

        return redirect()->route('indexuser')->with('success', 'User berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        if ($id == $request->userId) {
            return redirect()->back()->with(['error' => 'Anda tidak dapat menghapus akun Anda sendiri!']);
        }
        $user = User::Find($id);
        $user->delete();
        return redirect()->back()->with(['success' => 'User berhasil dihapus!']);
    }

    public function email()
    {
        $stores = Store::all();
        $registeredEmails = User::all(); // Ambil semua email pengguna
        return view('user.create', compact('registeredEmails','stores'));
    }
}
