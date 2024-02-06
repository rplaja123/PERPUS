<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends    Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $roles = Role::all();

        return view('user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nis'           => 'required',
            'name'          => 'required',
            'email'         => 'required',
            'no_handphone'  => 'required',
            'alamat'        => 'required',
            'password'      => 'required',
 
            'roles'         => 'required|min:1',
        ]);

        $request->merge([
            'password' => bcrypt($request->get('password')),
            'email_verified_at' => now(),
        ]);

        if ($user = User::create($request->except('roles'))) {
            $roleIds = $request->get('roles');
            $roleNames = Role::whereIn('id', $roleIds)->pluck('name');
            $user->syncRoles($roleNames);
            
            flash()->success('Pengguna berhasil ditambahkan');
        } else {
            flash()->error('Tidak dapat menambahkan pengguna');
        }


        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'nis'           => 'required',
            'name'          => 'required',
            'email'         => 'required',
            'no_handphone'  => 'required',
            'alamat'        => 'required',
            'email_verified_at' => 'nullable'
        ]);

       $user->update($request->all());

       flash()->success('data pengguna berhasil di perbaharui');

       return redirect()->route('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        flash()->success('data pengguna berhasil di hapus');

        return redirect()->route('user');
    }
}