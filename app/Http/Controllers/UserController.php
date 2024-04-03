<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();

        return view('user.list', [
            'data' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $path = $request->file('file')->store('avatar');
        $request->merge($request->all());

        User::create($request->all());

        return redirect('/users')->with([
            'mess' => 'Data Berhasil Disimpan',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user.add', [
            'data' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->fill($request->all());
        $user->save();

        return redirect('/users')->with([
            'mess' => 'Data Berhasil Disimpan',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users')->with([
            'mess' => 'Data Berhasil Dihapus',
        ]);
    }
}
