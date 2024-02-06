<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class CetakController extends Controller
{
    public function index()
    {
        $users = User::whereHas(
                    'roles', function($q){
                        $q->where('name', 'users');
                    }
                )->get();
        return view('cetak.kartu.index', compact('users'));
    }

    public function show($id)
    {
        $user = Role::with('users')->where('name','user')->findOrFail($id);

        return view('cetak.kartu.show',compact('user'));
    }
    public function cetak($id)
    {
        $users = User::whereHas(
                    'roles', function($q){
                        $q->where('name', 'user');
                    }
                )->findOrFail($id);
        $pdf = PDF::loadView('cetak.kartu.user', compact('user'))->setPaper('a4', 'potrait');

        return $pdf->stream('kartu_user.pdf');
    }
}