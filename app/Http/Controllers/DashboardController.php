<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function testing()
    {
        $user = User::where('username',"testing")->get();
        if($user->isEmpty())
        {
            dd("Kosong");
        }else{
            dd("Ada Data");
        }
    }
}
